@extends('admin.layout.master')

@section('title','Quản Lí Đơn Hàng Bán')

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
                    Đơn hàng bán
                    <div class="page-title-subheading">
                        Xem, Cập Nhật.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
        <div class="card">
            <div class="no-gutters row">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-dark">Mới Đặt</div>
                                            </div>
                                            @php
                                                $count = 0;                                    
                                            @endphp

                                            @foreach ($order1s as $order1)              
                                                @php
                                                
                                                if($order1->status == 1)             
                                                {
                                                    $count++;
                                                }
                                                @endphp                                 
                                            @endforeach
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-dark"> {{ $count }} </div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-warning">Đã Xác Nhận <br></div>
                                            </div>
                                            @php
                                                $count = 0;                                    
                                            @endphp

                                            @foreach ($order1s as $order1)              
                                                @php
                                                
                                                if($order1->status == 2)             
                                                {
                                                    $count++;
                                                }
                                                @endphp                                 
                                            @endforeach
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">{{ $count }}</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-danger">Đã Trả Và Huỷ<br></div>
                                            </div>
                                            @php
                                                $count = 0;                                    
                                            @endphp

                                            @foreach ($order1s as $order1)              
                                                @php
                                                
                                                if($order1->status == 0 || $order1->status == 6)             
                                                {
                                                    $count++;
                                                }
                                                @endphp                                 
                                            @endforeach
                                            <div class="widget-content-right">
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-danger">{{  $count }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                               <div class="widget-heading text-success">Đang Giao Hàng<br></div>
                                            </div>
                                            @php
                                                $count = 0;                                    
                                            @endphp

                                            @foreach ($order1s as $order1)              
                                                @php
                                                
                                                if($order1->status == 5)             
                                                {
                                                    $count++;
                                                }
                                                @endphp                                 
                                            @endforeach
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success">{{ $count }}</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                </div>
                                            </div>
                                            {{-- <div class="progress-sub-label">
                                                <div class="sub-label-left">YoY Growth</div>
                                                <div class="sub-label-right">100%</div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="card-header">

                    <form>
                        <div class="input-group">
                            <input type="search" name="search" id="search" value="{{ request('search') }}" placeholder="Nhập ID đơn hàng" class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;
                                    Tìm kiếm
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
                                <th>Khách hàng / Sản phẩm</th>
                                <th class="text-center">Ngày đặt hàng</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Tổng tiền</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)
                            <tr>
                                <td class="text-center text-muted">#{{ $order->id }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img style="height: 60px;" data-toggle="tooltip" title="Image" data-placement="bottom" src="front/img/products/{{ $order->orderDetails[0]->product->productImages[0]->path ?? 'noi-image.png' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $order->name }}</div>
                                                <div class="widget-subheading opacity-7">

                                                    {{ $order->orderDetails[0]->product->name }}

                                                    @if(count($order->orderDetails) > 1)
                                                    (và {{ count($order->orderDetails)  }} sản phẩm khác)
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{ $order->created_at->format('d-m-Y') }}
                                </td>

                                <td class="text-center">
                                    {{ $order->street_address }}
                                </td>

                                <td class="text-center">
                                    {{ number_format($order->total_orders, 0, '', '.')}}đ
                                </td>

                                <td class="text-center">
                                    <div class="badge {{ $order->status == 4 ? 'bg-info' : '' }} {{ $order->status == 5 ? 'bg-success' : '' }}  {{ $order->status == 0 || $order->status == 6 ? 'bg-danger' : '' }} {{ $order->status == 2 || $order->status == 3 ? 'bg-warning' : '' }} badge-dark ">
                                        {{ \App\Utilities\Constant::$order_status[$order->status] }}
                                    </div>
                                </td>


                                <td class="text-center">
                                    <a href="./admin/order/{{ $order->id }}" class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                        Chi tiết
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="d-block card-footer">
                    {{ $orders->links() }}
                </div>

            </div>
        </div>
    </div>

</div>
<!-- End Main -->

@endsection