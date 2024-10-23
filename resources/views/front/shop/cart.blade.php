@extends('front.layout.master')

@section('title','Cart')

@section('body')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="./"><i class="fa fa-home"></i> Trang chủ</a>
          <span>Giỏ hàng</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<div class="shopping-cart spad">
  <div class="container">
    <div class="row">

      @if(Cart::count() > 0)
      <div class="col-lg-12">
        <div class="cart-table">
          <table>
            <thead>
              <tr>
                <th>Hình ảnh sản phẩm</th>
                <th class="p-name">Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>
                  <i onclick="confirm('Bạn có muốn xoá tất cả sản phẩm trong giỏ hàng? ') === true ? destroyCart() : ''" style="cursor: pointer" class="ti-close"></i>
                </th>
              </tr>
            </thead>
            <tbody>

              @foreach($carts as $cart)

              <tr data-rowid="{{ $cart->rowId }}">

                <td class="cart-pic first-row">
                  <img style="height: 200px; margin-left: 30px;" src="front/img/products/{{ $cart->options->images[0]->path ?? 'noi-image.png' }}" alt="">
                </td>

                <td class="cart-title first-row">
                  <h5>{{ $cart->name }}</h5>
                </td>

                <td class="p-price first-row">
                  {{ number_format($cart->price) }}
                </td>

                <td class="qua-col first-row">
                  <div class="quantity">
                    <div class="pro-qty">
                      <input type="text" onchange="this.form.submit()" value="{{ $cart->qty }}" data-rowid="{{ $cart->rowId }}">
                    </div>
                  </div>
                </td>

                <td class="total-price first-row">
                  {{ number_format($cart->price * $cart->qty) }}
                </td>

                <td class="close-td first-row">
                  <i onclick="removeCart('{{ $cart->rowId }}')" class="ti-close"></i>
                </td>

              </tr>

              @endforeach

            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="cart-buttons">
              <a href="./shop" class="primary-btn continue-shop">Tiếp tục mua</a>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-4">
            <div class="proceed-checkout">
              <ul>
                <li class="subtotal">Tổng tạm <span>{{ $subtotal }} đ</span></li>
                <li class="cart-total">Tổng cộng <span>{{ $total }} đ</span></li>
              </ul>
              <a href="./checkout" class="proceed-btn">Tiến hành thanh toán</a>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="col-lg-12">
        <h4>Giỏ hàng rỗng</h4>
      </div>
      @endif

    </div>
  </div>
</div>
<!-- Shopping Cart Section End -->

@endsection