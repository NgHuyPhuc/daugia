<?php
use Carbon\Carbon;
?>
@extends('frontend/master/master')
@section('title', "Danh sách sản phẩm quan tâm")
@section('main')
<div class="container mb-50">
    @if (Auth::user()->level == 0)
        <div class="alert alert-danger mt-30">
            Tài khoản chưa được xác thực có thể liên hệ admin để được xác thực sớm hơn
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="pro-detail-tab nav-tabs">
                <div class="tab-item nav-link"><a class="active" href="{{route('user.profile')}}">Thông tin</a></div>
                <div class="tab-item nav-link"><a href="{{route('user.profilechangepass')}}">Đổi mật khẩu</a></div>
                <div class="tab-item nav-link active"><a href="{{route('user.profilewishlist')}}">Sản phẩm yêu thích</a></div>
                <div class="tab-item nav-link "><a href="{{route('user.profilepayment')}}">Thông tin thanh toán</a></div>
            </div>
        </div>
        @if (session('alert'))
                <div id="offdiv" class="text-success" role="alert">
                    <h3>{{ session('alert') }}</h3>
                </div>
            @endif
            {{-- <div id="offdiv" class="text-success bg-success" role="alert">
                <h3>Cập nhật thông tin thành công</h3>
            </div> --}}
            
            <div class="whats-news-are pb-20">
                <div class="container">
                    @if (session('message'))
                    <div class="alert alert-danger" role="alert">
                        {{session('message')}}
                      </div>
                     
                    @endif
        
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="title-dau-gia">
                                <h3>Danh sách sản phẩm yêu thích</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            @foreach ($list as $item)
                            <div class="list-room">
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 pdg-cus-sm">
                                        ID: {{$item->id}}
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 imgpdg-cus-sm">
                                        <img src="../upload/img/{{$item->product->main_image}}" alt="">
                                    </div>
                                
                                    <div class="col-lg-5 col-md-6 col-sm-5 ttpdg-cus-sm">
                                        <a target="_blank" href="{{route('productsite.detail',['id'=>$item->id_product])}}">{{$item->product->product_name}}</a>
                                    </div>
                                    {{-- @dd(Carbon::now()) --}}
                                    {{-- @dd($item->product->registration_deadline ) --}}
                                    @if ($item->product->registration_deadline < Carbon::now())
                                        <div style="text-align: center;" class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                            <div class="btn btn-warning">
                                                <a  class="" href="javascript:void(0)">Thời gian đăng ký đã kết thúc</a>
                                            </div>
                                        </div>
                                        
                                    @else
                                        <div style="text-align: center;" class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                            <div class="btn btn-success">
                                                <a style="text-align: center;color: white; padding:20px" target="_blank" class="" href="{{route('productsite.detail',['id'=>$item->id_product])}}">Đăng ký ngay</a>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    <div style="text-align: center;" class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                        <div class="more-item">
                                            <a target="_blank" class="" href="{{route('productsite.detail',['id'=>$item->id_product])}}">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

    

@endsection