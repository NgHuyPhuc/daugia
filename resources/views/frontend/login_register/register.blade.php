@extends('frontend/master/master')
@section('title', "Trang chủ")
@section('main')

    <div class="container pt-50 pb-50">
        <div class="myregister">
            <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tài khoản cá nhân</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tài khoản doanh nghiệp</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <form action="{{route('user.postregister')}}" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="form-email">Tên tài khoản(email)</label><code>*</code>
                            <input type="email" name="email" class="form-control" id="form-email" placeholder="email"  required>
                        </div>
                        <div class="form-group">
                            <label for="form-password">Mật khẩu</label><code>*</code>
                            <input type="password" name="password" class="form-control" id="form-password" placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="form-password">Xác nhận mật khẩu</label><code>*</code>
                            <input type="password" name="repassword" class="form-control" id="form-password" placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="form-name">Họ tên</label><code>*</code>
                            <input type="text" name="name" class="form-control" id="form-name" placeholder="Họ tên" required>
                        </div>
                        <div class="form-group">
                            <label>Số tài khoản ngân hàng</label>
                            <input type="text" name="bank_account_number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tên ngân hàng</label>
                            <input type="text" name="bank" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="form-dob">Ngày sinh</label><code>*</code>
                            <input type="date" name="dob" class="form-control" id="form-dob" required>
                        </div>
                        <div class="form-group">
                            <label for="form-phone">Số điện thoại (Nên sử dụng số di động để nhận tin nhắn thông báo khi cần thiết)</label><code>*</code>
                            <input type="text" name="phone" class="form-control" id="form-phone" placeholder="Số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gender" class="form-control" value="">
                                <option selected value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="form-cmnd">Số CMND/CCCD</label><code>*</code>
                            <input type="text" name="cccd" class="form-control" id="form-cmnd" placeholder="Số CMND" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                        </div>
                        <div class="form-group">
                            <label for="form-date-cmnd">Ngày Cấp CMND/CCCD</label><code>*</code>
                            <input type="date" name="ngay_cap_cccd" class="form-control" id="form-noi-cap-cmnd" required>
                        </div>
                        <div class="form-group">
                            <label for="form-noi-cap-cmnd">Nơi cấp CMND/CCCD</label><code>*</code>
                            <input type="text" name="noi_cap_cccd" class="form-control" id="form-date-cmnd" placeholder="Nơi cấp" required>
                        </div>
                        <div class="form-group">
                            <label for="form-address">Địa chỉ</label><code>*</code>
                            <input type="text" name="address" class="form-control" id="form-address" placeholder="Địa chỉ" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Tên chủ tài khoản(ngân hàng)</label>
                            <input type="text" name="account_holder_name" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Chi nhánh ngân hàng</label>
                            <input type="text" name="bank_branch" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="form-address">Ảnh mặt trước</label><code>*</code>
                                    <input id="img" type="file" name="imgccdtrc" class="form-control hidden" onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="100%" height="100%" src="img/default-thumbnail.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="form-address">Ảnh mặt sau</label><code>*</code>
                                    <input id="img2" type="file" name="imgccdsau" class="form-control hidden" onchange="changeImg2(this)">
                                    <img id="avatar2" class="thumbnail" width="100%" height="100%" src="img/default-thumbnail.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-30">
                        <button type="submit" class="btn btn-success button-effect button-pd cus-btn-update">Đăng ký</button>
                    </div>
                </div>
                @csrf
                </form>
                
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
          </div>
        </div>
        
    </div>


    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function() {
                $('#img').click();
            });
        });

        function changeImg2(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar2').click(function() {
                $('#img2').click();
            });
        });
    </script>
    @endsection
