@extends('admin.layout.master')

@section('title','Quản Lý Nhà Cung Cấp')

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
                    Nhà Cung Cấp
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
                    <form method="post" action="admin/supplier" enctype="multipart/form-data">
                        @csrf

                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">Tên</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="name" id="name" placeholder="Tên nhà cung cấp" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="address" class="col-md-3 text-md-right col-form-label">Địa chỉ</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="address" id="address" placeholder="Địa chỉ" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="email" id="email" placeholder="Email" type="email" class="form-control" value="">
                            </div>
                        </div>

                         <div class="position-relative row form-group">
                            <label for="phone" class="col-md-3 text-md-right col-form-label">Số điện thoại</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="phone" id="phone" placeholder="Số điện thoại" type="number" class="form-control" value="">
                            </div>
                        </div>

                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="./admin/supplier" class="border-0 btn btn-outline-danger mr-1">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-times fa-w-20"></i>
                                    </span>
                                    <span>Huỷ</span>
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