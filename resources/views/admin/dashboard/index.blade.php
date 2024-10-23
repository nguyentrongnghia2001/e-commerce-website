@extends('admin.layout.master')

@section('title','Dashboard')

@section('body')


<!-- Main -->

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
                                            <div class="widget-heading">Tổng Đơn Hàng</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers"> {{ Count($orders) }} </div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
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
                                            <div class="widget-heading">Tổng nhập <br></div>
                                        </div>
                                        
                                        <div class="widget-content-right">
                                            <div class="widget-numbers">{{ number_format($totalImportInvoice, 0, '', '.')}}đ</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
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
                                            <div class="widget-heading">Tổng doanh thu bán <br></div>
                                        </div>

                                        @php
                                        $totalAmount = 0;
                                        @endphp

                                        @foreach ($orders as $order)              
                                            @php

                                            if ($order->status == 5) {
                                                $totalAmount += $order->total_orders; 
                                            }              

                                            @endphp                                 
                                        @endforeach
                                        <div class="widget-content-right">
                                            <div class="widget-content-right">
                                                <div class="widget-numbers">{{ number_format($totalAmount, 0, '', '.') }}đ</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
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
            <div class="col-md-12 col-lg-6 col-xl-3">
                <div class="pt-0 pb-0 card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Tổng sản phẩm tồn kho</div>
                                            {{-- <div class="widget-subheading">Total revenue streams</div> --}}
                                        </div>
                                        @php
                                        $totalProduct = 0;
                                        @endphp

                                        @foreach ($products as $product)              
                                            @php

                                           
                                            $totalProduct += $product->qty; 
                                                     

                                            @endphp                                 
                                        @endforeach
                                        <div class="widget-content-right">
                                            <div class="widget-numbers">{{ $totalProduct  }}</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            </div>
                                        </div>
                                        {{-- <div class="progress-sub-label">
                                            <div class="sub-label-left">{{  $totalProduct }}</div>
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

{{-- <div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <h5 class="card-title">Vertical Bars</h5>
                <canvas id="canvas" height="333" width="668" class="chartjs-render-monitor" style="display: block; height: 267px; width: 535px;"></canvas>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <h5 class="card-title">Horizontal Bars</h5>
                <canvas id="chart-horiz-bar" height="333" width="668" class="chartjs-render-monitor" style="display: block; height: 267px; width: 535px;"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Line Chart</h5>
                <div style="height: 400px">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="line-chart" height="500" width="668" class="chartjs-render-monitor" style="display: block; height: 400px; width: 535px;"></canvas>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <h5 class="card-title">Stacked Bars</h5>
                <canvas id="stacked-bars-chart" height="333" width="668" class="chartjs-render-monitor" style="display: block; height: 267px; width: 535px;"></canvas>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="row">
    <div class="col-md-12">
        <div id="myfirstchart" style="height: 250px;"></div>
    </div>
    <div class="col-md-6"></div>
</div> --}}

   

<!-- End Main -->

@endsection

