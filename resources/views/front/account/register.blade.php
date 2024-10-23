@extends('front.layout.master')

@section('title','Đăng kí')

@section('body')

<!-- -->
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="./"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Đăng ký</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>ĐĂNG KÝ</h2>

                    @if (session('notification'))
                    <div class="alert alert-warning" role="alert">{{ session('notification') }}</div>
                    @endif

                    <form action="" method="post">
                        @csrf

                        <div class="group-input">
                            <label for="name">Họ tên *</label>
                            <input required type="text" id="name" name="name">
                        </div>
                        <div class="group-input">
                            <label for="email">Địa chỉ Email *</label>
                            <input required type="email" id="email" name="email">
                        </div>
                        <div class="group-input">
                            <label for="street_address">Địa chỉ *</label>
                            <input required type="text" id="street_address" name="street_address">
                        </div>
                        <div class="group-input">
                            <label for="phone">Số điện thoại *</label>
                            <input required type="number" id="phone" name="phone">
                        </div>
                        <div class="group-input">
                            <label for="pass">Mật khẩu *</label>
                            <input required type="password" id="pass" name="password">
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Xác nhận mật khẩu *</label>
                            <input required type="password" id="con-pass" name="password_confirmation">
                        </div>
                        <button type="submit" class="site-btn register-btn">ĐĂNG KÝ</button>
                    </form>
                    <div class="switch-login">
                        <a href="./account/login" class="or-login">Hoặc Đăng Nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Section End -->

@endsection