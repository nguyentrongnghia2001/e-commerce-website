@extends('front.layout.master')

@section('title','Thanh toán')

@section('body')


<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="./"><i class="fa fa-home"></i> Trang chủ</a>
          <span>Thanh toán</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section End -->

<!--  Section Begin -->
<div class="checkout-section spad">
  <div class="container">
    <form action="" method="post" class="checkout-form">
      @csrf
      <div class="row">
        @if(Cart::count()>0)
        <div class="col-lg-6">
          
          <h4>Thông tin của bạn</h4>
          <div class="row">
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}" />
            <div class="col-lg-12">
              <label for="name">Họ và tên <span>*</span></label>
              <input required type="text" id="name" name="name" value="{{ Auth::user()->name ?? '' }}" />
            </div>
            <div class="col-lg-12">
              <label for="street">Địa chỉ <span>*</span></label>
              <input required type="text" id="street" name="street_address" class="street-first" value="{{ Auth::user()->street_address ?? '' }}" />
            </div>
            <div class="col-lg-6">
              <label for="email">Email <span>*</span></label>
              <input required type="email" id="email" name="email" value="{{ Auth::user()->email ?? '' }}" />
            </div>
            <div class="col-lg-6">
              <label for="phone">Số điện thoại <span>*</span></label>
              <input required type="number" id="phone" name="phone" value="{{ Auth::user()->phone ?? '' }}" />
            </div>
            <div class="col-lg-12">
              <label for="description">Mô tả <span>*</span></label>
              <input required type="text" id="description" name="description" />
            </div>
           
          </div>
        </div>
        <div class="col-lg-6">
         
          <div class="place-order">
            <h4>Đơn hàng của bạn</h4>
            <div class="order-total">
              <ul class="order-table">
                <li>Sản phẩm <span>Tổng tiền</span></li>

                @foreach ($carts as $cart)
                <li class="fw-normal">
                  {{ $cart->name }} x {{ $cart->qty }}
                  <span>{{ number_format($cart->price * $cart->qty)  }}đ</span>
                </li>
                @endforeach

                <li class="fw-normal">Tạm tính <span>{{ $subtotal }}đ</span></li>
                <li class="total-price">Tổng tiền <span>{{ $total }}đ</span></li>

              </ul>

              <div class="payment-check">
                <div class="pc-item">
                  <label for="pc-check">
                    Thanh toán khi nhận hàng
                    <input type="radio" name="payment_type" value="pay_later" id="pc-check" checked />
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="pc-item">
                  <label for="pc-payal">
                    Thanh toán online
                    <input type="radio" name="payment_type" value="online_payment" id="pc-payal" />
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>

              <div class="order-btn">
                <button type="submit" class="site-btn place-order">
                  Đặt Hàng
                </button>
              </div>
            </div>
          </div>
        </div>
        @else
        <div class="col-lg-12">
          <h4>Giỏ của bạn trống!</h4>
        </div>
        @endif

      </div>
    </form>
  </div>
</div>
<!--  Section End -->


@endsection