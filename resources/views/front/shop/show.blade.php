@extends('front.layout.master')

@section('title', 'Product')

@section('body')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="./"><i class="fa fa-home"></i> Trang chủ</a>
                    <a href="./shop">Sản phẩm</a>
                    <span>Chi tiết chi tiết sản phẩm</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Product Shop Section Begin  -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

                @include('front.shop.components.products-sidebar-filter')

            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="./front/img/products/{{ $product->productImages[0]->path ?? 'noi-image.png' }}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach($product->productImages as $productImage)
                                <div class="pt active" data-imgbigurl="./front/img/products/{{ $productImage->path }}">
                                    <img src="./front/img/products/{{ $productImage->path }}" alt="">
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{ $product->tag }}</span>
                                <h3>{{ $product->name }}</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">

                                @for($i = 1; $i <= 5; $i++) @if($i <=$product->avgRating)
                                    <i class="fa fa-star"></i>
                                    @else
                                    <i class="fa fa-star-o"></i>
                                    @endif
                                    @endfor

                                    <span>({{ count($product->productComments) }})</span>

                            </div>
                            <div class="pd-desc">
                                <p>{{ $product->content }}</p>

                                @if($product->discount != null)
                                <h4>{{ number_format($product->discount) }}đ <span> {{ number_format($product->price) }}đ</span></h4>
                                @else
                                <h4>{{ number_format($product->price) }}đ</h4>
                                @endif

                            </div>

                            <!-- <div class="quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </div> -->

                            <div class="box-btn-show">
                                <a href="javascript:addCart({{ $product->id }})" class="primary-btn pd-cart"> Thêm Vào Giỏ</a>

                                <a href="./cart" class="primary-btn view-cart"> Xem Giỏ Hàng</a>
                            </div>

                            <ul class="pd-tags">
                                <li><span>DANH MỤC</span>: {{ $product->productCategory->name }}</li>
                                <li><span>THƯƠNG HIỆU</span>: {{ $product->brand->name }}</li>
                                <li><span>XUẤT XỨ</span>: {{ $product->madein->name }}</li>
                                <li><span>DUNG TÍCH</span>: {{ $product->weight }}ml</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">MÃ SẢN PHẨM : {{ $product->sku }}</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">MÔ TẢ</a></li>
                            <li><a href="#tab-2" data-toggle="tab" role="tab">THÔNG TIN SẢN PHẨM</a></li>
                            <li><a href="#tab-3" data-toggle="tab" role="tab">ĐÁNH GIÁ ({{ count($product->productComments) }})</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <p>{!! $product->description !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">ĐÁNH GIÁ SẢN PHẨM</td>
                                            <td>
                                                <div class="pd-rating">
                                                    @for($i = 1; $i <= 5; $i++) @if($i <=$product->avgRating)
                                                        <i class="fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star-o"></i>
                                                        @endif
                                                        @endfor
                                                        <span>({{ count($product->productComments) }})</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">GIÁ</td>
                                            <td>
                                                <div class="p-price">
                                                    {{ number_format($product->price) }}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Số lượng tồn</td>
                                            <td>
                                                <div class="p-stock">
                                                    {{ $product->qty }}
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="p-catagory">DUNG TÍCH</td>
                                            <td>
                                                <div class="p-weight">
                                                    {{ $product->weight }}ml
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="p-catagory">MÃ SẢN PHẨM</td>
                                            <td>
                                                <div class="p-code">
                                                    {{ $product->sku }}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>{{ count($product->productComments) }} Bình Luận</h4>
                                    <div class="comment-option">

                                        @foreach($product->productComments as $productComment)
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="front/img/user/{{ $productComment->users->avatar ?? 'bao.jpg' }}" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    @for($i = 1; $i <= 5; $i++) @if( $i <= $productComment->rating )
                                                        <i class="fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star-o"></i>
                                                        @endif
                                                        @endfor
                                                </div>
                                                <h5> {{ $productComment->name }} <span>{{ date('d-m-y', strtotime( $productComment->created_at)) }}</span></h5>
                                                <div class="at-reply">{{ $productComment->messages }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="leave-comment">
                                        <h4>Để Lại Bình Luận</h4>
                                        <form action="" method="post" class="comment-form">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input required type="text" placeholder="Họ Tên" name="name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input required type="text" placeholder="Email" name="email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Nội Dung" name="messages"></textarea>
                                                    <div class="personal-rating">
                                                        <h6>ĐÁNH GIÁ CỦA BẠN</h6>
                                                        <div class="rate">
                                                            <input type="radio" id="star5" name="rating" value="5" />
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" id="star4" name="rating" value="4" />
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" id="star3" name="rating" value="3" />
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" id="star2" name="rating" value="2" />
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input required type="radio" id="star1" name="rating" value="1" />
                                                            <label for="star1" title="text">1 star</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="site-btn">GỬI ĐÁNH GIÁ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End  -->



@endsection