<body>
<div class="local-time">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 my-location">
                    <p id="location" class="p-location">location</p>
                    <p id="hvn" class="local-time">time time</p>
                </div>
                <div class="col-lg-3 col-md-3 d-my-sm-none no-padding-lg">
                    {{-- @if ($checklogin != null)
                        <div class="content" >
                            <a class="a-text-decoration-show" href="/profile">{{$user->name}}</a>
                            <a href="/logout">Thoát</a>
                        </div>
                    @else
                        <div class="content">
                            <a href="/login">Đăng nhập</a>
                            <a href="/register">Đăng ký</a>
                        </div>
                    @endif --}}
                    {{-- @dd(Auth::user()) --}}
                    {{-- @dd(Auth::user()) --}}
                    @if (Auth::check('web'))
                        <div class="content" >
                            <a class="a-text-decoration-show" href="/profile">{{Auth::user()->name}}</a>
                            <a href="/logout">Thoát</a>
                        </div>
                    @else
                        <div class="content">
                            <a href="/login">Đăng nhập</a>
                            <a href="/register">Đăng ký</a>
                        </div>
                    @endif

                    {{-- @dd($checklogin) --}}
                    
                    {{-- <div class="content" style="display: none"> --}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-top">
    <div class="container mg-top-btm-30">
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <a href="/"><img class="logo-page" src="img/dang-ky-website-dau-gia-truc-tuyen-2.jpg" alt=""></a>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="info-web">
                    <h1 class="cpn-name">
                        <strong> CÔNG TY ĐẤU GIÁ HỢP DANH SỐ 5 - QUỐC GIA</strong>
                        <br>
                        TỔ CHỨC THỰC HIỆN ĐẤU GIÁ TRỰC TUYẾN
                        <strong>ĐẦU TIÊN</strong> TẠI VIỆT NAM
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-menu">
    <div class="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 ul-style">
                    <nav class="navbar bg-body-tertiary fixed-top reponsive-menu">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">Trang chủ</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="offcanvas offcanvas-end style-sm" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Giới thiệu
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/about" class="">Lịch sử hình thành và phát triển</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a href="/about" class="">Danh sách đấu giá viên</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">
                                                Thông báo mời đấu giá
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link blinking" href="/listroom">
                                                Phòng đấu giá
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Thủ tục sau đấu giá
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/about">Kết quả đấu giá</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="/about">Hợp đồng mua bán tài sản</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="/about">Bàn giao tài sản</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="/about">Hỗ trợ giao hàng</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link mt-30 nav-name" href="#">
                                                Nguyễn Huy Phúc
                                            </a>
                                        </li>
                                        <li class="nav-item nav-logout mymt-5">
                                            <a class="nav-link" href="#">
                                                Thoát
                                            </a>
                                        </li>

                                        <li class="nav-item mt-30">
                                            <a class="nav-link" href="#">
                                                Đăng nhập
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Đăng ký
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                              </form> -->
                                </div>
                            </div>
                        </div>
                    </nav>
                    <ul class="menu-ul">
                        <li class=""><a href="/">Trang chủ</a></li>
                        <li class="">
                            <a href="javascript:void(0)">Giới thiệu</a>
                            <ul class="sub-menu">
                                <li><a href="/about" class="">Lịch sử hình thành và phát triển</a></li>
                                <li><a href="/about" class="">Danh sách đấu giá viên</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Thông báo mời đấu giá</a></li>
                        <li class=""><a class="blinking" href="/listroom">Phòng đấu giá</a></li>
                        <li class="">
                            <a href="javascript:void(0)">Thủ tục sau đấu giá</a>
                            <ul class="sub-menu">
                                <li><a href="/about" class="">Kết quả đấu giá</a></li>
                                <li><a href="/about" class="">Hợp đồng mua bán tài sản</a></li>
                                <li><a href="/about" class="">Bàn giao tài sản</a></li>
                                <li><a href="/about" class="">Hỗ trợ hợp đồng</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Tin tức sự kiện</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>