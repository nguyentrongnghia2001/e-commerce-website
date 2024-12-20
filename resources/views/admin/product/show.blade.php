@extends('admin.layout.master')

@section('title','Quản Lý Sản Phẩm')

@section('body')
<!-- Main -->
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Sản Phẩm
                    <div class="page-title-subheading">
                        Xem.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body display_data">

                    <div class="position-relative row form-group">
                        <label for="" class="col-md-3 text-md-right col-form-label">Hình ảnh sản phẩm</label>
                        <div class="col-md-9 col-xl-8">
                            <ul class="text-nowrap overflow-auto" id="images">

                                @foreach ($product->productImages as $productImage)
                                <li class="d-inline-block mr-1" style="position: relative;">
                                    <img style="height: 150px;" src="./front/img/products/{{ $productImage->path }}" alt="Image">
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Thêm ảnh sản phẩm</label>
                        <div class="col-md-9 col-xl-8">
                            <p><a href="./admin/product/{{ $product->id }}/image">Quản lý ảnh sản phẩm</a></p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Thương hiệu</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->brand->name }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="product_category_id" class="col-md-3 text-md-right col-form-label">Danh mục sản phẩm</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->productCategory->name }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="madein_id" class="col-md-3 text-md-right col-form-label">Xuất xứ</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->madein->name }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">Tên sản phẩm</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->name }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="content" class="col-md-3 text-md-right col-form-label">Nội dung</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->content }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="price" class="col-md-3 text-md-right col-form-label">Giá bán</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ number_format($product->price, 0, '', '.')}}đ</p>
                            
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="discount" class="col-md-3 text-md-right col-form-label">Giảm giá</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ number_format($product->discount, 0, '', '.')}}đ </p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="qty" class="col-md-3 text-md-right col-form-label">Số lượng</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->qty }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="weight" class="col-md-3 text-md-right col-form-label">Thể tích</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->weight }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="sku" class="col-md-3 text-md-right col-form-label">Mã sản phẩm</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $product->sku }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="featured" class="col-md-3 text-md-right col-form-label">Trạng Thái</label>
                        <div class="col-md-9 col-xl-8">
                            <p> {{ $product->status ? 'Hoạt động' : 'Không hoạt động' }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="description" class="col-md-3 text-md-right col-form-label">Mô tả</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{!! $product->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection