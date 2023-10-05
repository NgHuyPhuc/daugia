@extends('frontend/master/master')
@section('title', "Kết quả đấu giá")
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
                        <h3>Kết quả đấu giá</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Phòng Đấu Giá</th>
                              <th scope="col">Thời Gian Bắt Đầu:</th>
                              <th scope="col">Thời Gian Kết Thúc:</th>
                              <th scope="col">Ảnh</th>
                              <th scope="col">Tên Sản Phẩm</th>
                              <th scope="col">Giá Cuối Cùng</th>
                              <th scope="col">Xem Chi Tiết</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($list as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->id_auction_room}}</td>
                              <td>{{$item->room->thoi_gian_bat_dau}}</td>
                              <td>{{$item->room->thoi_gian_ket_thuc}}</td>
                              <td>
                                <div class="imgpdg-cus-sm">
                                    <img style="max-width: 100%; max-height: 100px" src="../upload/img/{{$item->product->main_image}}" alt="">
                                </div>
                            </td>
                              <td><strong><a href="{{route('productsite.detail',['id'=>$item->id_product])}}">{{$item->product->product_name}}</a></strong></td>
                              <td>{{number_format($item->bidding_price)}} VND</td>
                              <td><a class="more-item" href="{{route('user.result.detail',['id'=> $item->id])}}">Xem chi tiết</a></td>
                            </tr>
                        @endforeach
                            

                          </tbody>
                      </table>
                      {{-- @foreach ($list as $item) --}}

                    {{-- <div class="list-room">
                        <div class="row">
                            <div class="col-lg-1 col-md-2 col-sm-2 pdg-cus-sm">
                                ID: {{$item->id}}
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 pdg-cus-sm">
                                Phòng đấu giá: {{$item->id_auction_room}}
                                <br>
                                Bắt đầu: {{$item->room->thoi_gian_bat_dau}}
                                <br>
                                Kết thúc: {{$item->room->thoi_gian_ket_thuc}}
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 imgpdg-cus-sm">
                                <img src="../upload/img/{{$item->product->main_image}}" alt="">
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-5 ttpdg-cus-sm">
                                <a href="{{route('productsite.detail',['id'=>$item->id_product])}}">{{$item->product->product_name}}</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 joinpdg-cus-sm">
                                <div class="more-item">
                                    <a class="" href="{{route('user.autionroom',['id'=> $item->id])}}">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- @endforeach --}}

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