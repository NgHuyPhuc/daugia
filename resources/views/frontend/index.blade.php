@extends('frontend/master/master')
@section('title', "Trang chủ")
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
                                <a href="#" class="category-item">
                                    QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT
                                </a>
                                <a href="#" class="category-item">
                                    TÀI SẢN LÀ NỢ XẤU VÀ TÀI SẢN BẢO ĐẢM TẠI TỔ CHỨC TÍN DỤNG
                                </a>
                                <a href="#" class="category-item">
                                    TÀI SẢN THI HÀNH ÁN
                                </a>
                                <a href="#" class="category-item">
                                    TÀI SẢN LÀ TANG VẬT, PHƯƠNG TIỆN VI PHẠM HÀNH CHÍNH HOẶC TÀI SẢN KÊ BIÊN
                                </a>
                                <a href="#" class="category-item">
                                    TÀI SẢN NHÀ NƯỚC
                                </a>
                                <a href="#" class="category-item">
                                    CÁC LOẠI TÀI SẢN KHÁC
                                </a>
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
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Lịch nghỉ lễ Quốc khánh năm 2023.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Lịch nghỉ lễ Giỗ tổ Hùng Vương
                                (mùng 10/3 âm lịch), Ngày Chiến Thắng (30/4) và Ngày Quốc tế lao động (01/5) năm 2023.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo về Lịch nghỉ tết Nguyên đán Quý Mão
                                năm 2023.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Thông báo đính chính kết quả lựa chọn tổ chức đấu giá tài sản (có hiệu lực thay thế
                                Thông báo 370/TB-KT&ĐT ngày 26/7/2022) của CTCP Sông Đà 2.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Chia sẻ hạ tầng triển khai đấu giá trực tuyến..
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Đấu giá tài sản trực tuyến ngăn chặn tình trạng thiếu minh bạch thông tin..
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Lịch nghỉ lễ Quốc khánh năm 2023.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Lịch nghỉ lễ Giỗ tổ Hùng Vương
                                (mùng 10/3 âm lịch), Ngày Chiến Thắng (30/4) và Ngày Quốc tế lao động (01/5) năm 2023.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo về Lịch nghỉ tết Nguyên đán Quý Mão
                                năm 2023.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Thông báo đính chính kết quả lựa chọn tổ chức đấu giá tài sản (có hiệu lực thay thế
                                Thông báo 370/TB-KT&ĐT ngày 26/7/2022) của CTCP Sông Đà 2.
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Chia sẻ hạ tầng triển khai đấu giá trực tuyến..
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="https://daugiaviet.vn/files/tintuc/1457/1457.pdf" target="_blank">
                                - Đấu giá tài sản trực tuyến ngăn chặn tình trạng thiếu minh bạch thông tin..
                            </a>
                        </div>
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
                            <form action="" method="post">
                                <div class="input-group">
                                    <input type="search" class="form-control rounded" placeholder="Search"
                                        aria-label="Search" aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-outline-primary">search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-30">
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-20">
                            <div class="single-new">
                                <div class="new-img">
                                    <img src="img/_league-of-legends-lol-wallpaper-full-hd- 88.jpg" alt="">
                                </div>
                                <div class="new-cap">
                                    <h4><a href="#" class="ellipsis">Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu
                                            giá: Tài sản 2: Quyền cho thuê Tầng 4 + Tầng 5 Nhà A7. Diện tích: 552
                                            m2/tầng. Thời gian thuê: 03 năm</a></h4>
                                </div>
                                <div class="what-info">
                                    <div class="icon"><img src="img//daugia.svg" alt="" class="icon-bua"></div>
                                    <div class="text">
                                        <span>Giá khởi điểm:
                                            <strong>1.663.200.000 VNĐ</strong>
                                        </span>
                                        <span>Bước Giá:
                                            <strong>18.000.000 VNĐ</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-item">
                        <a href="">Xem thêm</a>
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
                        <a href="" class="nav-item nav-link active">THÔNG TIN MỜI THAM GIA ĐẤU GIÁ - TÀI SẢN ĐẤU GIÁ</a>
                    </div>
                    <div class="row">
                        <div class="slider">
                            <div class="slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-notifi">
                                            <div class="row mb-20">
                                                <div class="col-lg-3 col-md-3">
                                                    <img src="img/thongbao.a0813b0.jpg" alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-9 col-md-9">
                                                    <a href="/tintuc/1470/1470.pdf" target="_blank">
                                                        - Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá
                                                        “Tài sản không sử dụng được của nhà máy cũ” bao gồm văn phòng,
                                                        nhà xưởng, máy móc thiết bị và thiết bị truyền dẫn (Nhà máy cũ
                                                        của VJE) tại Km9, Vật Cách, Quán Toan, Hồng Bàng, Hải Phòng.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
