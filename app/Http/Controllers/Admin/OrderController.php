<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Order\OrderServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderService;
    private $productService;

    public function __construct(OrderServiceInterface $orderService,
                                ProductServiceInterface $productService) 
    {
        $this->orderService = $orderService;
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = $this->orderService->searchAndPaginate('id', $request->get('search'));
        $order1s = $this->orderService->all();
        foreach ($orders as $order) {
            try {
                $order->name = decrypt($order->name);
                $order->email = decrypt($order->email);
                $order->phone = decrypt($order->phone);
                $order->street_address = decrypt($order->street_address);
                $order->description = decrypt($order->description);
            } catch (\Exception $e) {
                $order->name = 'Dữ liệu không hợp lệ';
                $order->email = 'Dữ liệu không hợp lệ';
                $order->phone = 'Dữ liệu không hợp lệ';
                $order->street_address = 'Dữ liệu không hợp lệ';
                $order->description = 'Dữ liệu không hợp lệ';
            }
        }

        return view('admin.order.index',compact('orders','order1s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = $this->orderService->find($id);
        if($order) {
            $order->name = decrypt($order->name);
            $order->email = decrypt($order->email);
            $order->phone = decrypt($order->phone);
            $order->street_address = decrypt($order->street_address);
            $order->description = decrypt($order->description);
            return view('admin.order.show', compact('order'));
        }
        return redirect('admin/order/')->with('error', 'Không tìm thấy đơn hàng này');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = $this->orderService->find($id);

        return view('admin.order.show', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->orderService->update($data, $id);

        if($data['status'] == 0 || $data['status'] == 6)
        {
            $this->updateQtyCannel($id);
        }

        return redirect('admin/order/');
    }

    public function updateQtyCannel($order_id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
