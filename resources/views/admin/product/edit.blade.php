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
                        Sửa.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="post" action="admin/product/{{ $product->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="position-relative row form-group">
                            <label for="brand_id" class="col-md-3 text-md-right col-form-label">Thương hiệu</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="brand_id" id="brand_id" class="form-control">
                                    <option value="">-- Chọn thương hiệu --</option>

                                    @foreach ($brands as $brand)
                                    <option {{ $product->brand_id == $brand->id ? 'selected' : '' }} value={{ $brand->id }}>
                                        {{ $brand->name }}
                                    </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="product_category_id" class="col-md-3 text-md-right col-form-label">Danh mục sản phẩm</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="product_category_id" id="product_category_id" class="form-control">
                                    <option value="">-- Chọn danh mục --</option>
                                    @foreach ($productCategorys as $productCategory)
                                    <option {{ $product->product_category_id == $productCategory->id ? 'selected' : '' }} value={{ $productCategory->id }}>
                                        {{ $productCategory->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="madein_id" class="col-md-3 text-md-right col-form-label">Xuất xứ</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="madein_id" id="madein_id" class="form-control">
                                    <option value="">-- Chọn xuất xứ --</option>

                                    @foreach ($madeins as $madein)
                                    <option {{ $product->madein_id == $madein->id ? 'selected' : '' }} value={{ $madein->id }}>
                                        {{ $madein->name }}
                                    </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">Tên sản phẩm</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="name" id="name" placeholder="Tên sản phẩm" type="text" class="form-control" value="{{ $product->name }}">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="content" class="col-md-3 text-md-right col-form-label">Nội dung</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="content" id="content" placeholder="Nội dung" type="text" class="form-control" value="{{ $product->content }}">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="price" class="col-md-3 text-md-right col-form-label">Giá bán</label>
                            <div class="col-md-9 col-xl-8  d-flex justify-center align-items-center">
                                <input required name="price" id="price" placeholder="Giá bán" type="number" class="form-control" value="{{ $product->price }}">
                                <div class="input-group-append">
                                    <div class="input-group-text"><strong>VNĐ</strong></div>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="discount" class="col-md-3 text-md-right col-form-label">Giảm giá</label>
                            <div class="col-md-9 col-xl-8  d-flex justify-center align-items-center">
                                <input required name="discount" id="discount" placeholder="Giảm giá" type="number" class="form-control" value="{{ $product->discount }}">                             
                                <div class="input-group-append">
                                    <div class="input-group-text"><strong>VNĐ</strong></div>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="weight" class="col-md-3 text-md-right col-form-label">Thể tích</label>
                            <div class="col-md-9 col-xl-8 d-flex justify-center align-items-center">
                                <input required name="weight" id="weight" placeholder="Thể tích" type="number" class="form-control" value="{{ $product->weight }}">
                                <div class="input-group-append">
                                    <div class="input-group-text"><strong>ML</strong></div>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="sku" class="col-md-3 text-md-right col-form-label">Mã sản phẩm</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="sku" id="sku" placeholder="Mã sản phẩm" type="text" class="form-control" value="{{ $product->sku }}">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="status" class="col-md-3 text-md-right col-form-label">Trạng thái</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="status" id="status" class="form-control">
                                    <option {{ $product->status ? 'selected' : '' }} value="0">Không hoạt động</option>
                                    <option {{ $product->status ? 'selected' : '' }} value="1">Hoạt động</option>
                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="description" class="col-md-3 text-md-right col-form-label">Mô tả</label>
                            <div class="col-md-9 col-xl-8">
                                <textarea class="form-control" name="description" id="description" placeholder="Mô tả">
                                {{ $product->description }}
                                </textarea>
                            </div>
                        </div>

                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="../admin/product" class="border-0 btn btn-outline-danger mr-1">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-times fa-w-20"></i>
                                    </span>
                                    <span>Hủy</span>
                                </a>

                                <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                        <i class="fa fa-download fa-w-20"></i>
                                    </span>
                                    <span>Lưu</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
<script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>

@endsection