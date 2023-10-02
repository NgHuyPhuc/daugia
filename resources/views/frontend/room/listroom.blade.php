@extends('frontend/master/master')
@section('title', "Danh sách phòng đấu giá")
@section('main')

    <div class="whats-news-area pt-50 pb-20">
        <div class="container">
            @if (session('message'))
            <div class="alert alert-danger" role="alert">
                {{session('message')}}
              </div>
             
            @endif

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="title-dau-gia">
                        <h3>PHÒNG ĐẤU GIÁ</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    @foreach ($list as $item)
                    <div class="list-room">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 pdg-cus-sm">
                                Phòng đấu giá: {{$item->id}}
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 imgpdg-cus-sm">
                                <img src="../upload/img/{{$item->product->main_image}}" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 ttpdg-cus-sm">
                                <a href="{{route('productsite.detail',['id'=>$item->id])}}">{{$item->product->product_name}}</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                <div class="more-item">
                                    <a class="" href="{{route('user.autionroom',['id'=> $item->id])}}">Vào phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="list-room">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 pdg-cus-sm">
                                Phòng đấu giá: 100
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 imgpdg-cus-sm">
                                <img src="/img/anh-phong-canh-thien-nhien-dep.jpg" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 ttpdg-cus-sm">
                                <a href="">Công ty Đấu giá Hợp danh 2E HHT Việt Nam, Thông báo Đấu giá 01 Máy đào bánh
                                    xích nhãn hiệu DAWOO – 300LCV</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                <div class="more-item">
                                    <a class="" href="">Vào phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-room">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 pdg-cus-sm">
                                Phòng đấu giá: 100
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 imgpdg-cus-sm">
                                <img src="/img/anh-phong-canh-thien-nhien-dep.jpg" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 ttpdg-cus-sm">
                                <a href="">Công ty Đấu giá Hợp danh 2E HHT Việt Nam, Thông báo Đấu giá 01 Máy đào bánh
                                    xích nhãn hiệu DAWOO – 300LCV</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                <div class="more-item">
                                    <a class="" href="">Vào phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-room">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 pdg-cus-sm">
                                Phòng đấu giá: 100
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 imgpdg-cus-sm">
                                <img src="/img/anh-phong-canh-thien-nhien-dep.jpg" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 ttpdg-cus-sm">
                                <a href="">Công ty Đấu giá Hợp danh 2E HHT Việt Nam, Thông báo Đấu giá 01 Máy đào bánh
                                    xích nhãn hiệu DAWOO – 300LCV</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                <div class="more-item">
                                    <a class="" href="">Vào phòng</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    <div class="what-news pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="nav-tab" role="tablist" class="nav nav-tabs">
                        <a href="" class="nav-item nav-link active">KIẾN THỨC LUẬT PHÁP</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-van-ban-goc.aspx?ItemID=121748">- Luật đấu
                                    giá
                                    2016</a>
                            </div>
                            <div>
                                <a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=121741&amp;Keyword=8">-
                                    Nghị định 62/2017/NĐ-CP</a>
                            </div>
                            <div>
                                <a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=122824&amp;Keyword=">-
                                    Thông tư 06/2017/TT-BTP</a>
                            </div>
                            <div><a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=17067&amp;Keyword=">-
                                    Luật
                                    giao địch điện tử</a>
                            </div>
                            <div><a target="_blank" href="http://vbpl.vn/TW/Pages/vbpq-toanvan.aspx?ItemID=15066">- Luật
                                    công nghệ thông
                                    tin</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div><a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-van-ban-goc.aspx?ItemID=30470">- Nghị định
                                    52/2013/NĐ-CP</a>
                            </div>
                            <div><a target="_blank" href="http://vbpl.vn/TW/Pages/vbpq-van-ban-goc.aspx?ItemID=105747">-
                                    Thông tư
                                    59/2015/TT-BCT</a>
                            </div>
                            <div><a target="_blank"
                                    href="http://vbpl.vn/bocongthuong/Pages/vbpq-van-ban-goc.aspx?ItemID=46686">- Thông
                                    tư
                                    12/2013/TT-BCT</a>
                            </div>
                            <div><a target="_blank" href="http://vbpl.vn/TW/Pages/vbpq-van-ban-goc.aspx?ItemID=44378">-
                                    Thông tư
                                    47/2014/TT-BCT</a>
                            </div>
                            <div><a target="_blank"
                                    href="http://vbpl.vn/bocongthuong/Pages/vbpq-toanvan.aspx?ItemID=130669&amp;Keyword=">-
                                    Thông tư 21/2018/TT-BCT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection