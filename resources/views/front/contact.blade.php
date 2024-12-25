@extends('front.layout.master')

@section('title', 'Contact')

@section('body')

<!-- -->
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Liên hệ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Map Section Begin -->
<div class="map spad">
    <div class="container">
        <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7188.307149509225!2d106.7029068800912!3d10.776637591712124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1bd14e483a602db!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEvhu7kgdGh14bqtdCBDYW8gVGjhuq9uZw!5e0!3m2!1svi!2s!4v1683382510639!5m2!1svi!2s" height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>
</div>
<!-- Map Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <section class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Liên hệ với chúng tôi</h4>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Địa chỉ:</span>
                            <p>NNK Shop 55 Độ Mixi, Xã Độ Thanh Phùng, Huyện Phùng Thanh, Tỉnh Phùng Thanh Độ</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Số điện thoại:</span>
                            <p>0335558888 - 03355599999</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>info.nnkshop@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Leave A Memment</h4>
                        <p>Our staff will call back later and answer your questions</p>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your content"></textarea>
                                    <button type="submit" class="site-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</section>
<!-- Contact Section End -->

@endsection