@extends('admin.layout.master')

@section('title','Quản Lí Đơn Hàng Nhập')

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
                    Đơn Hàng Nhập
                    <div class="page-title-subheading">
                        Xem, Thêm, Cập Nhật, Xóa và Quản Lý.
                    </div>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/importinvoice/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Thêm Đơn Hàng Nhập
                </a>
            </div>
        </div>
       
    </div>
    @if(count($importinvoices))
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        <form>
                            <div class="input-group">
                                <input type="search" name="search" id="search" value="{{ request('search') }}" placeholder="Nhập ID hóa đơn..." class="form-control">
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
                                <button class="active btn btn-focus">Mọi ngày</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="">Sản phẩm</th>
                                    <th class="text-center">Nhà cung cấp</th>
                                  
                                    <th class="text-center">Tổng tiền</th>
                                    
                                    <th class="text-center">Ngày tạo hóa đơn</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($importinvoices as $importinvoice)
                                    @if(isset($importinvoice->supplier)) 
                                        <tr>
                                            <td class="text-center text-muted">#{{ $importinvoice->id }}</td>

                                             <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                    
                                                                <img style="height: 60px;" data-toggle="tooltip" title="Image" data-placement="bottom" src="front/img/products/{{ $importinvoice->importinvoiceDetails[0]->product->productImages[0]->path ?? 'noi-image.png' }}" alt="">
                                                              
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-subheading opacity-7">
                                                                @if(count( $importinvoice->importinvoiceDetails))       
                                                                    {{ $importinvoice->importinvoiceDetails[0]->product->name }}
                                                                    @if(count($importinvoice->importinvoiceDetails) > 1)
                                                                    (và {{ count($importinvoice->importinvoiceDetails)  }} sản phẩm khác)
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-center">
                                                {{ $importinvoice->supplier->name }}
                                            </td>
                                 
                                            <td class="text-center">
                                                {{ number_format($importinvoice->importinvoices_total, 0, '', '.')}}đ
                                            </td>
                                      
                                            <td class="text-center">
                                                {{ $importinvoice->created_at->format('d-m-Y') }}
                                            </td>

                                            <td class="text-center">
                                                <a href="./admin/importinvoice/{{ $importinvoice->id }}/detail" class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                    Nhập hàng
                                                </a>
                                                <form class="{{ $importinvoice->importinvoices_total > 0 ? 'd-inline' : 'd-none' }}" action="admin/importinvoice/{{ $importinvoice->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                        type="submit" data-toggle="tooltip" title="Xóa"
                                                        data-placement="bottom"
                                                        onclick="return confirm('Bạn có muốn xóa hoá đơn này?')">
                                                        <span class="btn-icon-wrapper opacity-8">
                                                            <i class="fa fa-trash fa-w-20"></i>
                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="d-block card-footer">
                        {{ $importinvoices->links() }}
                    </div>

                </div>
            </div>
        </div>
    @endif

 

</div>
<!-- End Main -->

@endsection