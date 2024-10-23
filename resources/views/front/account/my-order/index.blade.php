@extends('front.layout.master')

@section('title','Đơn hàng của tôi')

@section('body')

<!-- Breadcrumb Section Begin -->
  <div class="breacrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <a href="./"><i class="fa fa-home"></i> Trang chủ</a>
                      <span>Đơn hàng của tôi</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!-- Breadcrumb Section End -->

<!-- My Oder Section Begin -->
<div class="shopping-cart spad">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <div class="cart-table">
          <table>
            <thead>
              <tr>
                <th>Hình ảnh sản phẩm</th>
                <th>Id</th>
                <th class="p-name">Tên sản phẩm</th>
                <th>Tổng đơn</th>
                <th>Chi tiết</th>
              </tr>
            </thead>
            <tbody>
               @foreach($orders as $order)
                <tr>
                    <td class="cart-pic first-row">           
                      <img src="front/img/products/{{ $order->orderDetails[0]->product->productImages[0]->path}}" alt="{{ $order->orderDetails[0]->product->name }}">
                    </td>
                    <td class="first-row">{{ $order->id }}</td>
                    <td class="cart-title first-row">
                        <h5>
                          {{ $order->orderDetails[0]->product->name }}

                          @if(count($order->orderDetails) > 1) 
                            (và {{ count($order->orderDetails)  }} sản phẩm khác)
                          @endif

                        </h5>
                    </td>
                    <td class="tolal-price first-row">{{ number_format($order->total_orders) }} đ</td>
                    <td class="first-row">
                      <a class="btn-shadow btn-hover-shine btn btn btn-info" href="./account/my-order/{{ $order->id }}">Xem chi tiết</a>
                      <form  class="mt-2" method="post" action="./account/my-order" enctype="multipart/form-data">
                        @csrf
                   
                        <input type="text" name="id" id="id" hidden value="{{  $order->id }}">
                        <input type="text" name="status" id="status" hidden value="0">
               
                        <button type="submit" {{ $order->status == 0 || $order->status == 4 || $order->status == 6 ? 'disabled' : '' }} class="btn-shadow btn-hover-shine btn btn btn-danger" data-placement="bottom" onclick="return confirm('Bạn có muốn hủy đơn hàng này không? Nếu bạn đã thanh toán online vui lòng liên hệ hotline để nhận lại tiền!!!')">
                            <span>Hủy đơn hàng</span>
                        </button>                                                                           
                      </form>
                    </td>
                </tr>       
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- My Oder Section End -->

@endsection