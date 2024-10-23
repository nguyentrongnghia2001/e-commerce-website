@extends('front.layout.master')

@section('title','Chi tiết đơn hàng')

@section('body')


<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="./"><i class="fa fa-home"></i> Trang chủ</a>
          <a href="./account/my-order">Đơn hàng của tôi</a>
          <span>Chi tiết đơn hàng</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section End -->

<!--  Detail My Order Section Begin -->
<div class="checkout-section spad">
  <div class="container">
    <form action="" class="checkout-form">

      <div class="row">
        <div class="col-lg-6">
          <div class="checkout-content">
            <div class="content-btn">Mã đơn hàng: <b>#{{ $order->id }}</b></div>
          </div>
          <h4>Thông tin đơn hàng</h4>
          <div class="row">
            <div class="col-lg-12">
              <label for="fir">Họ và tên <span>*</span></label>
              <input disabled  type="text" id="fir" name="first_name" value="{{  $order->name  }}" />
            </div>
            <div class="col-lg-12">
              <label for="street">Địa chỉ <span>*</span></label>
              <input disabled type="text" id="street" name="street_address" class="street-first" value="{{ $order->street_address }}" />
            </div>
            <div class="col-lg-6">
              <label for="email">Email Adress<span>*</span></label>
              <input disabled type="email" id="email" name="email" value="{{ $order->email }}" />
            </div>
            <div class="col-lg-6">
              <label for="phone">Phone <span>*</span></label>
              <input disabled type="number" id="phone" name="phone" value="{{ $order->phone }}" />
            </div>
            <div class="col-lg-12">
              <label for="phone">Mô tả <span>*</span></label>
              <input disabled type="text" id="description" name="description" value="{{ $order->description }}" />
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="checkout-content">
            <div class="content-btn">Trạng thái đơn hàng: <b>{{ \App\Utilities\Constant::$order_status[$order->status] }}</b></div>
          </div>
          <div class="place-order">
            <h4>Chi tiết đơn hàng</h4>
            <div class="order-total">
              <ul class="order-table">
                <li>Sản phẩm <span>Tổng cộng</span></li>

                @foreach ($order->orderDetails as $orderDetail)
                <li class="fw-normal">
                  {{ $orderDetail->product->name }} x {{ $orderDetail->qty }}
                  <span>{{ number_format($orderDetail->total) }} đ</span>
                </li>
                @endforeach

                <li class="total-price">Tổng cộng <span>{{ number_format($order->total_orders) }} đ</span></li>

              </ul>

              <div class="payment-check">
                <div class="pc-item">
                  <label for="pc-check">
                    Thanh toán khi nhận hàng
                    <input disabled type="radio" name="payment_type" value="pay_later" id="pc-check" {{ $order->payment_type == 'pay_later' ? 'checked' : '' }} />
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="pc-item">
                  <label for="pc-payal">
                    Thanh toán online
                    <input disabled type="radio" name="payment_type" value="online_payment" id="pc-payal" {{ $order->payment_type == 'online_payment' ? 'checked' : '' }} />
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!--  Detail My Order Section End -->


@endsection