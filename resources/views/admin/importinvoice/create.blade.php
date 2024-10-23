@extends('admin.layout.master')

@section('title','Quản Lý Hóa Đơn Nhập')

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
                    Thêm Đơn Hàng Nhập
                    <div class="page-title-subheading">
                        Thêm
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="post" action="admin/importinvoice" enctype="multipart/form-data">
                        @csrf

                        @include('admin.components.notification')

                        <div class="position-relative row form-group">
                            <label for="supplier_id" class="col-md-3 text-md-right col-form-label">Nhà Cung Cấp</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="supplier_id" id="supplier_id" class="form-control">
                                    <option value="">-- Chọn Nhà Cung Cấp--</option>

                                    @foreach ($suppliers as $supplier )
                                    <option value={{ $supplier->id }}>
                                        {{ $supplier->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="position-relative row form-group">
                            <label for="importinvoices_price" class="col-md-3 text-md-right col-form-label">Giá nhập</label>
                            <div class="col-md-9 col-xl-8 d-flex justify-center align-items-center">
                                <input required name="importinvoices_price" class="form-control text-sm" id="importinvoices_price" placeholder="Price" type="text" class="form-control" value="">
                                <div class="input-group-append">
                                    <div class="input-group-text"><strong>VNĐ</strong></div>
                                </div>
                            </div>
                        </div>


                        <div class="position-relative row form-group">
                            <label for="importinvoices_qty"
                                class="col-md-3 text-md-right col-form-label">Số lượng</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="importinvoices_qty" id="importinvoices_qty"
                                    placeholder="Số lượng" type="number" class="form-control" value="">   
                            </div>
                        </div> --}}


                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="./admin/importinvoice" class="border-0 btn btn-outline-danger mr-1">
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


@endsection