@extends('admin.layout.master')

@section('title','Nhập hóa đơn')

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
                    Nhập hóa đơn
                    <div class="page-title-subheading">
                        Nhập
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body display_data">

                    <div class="table-responsive">
                        <h2 class="text-center">Danh sách sản phẩm</h2>
                        <hr>
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-center">Giá</th>
                                    <th class="text-center">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($order->orderDetails as $orderDetail)

                                <tr>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img style="height: 60px;" data-toggle="tooltip" title="Image" data-placement="bottom" src="front/img/products/{{ $orderDetail->product->productImages[0]->path ?? 'noi-image.png' }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $orderDetail->product->name }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        {{ $orderDetail->qty }}
                                    </td>
                                    <td class="text-center">{{ $orderDetail->amount }}đ</td>
                                    <td class="text-center">
                                        {{ $orderDetail->total }}đ
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>



                    <h2 class="text-center mt-5">Thông tin đơn hàng</h2>
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">
                            Họ và tên
                        </label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $order->name }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $order->email }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="phone" class="col-md-3 text-md-right col-form-label">Số điện thoại</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $order->phone }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="street_address" class="col-md-3 text-md-right col-form-label">
                            Địa chỉ</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $order->street_address}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="payment_type" class="col-md-3 text-md-right col-form-label">Loại thanh toán</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $order->payment_type =='pay_later' ? 'Thanh toán khi nhận hàng' : 'Thanh toán online' }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="status" class="col-md-3 text-md-right col-form-label">Trạng thái</label>
                        <div class="col-md-9 col-xl-8">
            
                              <form class="d-flex justify-content-start align-items-center gap-3" method="post" action="admin/order/{{ $order->id }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
             
                                    {{-- {{ \App\Utilities\Constant::$order_status[$order->status] }} --}}
                                        
                                    <div class="">
                                        <select name="status" id="status" class="form-control">
                                        @foreach ( \App\Utilities\Constant::$order_status as $key => $value )
                                            <option value={{ $key }} {{ $order->status == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    </div>

                                    {{-- @foreach (\App\Utilities\Constant::$user_level as $key => $value )
                                    <option value={{ $key }} {{ $user->level == $key ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                    @endforeach --}}
                                                                          
                                    <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                        <span class="btn-icon-wrapper pr-2 opacity-8">
                                            <i class="fa fa-download fa-w-20"></i>
                                        </span>
                                        <span>Lưu</span>
                                    </button>                                      
                                  
                                </form>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="description" class="col-md-3 text-md-right col-form-label">Mô tả</label>
                        <div class="col-md-9 col-xl-8">
                            <p> {{ $order->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->

@endsection