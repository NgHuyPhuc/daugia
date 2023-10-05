@extends('frontend/master/master')
@section('title', 'Chi tiết sản phẩm đấu giá')
@section('main')

    <div class="container pt-50 pb-50">
        <div class="row">
            <div class="col-lg-12">
                <div class="detail-title">
                    <h2>{{ $product->product_name }}</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="detail-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin cuộc
                                đấu giá</button>
                            <button class="nav-link " id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Những người tham gia đấu giá</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Hồ sơ tham
                                gia đấu giá</button>
                        </div>
                    </nav>
                    <div class="tab-content " id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                                    <div class="detail-img">
                                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="10000">
                                                    <img src="../upload/img/{{ $product->main_image }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                    <img src="img/96546842_p0_master1200.jpg" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <img src="img/anh-nen-2k-cho-may-tinh_014252436.jpg"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                    <div class="detail-info">
                                        <div class="detail-row">
                                            <span>XEM CHI TIẾT TẠI THÔNG BÁO ĐẤU GIÁ TÀI SẢN</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Người có tài sản:</span>
                                            <span class="detail-value">{{ $product->ownership }}</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Ngày công bố:</span>
                                            <span class="detail-value">{{ $product->registration_time }}</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Hạn đăng ký từ:</span>
                                            <span class="detail-value">{{ date_format(date_create($product->registration_time),'d-m-Y') }}</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Hạn đăng ký đến:</span>
                                            <span class="detail-value">{{ $product->registration_deadline }}</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Thời gian bắt đầu cuộc đấu giá:</span>
                                            @if ($auctionroom == null)
                                                <span class="detail-value">Chưa có thời gian bắt đầu</span>
                                            @else
                                                <span class="detail-value">{{ date_format(date_create($auctionroom->thoi_gian_bat_dau),'d/m/Y | h:i:s')}}</span>
                                            @endif
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Thời gian kết thúc cuộc đấu giá (Dự kiến):</span>
                                            @if ($auctionroom == null)
                                                <span class="detail-value">Theo quy đinh cuộc đấu giá</span>
                                            @else
                                                <span class="detail-value">{{date_format(date_create($auctionroom->thoi_gian_ket_thuc), 'd/m/Y | h:i:s')}}</span>
                                            @endif
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Giá khởi điểm:</span>
                                            <span class="detail-value">{{ number_format($product->starting_price) }}
                                                VNĐ</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Bước giá:</span>
                                            <span class="detail-value">{{ number_format($product->price_step) }} VNĐ</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Chi phí tham gia đấu giá:</span>
                                            <span class="detail-value">{{ number_format($product->participation_costs) }}
                                                VNĐ</span>
                                        </div>
                                        <div class="detail-row">
                                            <span class="detail-label txt-main">Tiền đặt trước:</span>
                                            <span class="detail-value">{{ number_format($product->auction_deposit) }}
                                                VNĐ</span>
                                        </div>
                                        <div class="detail-row">
                                            @if (Auth::guard('web')->check())
                                                @if (Auth::user()->level == 0)
                                                <a class="btn btn-primary detail-btn" href="javascript:void(0)">Tài khoản của bạn chưa được xác thực</a>  
                                                @else
                                                    @if ($check == null)
                                                        <button type="button" class="btn btn-primary detail-btn"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            Đăng ký tham gia đấu giá
                                                        </button>
                                                    @else
                                                            <a class="btn btn-primary detail-btn" href="{{route('user.profilepayment')}}">Bạn đã đặt hàng sản phẩm này hãy kiểm tra</a>    
                                                    @endif
                                                @endif
                                            @else
                                                <a class="btn btn-primary detail-btn center-a-button"
                                                    href="{{ route('user.login') }}">
                                                    Đăng ký tham gia đấu giá
                                                </a>
                                            @endif


                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <form action="{{route('paymentsite.post')}}" method="post">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Đăng ký
                                                                    tham
                                                                    gia đấu giá
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <p class="info-detail-modal">Số tiền cần phải nộp</p>
                                                                    <div class="row">
                                                                        <div class="col-7"><span>Chi phí tham gia đấu
                                                                                giá:</span></div>
                                                                        <div class="col-5">
                                                                            <input
                                                                                class="input-modal form-control-sm form-control-plaintext"
                                                                                type="text" disabled value="{{number_format($product->participation_costs)}} VNĐ">
                                                                        </div>
                                                                        <div class="col-7 pt-20"><span>Số tiền đặt
                                                                                trước:</span></div>
                                                                        <div class="col-5 pt-20">
                                                                            <input
                                                                                class="input-modal form-control-sm form-control-plaintext"
                                                                                type="text" disabled value="{{ number_format($product->auction_deposit) }} VNĐ">

                                                                        </div>
                                                                        <div class="col-7 pt-20"><span>Tổng tiền:</span>
                                                                        </div>
                                                                        <div class="col-5 pt-20">
                                                                            <input
                                                                                class="input-modal form-control-sm form-control-plaintext"
                                                                                type="text"  disabled value="{{ number_format($product->auction_deposit + $product->participation_costs) }} VNĐ">
                                                                                <input type="hidden" name="total_amount" type="text" value="{{$product->auction_deposit + $product->participation_costs}}">
                                                                        </div>
                                                                        <div class="col-7 pt-20"><span>Bằng chữ:</span>
                                                                        </div>
                                                                        <div class="col-5 pt-20">
                                                                            <span><strong id="convert-to-string"> </strong></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row pb-20">
                                                                    <p class="info-detail-modal">Thông tin nhận lại khoản
                                                                        tiền đặt trước</p>
                                                                    <div class="row">
                                                                        <div class="col-7"><span>Số tài khoản:</span>
                                                                        </div>
                                                                        <div class="col-5">
                                                                            <input name="bank_account_number" type="text">
                                                                        </div>
                                                                        <div class="col-7 pt-20"><span>Ngân hàng:</span>
                                                                        </div>
                                                                        <div class="col-5 pt-20">
                                                                            <input name="bank" type="text">
                                                                        </div>
                                                                        <div name='account_holder_name' class="col-7 pt-20"><span>Chủ tài
                                                                                khoản:</span></div>
                                                                        <div class="col-5 pt-20">
                                                                            <input name="account_holder_name" type="text">
                                                                        </div>
                                                                        <input type="hidden" name="id_product" value="{{ $product->id }}">
                                                                        @if (Auth::guard('web')->guest())

                                                                        @else
                                                                        <input type="hidden" name="id_user" value="{{ Auth::guard('web')->user()->id }}">
                                                                            
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-7 pt-20">
                                                                        <label class="dk-dv" for="terms"><a
                                                                                target="_blank"
                                                                                href="https://daugiaviet.vn/files/huong_dan_su_dung.pdf">Điều
                                                                                khoản và dịch vụ</a></label>
                                                                    </div>
                                                                    <div class="col-5 pt-20">
                                                                        <input type="checkbox" id="terms"
                                                                            name="terms" required>
                                                                        <span>Tôi đã đọc và nghiên cứu đầy đủ các thông tin
                                                                            của hồ sơ tham dự đấu giá. Tôi cam kết thực hiện
                                                                            đúng các quy định trong hồ sơ và quy định pháp
                                                                            luật liên quan</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Thanh toán</button>
                                                            </div>
                                                        </div>
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="info-user-join">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Thời gian mua hàng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listpayment as $item)
                                            <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->user->name}}</td>
                                                @if ($item->created_at == null)
                                                    <td> </td>
                                                @else
                                                <td>{{date_format( $item->created_at,'d/m/y | h:i:s')}}</td>
                                                    
                                                @endif
                                            </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                            tabindex="0">
                            <a target="_blank" class="custom-a-tag"
                                href="../upload/Vạn Thành An - chi nhánh Hà Nội_New folder (2)_72C-188.45    25-08_compressed.pdf">Thông
                                tin đấu giá</a>
                        </div>
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
    <script>
        document.getElementById("convert-to-string").textContent = convertNumberToWords({{$product->auction_deposit + $product->participation_costs}});
        console.log(convertNumberToWords({{$product->auction_deposit + $product->participation_costs}}));
    </script>
@endsection
