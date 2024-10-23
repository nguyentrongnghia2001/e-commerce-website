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
                        Xem, tạo, sửa, xoá và quản lý.
                    </div>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/supplier/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Tạo
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="card-header">

                    <form>
                        <div class="input-group">
                            <input type="search" name="search" id="search" value="{{ request('search') }}" placeholder="Nhập tên ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;
                                    Tìm
                                </button>
                            </span>
                        </div>
                    </form>

                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn btn-focus">Tuần này</button>
                            <button class="active btn btn-focus">Tất cả ngày</button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Tên</th>
                                <th class="text-left">Địa chỉ</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Số điện thoại</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($suppliers as $supplier)
                            <tr>
                                <td class="text-center text-muted">#{{ $supplier->id }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $supplier->name }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left">{{ $supplier->address }}</td>
                                <td class="text-left">{{ $supplier->email }}</td>
                                <td class="text-left">{{ $supplier->phone }}</td>
                                <td class="text-center">
                                    <a href="./admin/supplier/{{ $supplier->id }}/edit" data-toggle="tooltip" title="Sửa" data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                        <span class="btn-icon-wrapper opacity-8">
                                            <i class="fa fa-edit fa-w-20"></i>
                                        </span>
                                    </a>
                                    <form class="d-inline" action="admin/supplier/{{ $supplier->id }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm" type="submit" data-toggle="tooltip" title="Xóa" data-placement="bottom" onclick="return confirm('Nếu bạn xoá item này tất cả hoá đơn nhập thuộc nhà cung cấp này sẽ biến mất, bạn có muốn xoá không?')">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-trash fa-w-20"></i>
                                            </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

                <div class="d-block card-footer">
                    {{ $suppliers->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection