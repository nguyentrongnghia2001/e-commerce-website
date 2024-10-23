<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use App\Services\Order\OrderService;
use App\Services\Order\OrderServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Models\User;
use App\Services\OrderDetail\OrderDetailService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Contains;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    private $userService;
    private $productService;

    public function __construct(
        OrderServiceInterface $orderService, 
        OrderDetailService $orderDetailService,
        ProductServiceInterface $productService,
        UserServiceInterface $userService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->userService = $userService;
        $this->productService = $productService;
    }

    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request)
    {
        // Thêm đơn hàng
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);
   
        // Tính tổng và thêm chi tiết đơn hàng
        $carts = Cart::content();
        $total = 0; // Khởi tạo biến total để tính tổng
        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->qty * $cart->price,
            ];

            $this->orderDetailService->create($data);

            // Cộng dồn vào total
            $total += $data['total'];
        }

        // Lưu total vào cơ sở dữ liệu
        $order->total_orders = $total;
        $order->save();

    
        if($request->payment_type == 'pay_later'){
            //Gui mail
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendMail($order, $total, $subtotal);

            $this->updateQtySell($order->id);

            // Xóa giỏ hàng
            Cart::destroy();

            // Trả về kết quả thông báo
            return redirect('checkout/result')
                ->with('notification', 'Đơn hàng của bạn đã được đặt hàng thành công!  Hãy kiểm tra gmail của bạn!');
        }

        if ($request->payment_type == 'online_payment') {

            // Lay URL thanh toan VNPay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //ID cua don hang
                'vnp_OrderInfo' =>  $order->description,
                'vnp_Amount' => Cart::total(0, '', ''),
            ]);

            // chuyen huong toi url lay duoc
            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request)
    {
        //1 Lay data tu URL (do VNPay gui ve qua $vnp_Returnurl)
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //ma phan hoi ket qua thanh toan . 00=thanh cong
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //order_id
        $vnp_Amount = $request->get('vnp_Amount'); //so tien thanh toan

        //2 Kiem tra data, xem ket qua giao dich tra ve tu VNPay hop le khong
        if ($vnp_ResponseCode != null) {
            //Neu thanh cong
            if ($vnp_ResponseCode == 00) {
                //Cap nhat trang thai
                $this->orderService->update(['status' => Constant::order_status_Paid], $vnp_TxnRef);

                //Gui mail
                $order = $this->orderService->find($vnp_TxnRef);
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendMail($order, $total, $subtotal);
                $this->updateQtySell($order->id);

                // xoa gio hang
                Cart::destroy();

                // tra ve ket qua thong bao
                return redirect('checkout/result')
                ->with('notification', 'Đơn hàng của bạn đã được thanh toán online thành công! Hãy kiểm tra gmail của bạn!');
            } else {
                //Xoa don hang them vao database
                $this->orderService->delete($vnp_TxnRef);

                // tra ve ket qua thong bao
                return redirect('checkout/result')
                ->with('notification', 'LỖI: Thanh toán không thành công hoặc đã bị hủy!');
            }
        }
    }

    public function updateQtySell($order_id)
    {
        $order = $this->orderService->find($order_id);
        $orderDetails = $order->orderDetails;

        foreach ($orderDetails as $v) {
            $product = Product::findOrFail($v->product_id);
            $initial_qty = $product->qty;
            $qty = $initial_qty - $v->qty;
            $this->productService->update(['qty' => $qty], $v->product_id);
        }
    }


    public function result() {
        $notification = session('notification');
        return view('front.checkout.result',compact('notification')); 
    }

    public function sendMail($order, $total, $subtotal)
    {
        $email_to = $order->email;

        Mail::send('front.checkout.email', 
            compact('order', 'total', 'subtotal'), 
            function ($message) use($email_to) {
                $message->from('nghianhodoi2@gmail.com', 'Admin');
                $message->to($email_to, $email_to);
                $message->subject('Order Notification');
        });

        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }
}
