@extends('frontend/master/master')
@section('title', "Thông tin công ty")
@section('main')

    <div class="container pb-20">
        <div class="row">
            <div class="about">
                <div class="about-img">
                    <img class="style-about-img" src="../upload/img/{{$about->img}}" alt="">
                </div>
            </div>
            <div class="section-tittle mb-30 pt-30">
                <h3 style="text-align: center;">{{$about->title}}</h3>
            </div>
            <div class="about-info">
                {!!$about->content!!}
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