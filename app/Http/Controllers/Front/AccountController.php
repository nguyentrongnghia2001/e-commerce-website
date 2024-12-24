<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Services\Order\OrderServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\User\UserService;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    private $orderService;
    private $checkemail;
    private $productService;

    public function __construct(UserServiceInterface $userService, 
                                OrderServiceInterface $orderService, 
                                UserService $checkemail,
                                ProductServiceInterface $productService)
    {
        $this->userService = $userService;
        $this->orderService = $orderService;
        $this->checkemail = $checkemail;
        $this->productService = $productService;
    }

    public function login(){
        if(Auth::check()) {
            return redirect()->intended('');
        }
        return view('front.account.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => Constant::user_level_client,
        ];
        $remember = $request->remember;
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('');
        } else {
            return back()->with('notification', 'Lỗi: Sai Email hoặc mật khẩu!');
        }
    }


    public function logout(){
        Auth::logout();
        return back();
    }

    public function register(){
        if(Auth::check()) {
            Auth::logout();
        }
        return view('front.account.register');
    }

    public function postRegister(Request $request){

        $emailExists = $this->checkemail->existsByEmail($request->email); // Kiểm tra xem email đã tồn tại hay chưa

        if ($emailExists) {
            return back()
                ->with('notification', 'Lỗi: Email đã tồn tại!');
        }

        if($request->password != $request->password_confirmation){
            return back()
                ->with('notification','Lỗi: Xác nhận mật khẩu không đúng !');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'street_address' => $request->street_address,
            'phone' => $request->phone,
            'password' => bcrypt($request->password), 
            'level' => Constant::user_level_client,
        ];

        $this->userService->create($data);

        return redirect('account/login')
            ->with('notification','Đăng kí thành công! Hãy đăng nhập ngay.');
        
    }

    public function myOrderIndex()
    {
        $orders = $this->orderService->getOrderByUserId(Auth::id());
        return view('front.account.my-order.index',compact('orders'));
    }

    public function cannelMyOrder(Request $request)
    {
        $data = $request->all();
        $status =  $data['status'];
        $order_id = $data['id'];
        $this->orderService->update(['status' => $status], $order_id);
        $this->updateQtyCannelMyOrder($order_id);
        return redirect('account/my-order');
    }

    public function updateQtyCannelMyOrder($order_id)
    {
        $order = $this->orderService->find($order_id);
        $orderDetails = $order->orderDetails;

        foreach ($orderDetails as $v) {
            $product = Product::findOrFail($v->product_id);
            $initial_qty = $product->qty;
            $qty = $initial_qty + $v->qty;
            $this->productService->update(['qty' => $qty], $v->product_id);
        }
    }

    public function myOrderShow($id)
    {
        $order = $this->orderService->find($id);
        $order->name = decrypt($order->name);
        $order->email = decrypt($order->email);
        $order->phone = decrypt($order->phone);
        $order->street_address = decrypt($order->street_address);
        $order->description = decrypt($order->description);
        return view('front.account.my-order.show', compact('order'));
    }
}
