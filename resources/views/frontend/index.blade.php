@php
    use Illuminate\Support\Str;
@endphp
@extends('frontend/master/master')
@section('title', 'Trang chủ')
@section('main')

    <div class="trending-area">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-3 d-my-sm-none">
                        <div class="category-main mb-30">
                            <div class="category-title">
                                <h4>
                                    <i class="fas fa-list-ul"></i>
                                    Danh mục tài sản
                                </h4>
                            </div>
                            <div class="category-list">
                                @foreach ($categories as $item)
                                    <a href="#" class="category-item">
                                        {{ $item->name }}
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/10_day_nui_dep_nhat_chau_au.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/22017.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/236008.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 my-sm-style-support">
                        <div class="support mb-30">
                            <div class="support-title">
                                <h4>HỖ TRỢ:</h4>
                            </div>
                            <div class="support-list">
                                <a href="">
                                    <i class="fas fa-headphones"></i>
                                    Hotline: 0243.7622619
                                </a>
                                <a href="#">Email: daugiatructuyen.nalaf@gmail.com</a>
                            </div>
                            <div class="support-title">
                                <h4>HƯỚNG DẪN:</h4>
                            </div>
                            <div class="support-list">
                                <a href="/huong_dan_su_dung.pdf" target="_blank">Hướng dẫn
                                    tham gia đấu giá</a>
                                <a href="https://daugiaviet.vn/files/nguoi_co_tai_san.pdf" target="_blank">Hướng dẫn
                                    người có tài sản</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="what-news pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div id="nav-tab" role="tablist" class="nav nav-tabs">
                        <a href="" class="nav-item nav-link active">TIN TỨC NỔI BẬT VỀ ĐẤU GIÁ TRỰC TUYẾN</a>
                    </div>
                    <div class="row" id="what-news-info">
                        @foreach ($notifiesTop as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <a href="../upload/pdfs/{{ $item->link }}" target="_blank">
                                    - {{ str::limit($item->info, 170) }}
                                </a>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="what-news pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-30">
                    <div id="nav-tab" role="tablist" class="nav nav-tabs">
                        <a href="" class="nav-item nav-link active">CUỘC ĐẤU GIÁ NỔI BẬT</a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="d-flex">
                            <p class="df-center text-search">Tìm kiếm:</p>
                            <form action="{{route('productsite.search')}}" method="get">
                                <div class="input-group">
                                    <input type="search" class="form-control rounded" placeholder="Search"
                                        aria-label="Search" name="keyword" aria-describedby="search-addon" />
                                    <button type="submit" class="btn btn-outline-primary">search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-30">
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-md-4 pb-20">
                                <div class="single-new">
                                <a target="_blank" href="{{route('productsite.detail',['id'=>$item->id])}}">
                                    <div class="new-img">
                                        <img src="../upload/img/{{ $item->main_image }}" alt="">
                                    </div>
                                    <div class="new-cap">
                                        <h4><a target="_blank" href="{{route('productsite.detail',['id'=>$item->id])}}" class="ellipsis">{{ $item->product_name }}</a></h4>
                                    </div>
                                </a>
                                    <div class="what-info">
                                        <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua">
                                        </div>
                                        <div class="text">
                                            <span>Giá khởi điểm:
                                                <strong>{{ number_format($item->starting_price) }} VNĐ</strong>
                                            </span>
                                            <span>Bước Giá:
                                                <strong>{{ number_format($item->price_step) }} VNĐ</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="more-item">
                        <a href="{{route('productsite.home')}}">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="what-news pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="nav-tab" role="tablist" class="nav nav-tabs">
                        <a href="" class="nav-item nav-link active">THÔNG TIN MỜI THAM GIA ĐẤU GIÁ - TÀI SẢN ĐẤU
                            GIÁ</a>
                    </div>
                    <div class="row">
                        <div class="slider">
                            @php
                                $chunkedChunks = array_chunk($chunks, 2);
                            @endphp

                            @foreach ($chunkedChunks as $chunkedChunk)
                                <div class="slide">
                                    <div class="row">
                                        @foreach ($chunkedChunk as $chunk)
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                @foreach ($chunk as $notify)
                                                    <div class="new-notifi">
                                                        <div class="row mb-20">
                                                            <div class="col-lg-3 col-md-3">
                                                                <img src="img/thongbao.a0813b0.jpg" alt=""
                                                                    style="width: 100%;">
                                                            </div>
                                                            <div class="col-lg-9 col-md-9">
                                                                <a href="../upload/pdfs/{{ $notify->link }}"
                                                                    target="_blank">
                                                                    {{ str::limit($notify->info, 200) }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="current-slide">Trang hiện tại: 1</div>
                    </div>
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
                        @foreach ($laws as $chunks)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            @foreach ($chunks as $item)
                            <div>
                                <a target="_blank"
                                    href="{{$item->link}}">- {{$item->info}}</a>
                            </div>
                                
                            @endforeach
                        </div>
                        @endforeach
                        {{-- <div class="col-lg-6 col-md-6 col-sm-12">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
