<?php
use App\Models\Payment;
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
@extends('frontend/master/master')
@section('title', 'Thông tin cá nhân')
@section('main')

    <div class="container mb-50">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="pro-detail-tab nav-tabs">
                    <div class="tab-item nav-link"><a href="{{route('user.profile')}}">Thông tin</a></div>
                    <div class="tab-item nav-link"><a href="{{route('user.profilechangepass')}}">Đổi mật khẩu</a></div>
                    <div class="tab-item nav-link"><a href="{{route('user.profilewishlist')}}">Sản phẩm yêu thích</a></div>
                    <div class="tab-item nav-link active"><a class="active" href="{{route('user.profilepayment')}}">Thông tin thanh toán</a></div>
                </div>
            </div>
            @if (session('alert'))
                    <div id="offdiv" class="text-success" role="alert">
                        <h3>{{ session('alert') }}</h3>
                    </div>
                @endif
                <form action="{{ route('user.profilepaymentsearch') }}" method="get">
                    <label for="">Nhập thông tin tìm kiếm:</label>
                    <input type="text" name="keyword">
                    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    @csrf
                </form>   
            <div class="col-lg-12 col-md-12">
                <table class="table table-bordered" style="margin-top:20px;">
                    <thead>
                        <tr class="bg-primary">
                            <th>ID</th>
                            <th>Người tham gia</th>
                            <th>Thông tin sản phẩm</th>
                            <th>Phòng đấu giá</th> 
                            <th width='10%'>Thời gian bắt đầu</th> 
                            <th width='10%'>Thời gian kết thúc </th> 
                            <th>Phí tham gia</th>
                            <th>Số tiền đặt cọc sản phẩm</th>
                            <th>Số tiền cần thanh toán</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($payments as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->user->name}}</td>
                            <td><p><a href="{{route('productsite.detail',['id' => $item->product->id])}}" target="_blank">
                                <strong>{{ $item->product->product_name }}</strong></a></p>
                            </td>
                            <td>{{isset($item->room) ? $item->room->id : 'Chưa có thông tin'}}</td> 
                            </td>
                            <td>{{isset($item->room) ? $item->room->thoi_gian_bat_dau : 'Chưa có thông tin'}}</td>
                            <td>{{isset($item->room) ? $item->room->thoi_gian_ket_thuc : 'Chưa có thông tin'}}</td>
                            <td>{{number_format($item->product->participation_costs)}} VND</td>
                            <td>{{number_format($item->product->auction_deposit)}} VND</td>
                            <td>{{number_format($item->total_amount)}} VND</td>
                            <td>
                                @if ($item->state == 1)
                                    <p class="btn btn-success">Đã thanh toán</p>
                                @elseif($item->state == 2)
                                    <p class="btn btn-danger">Chưa thanh toán</p>
                                @elseif($item->state == 3)
                                    <p class="btn btn-warning">Đã hoàn thành đấu giá</p>
                                @elseif($item->state == 4)
                                    <p class="btn btn-success">Đã hoàn tiền đặt cọc đấu giá</p>
                                @elseif($item->state == 5)
                                    <p class="btn btn-danger">Lỗi</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="custom-pagination">
                    {{$payments->links('frontend.pagination.pagination')}}
                </div>
            </div>
        </div>
    </div>

@endsection
