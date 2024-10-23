@extends('admin.layout.master')

@section('title','Nhập Chi Tiết Hóa Đơn Nhập')

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
                    Nhập Chi Tiết Hóa Đơn Nhập
                    <div class="page-title-subheading">
                        Nhập
                    </div>
                </div>
            </div>

            <div class="page-title-actions">
                <button type="button" class="btn btn-primary {{ $importinvoice->importinvoices_total > 0 ? 'd-none' : '' }}" data-toggle="modal" data-target="#exampleModal">
                    Nhập sản phẩm
                </button>
                <a href="./admin/importinvoice" class="btn btn-primary {{ $importinvoice->importinvoices_total > 0 ? '' : 'd-none' }}">
                    Trở về
                </a>
            </div>
        
        </div>
    </div>


    @if(count($importinvoice->importInvoiceDetails))
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        
                        {{-- <form>
                            <div class="input-group">
                                <input type="search" name="search" id="search"
                                    placeholder="Search everything" class="form-control">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>&nbsp;
                                        Search
                                    </button>
                                </span>
                            </div>
                        </form>

                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="btn btn-focus">This week</button>
                                <button class="active btn btn-focus">Anytime</button>
                            </div>
                        </div> --}}
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-left">Sản phẩm</th>
                                    <th class="text-center">Giá nhập</th>
                                    <th class="text-center">Số lương nhập</th>
                                    <th class="text-center">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($importinvoice->importInvoiceDetails as $importinvoiceDetail)
                                    <tr>
                                        <td class="text-center">{{ $importinvoiceDetail->id }}</td>
                                        <td class="text-left">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                           
                                                              
                                                                <img style="height: 60px;"
                                                                    data-toggle="tooltip" title="Image"
                                                                    data-placement="bottom"
                                                                    src="./front/img/products/{{ $importinvoiceDetail->product->productImages[0]->path ?? 'noi-image.png' }}" alt="{{ $importinvoiceDetail->name }}">                                                                           
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{ $importinvoiceDetail->name }}</div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </td>
                                        <td class="text-center">{{  number_format($importinvoiceDetail->importinvoices_price, 0, '', '.')}}đ</td>
                                        <td class="text-center">{{ $importinvoiceDetail->importinvoices_qty }}</td>
                                        <td class="text-center">{{ $importinvoiceDetail->created_at->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-block card-footer">                      
                     
                    </div>

                </div>
            </div>
        </div>
    
        <div class="row {{ $importinvoice->importinvoices_total > 0 ? 'd-none' : '' }}">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="page-title-actions">
                            <form method="post" action="./admin/importinvoice/{{ $importinvoice->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                @php
                                $totalAmount = 0;
                                @endphp

                                @foreach ($importinvoice->importInvoiceDetails as $importinvoiceDetail)              
                                    @php
                                    
                                    $subtotal = $importinvoiceDetail->importinvoices_price * $importinvoiceDetail->importinvoices_qty;
                                    $totalAmount += $subtotal;               

                                    @endphp                                 
                                @endforeach

                                <input required name="importinvoices_total" id="importinvoices_total" type="hidden" class="form-control" value="{{ $totalAmount }}">   
                                <button type="submit" class="btn-shadow btn-hover-shine btn btn-success show-example-btn" data-toggle="tooltip" title="Lưu đơn hàng" data-placement="bottom" onclick="return confirm('Đơn hàng chỉ được lưu 1 lần bạn sẽ không được sửa lại đơn hàng nữa!!!!Bạn có chắc chắn muốn lưu đơn hàng?')">
                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                        <i class="fa fa-download fa-w-20"></i>
                                    </span>
                                    <span>Lưu Hóa Đơn</span>
                                </button>                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    @endif

</div>
<!-- End Main -->

@endsection


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
        <form method="post" action="./admin/importinvoice/{{ $importinvoice->id }}/detail" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="importinvoices_id" value="{{ $importinvoice->id }}">
            <div class="position-relative row form-group">
                <label for="product_id" class="col-md-3 text-md-right col-form-label">Sản phẩm</label>
                <div class="col-md-9 col-xl-8">
                    <select required name="product_id" id="product_id" class="form-control">
                        <option value="">-- Chọn Sản Phẩm--</option>
                        @foreach ($products as $k => $product)
                            <option value="{{ $product->id }}" data-product-id="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="importinvoices_price" class="col-md-3 text-md-right col-form-label">Giá nhập</label>
                <div class="col-md-9 col-xl-8 d-flex justify-center align-items-center">
                    <input required name="importinvoices_price" class="form-control text-sm" id="importinvoices_price" placeholder="Giá nhập" type="number" class="form-control" value="">
                    <div class="input-group-append">
                        <div class="input-group-text"><strong>VNĐ</strong></div>
                    </div>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="importinvoices_qty" class="col-md-3 text-md-right col-form-label">Số lượng</label>
                <div class="col-md-9 col-xl-8">
                    <input required name="importinvoices_qty" id="importinvoices_qty" placeholder="Số lượng" type="number" class="form-control" value="">
                </div>
            </div>

            <div class="ml-auto">
                <div class="col-md-9 col-xl-8">
                    <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary" onclick="setSelected()">
                        <span class="btn-icon-wrapper pr-2 opacity-8">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        <span>Thêm</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>
  </div>
</div>



    


