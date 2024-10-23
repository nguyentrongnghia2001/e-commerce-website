@extends('front.layout.master')

@section('title','Home')

@section('body')

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="front/img/slide1.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Càng ngắm càng yêu</span>
                        <h1>Black friday</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>06/06</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="front/img/slide2.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Càng ngắm càng yêu</span>
                        <h1>Black friday</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="front/img/slide3.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Càng ngắm càng yêu</span>
                        <h1>Black friday</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- SRM Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sửa Rửa Mặt</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product-slider owl-carousel">

                    @foreach($statusProducts['srm'] as $product)

                    @include('front.components.product-item')

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SRM Banner Section End -->

<!-- KCN Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Kem Chống Nắng</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product-slider owl-carousel">
                    @foreach($statusProducts['kcn'] as $product)

                    @include('front.components.product-item')

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- KCN Banner Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-banner">
                    <img src="front/img/banner-qc.png" alt="" />
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- TT Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tẩy Trang</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product-slider owl-carousel">

                    @foreach($statusProducts['tc'] as $product)

                    @include('front.components.product-item')

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TT Banner Section End -->

<!-- Instagram Section Begin -->
<div class="instagram-photo">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2>Khách Hàng Tin Tưởng</h2>
            </div>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/customer_1.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">i.am.giang02</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/customer_2.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">mziennnnn</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/customer_3.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">_nguyenphuongnhi_02</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/customer_4.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">bao_tram</a></h5>
        </div>
    </div>

</div>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Bí Kíp Làm Đẹp</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <a class="scale-img" href="#"><img src="front/img/blog/{{ $blog->image }}" alt=""></a>
                    <div class="latest-text">
                        <a class="text-split2" href="#">
                            <h4>{{ $blog->title }}</h4>
                        </a>
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ date('m/d/Y', strtotime($blog->created_at )) }}
                            </div>
                        </div>
                        <p class="text-split3"> {{ $blog->subtitle }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>MIỄN PHÍ GIAO HÀNG</h6>
                            <p>Cho đơn hàng từ 500K</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>GIAO HÀNG ĐÚNG HẠN</h6>
                            <p>Không chậm trễ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-3.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>THANH TOÁN AN TOÀN</h6>
                            <p>An toàn 100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

@endsection