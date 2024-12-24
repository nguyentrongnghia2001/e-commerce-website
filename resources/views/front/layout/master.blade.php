<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{('/')}}">
    <meta charset="UTF-8" />
    <meta name="description" content="DongNaiBeauty" />
    <meta name="keywords" content="DongNaiBeauty" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') | DongNaiBeauty</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />


    <!-- Css Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/fancybox4/fancybox.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" type="text/css" />


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        info.dongnaibeauty@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        0799646477 - 0363897327
                    </div>
                </div>

                <div class="ht-right">

                    @if(Auth::check())
                    <a href="./account/logout" class="login-panel"><i class="fa fa-user"></i>{{ Auth::user()->name }} - Đăng xuất</a>

                    @else
                    <a href="./account/login" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>

                    @endif
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row row-header-bot">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./">
                                <img src="front/img/logo_header.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="shop">
                            <div class="advanced-search">
                                <div class="input-group">
                                    <input name="search" type="text" value="{{ request('search') }}" placeholder="Tìm kiếm sản phẩm..." />
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-2 text-right">
                        <ul class="nav-right">
                            <!-- <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li> -->
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt"></i>
                                    <span class="cart-count">{{ Cart::count() }}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach(Cart::content() as $cart)

                                                <tr data-rowid="{{ $cart->rowId }}">
                                                    <td class="si-pic">
                                                        <img style="height:70px;" src="front/img/products/{{ $cart->options->images[0]->path ?? 'noi-image.png' }}" alt="" />
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>{{ number_format($cart->price) }} x {{ $cart->qty }}</p>
                                                            <h6>{{ $cart->name }}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i onclick="removeCart('{{ $cart->rowId }}')" class="ti-close"></i>
                                                    </td>
                                                </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>Tổng tiền</span>
                                        <h5>{{ Cart::total() }}đ</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">Xem Giỏ Hàng</a>
                                        <a href="./checkout" class="primary-btn checkout-btn">Thanh Toán</a>
                                    </div>

                                </div>

                            </li>
                            <li class="cart-price">{{ Cart::total() }}đ</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="./">Trang Chủ</a></li>
                        <li class="{{ (request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="./shop">Sản Phẩm</a></li>
                        <li><a href="./blog">Tin tức</a></li>
                        <li><a href="./contact">Liên Hệ</a></li>
                        <li><a href="./cart">Giỏ Hàng</a></li>
                        <li>
                            <a href="">Khác</a>
                            <ul class="dropdown">
                                <li><a href="./account/my-order">Đơn hàng của tôi</a></li>
                                <li><a href="./faq">Các Câu Hỏi Thường Gặp</a></li>
                                <li><a href="./checkout">Thanh Toán</a></li>
                                <li><a href="./account/register">Đăng Ký</a></li>
                                @if(!Auth::check())
                                    <li><a href="./account/login">Đăng Nhập</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Body here -->
    @yield('body')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row row-footer">
                <div class="col-lg-2">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="front/img/logo_footer.png" height="25" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Thông Tin Liên Hệ</h5>
                        <div class="info-footer">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i></i> 789 Lý Thái Tổ, Xã Phú Hữu, Huyện Nhơn Trạch, Tỉnh Đồng Nai</p>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> info.dongnaibeauty@gmail.com</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i></i> 0799646477 - 0363897327</p>
                            <p><i class="fa fa-paper-plane-o" aria-hidden="true"></i> dongnaibeauty.io.vn</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>DONGNAIBEAUTY</h5>
                        <ul>
                            <li><a href="./shop">Sản Phẩm</a></li>
                            <li><a href="./blog">Tin tức</a></li>
                            <li><a href="./contact">Liên Hệ</a></li>
                            <li><a href="./faq">Các Câu Hỏi Thường Gặp</a></li>
                            <li><a href="./cart">Giỏ Hàng</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="footer-left">
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright © 2023. All rights reserved. Designed by Nghia and Phi
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/owlcarousel2-filter.min.js') }}"></script>
    <script src="{{ asset('front/js/all.min.js') }}"></script>
    <script src="{{ asset('front/fancybox4/fancybox.umd.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>



    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
</body>

</html>