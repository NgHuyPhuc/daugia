@extends('frontend/master/master')
@section('title', "Thông tin cá nhân")
@section('main')

    <div class="container mb-50">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="pro-detail-tab nav-tabs">
                    <div class="tab-item nav-link active"><a class="active" href="">Thông tin</a></div>
                    <div class="tab-item nav-link"><a href="">Đổi mật khẩu</a></div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="form-email">Email</label><code>*</code>
                                <input type="text" name="email" class="form-control" id="form-email" placeholder="Email" value="abc" required>
                            </div>
                            <div class="form-group">
                                <label for="form-name">Họ tên</label><code>*</code>
                                <input type="text" name="name" class="form-control" id="form-name" placeholder="Họ tên" value="Họ tên" required>
                            </div>
                            <div class="form-group">
                                <label for="form-dob">Ngày sinh</label><code>*</code>
                                <input type="date" name="dob" class="form-control" id="form-dob" value="2001-06-22" required>
                            </div>
                            <div class="form-group">
                                <label for="form-phone">Số điện thoại (Nên sử dụng số di động để nhận tin nhắn thông báo khi cần thiết)</label><code>*</code>
                                <input type="text" name="phonenumber" class="form-control" id="form-phone" placeholder="Số điện thoại" value="0326691468" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="form-cmnd">Số CMND/CCCD</label><code>*</code>
                                <input type="text" name="cmndnumber" class="form-control" id="form-cmnd" placeholder="Số CMND" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="123255" required>
                            </div>
                            <div class="form-group">
                                <label for="form-date-cmnd">Ngày Cấp CMND/CCCD</label><code>*</code>
                                <input type="date" name="datecmnd" class="form-control" id="form-noi-cap-cmnd" value="2001-06-22" required>
                            </div>
                            <div class="form-group">
                                <label for="form-noi-cap-cmnd">Nơi cấp CMND/CCCD</label><code>*</code>
                                <input type="text" name="noicapcmnd" class="form-control" id="form-date-cmnd" placeholder="Họ tên" value="Họ tên" required>
                            </div>
                            <div class="form-group">
                                <label for="form-address">Địa chỉ</label><code>*</code>
                                <input type="text" name="address" class="form-control" id="form-address" placeholder="Số điện thoại" value="0326691468" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn  btn-success button-effect button-pd">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection