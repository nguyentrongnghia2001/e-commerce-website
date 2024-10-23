
@extends('front.layout.master')

@section('title','Chỉnh sửa thông tin')

@section('body')


<!-- Breadcrumb Section Begin -->
  <div class="breacrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <a href="./"><i class="fa fa-home"></i> Trang chủ</a>
                      <span>Chỉnh sửa thông tin</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!-- Breadcrumb Section End -->

<!--  Edit Infor Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>THÔNG TIN ĐĂNG NHẬP</h2>

                    @if (session('notification'))
                        <div class="alert alert-warning" role="alert">{{ session('notification') }}</div>
                    @endif

                    <form action="" method="post">
                        @csrf

                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}" />
                        <div class="group-input">
                            <label for="name">Họ tên *</label>
                            <input type="text" id="name" name="name" value="{{  Auth::user()->name  }}"/>
                        </div>
                        <div class="group-input">
                            <label for="email">Địa chỉ Email *</label>
                             <input type="email" id="email" name="email" value="{{  Auth::user()->email  }}"/>
                        </div>
                               <div class="group-input">
                            <label for="street_address">Địa chỉ *</label>
                             <input type="text" id="street_address" name="street_address" value="{{  Auth::user()->street_address  }}"/>
                        </div>
                               <div class="group-input">
                            <label for="phone">Số điện thoại *</label>
                            <input type="number" id="phone" name="phone" value="{{  Auth::user()->phone  }}"/>
                        </div>
                        <div class="group-input">
                            <label for="pass">Mật khẩu *</label>
                            <input type="password" id="pass" name="password">
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Xác nhận mật khẩu *</label>
                            <input type="password" id="con-pass" name="password_confirmation"/>
                        </div>
                        <button type="submit" class="site-btn register-btn">LƯU</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Edit Infor Section End -->


@endsection
