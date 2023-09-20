@extends('backend/master/master')
@section('title', 'Chỉnh sửa sản phẩm')
@section('main')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Chi tiết thành viên</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi tiết thành viên</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field7">Id người dùng</label>
                                        <input value="{{$user->id}}" type="text" class="form-control" name="field7" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Email</label>
                                        <input value="{{$user->email}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Giới tính</label>
                                        <input value="{{$user->gender == 1? 'Nam':'Nữ'}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Số căn cước công dân </label>
                                        <input value="{{$user->cccd}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Nơi cấp căn cước công dân</label>
                                        <input value="{{$user->noi_cap_cccd}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Ảnh căn cước công dân mặt trước</label>
                                        <img style="width: 100%" src="../upload/img/{{$user->imgccdtrc}}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Số tài khoản ngân hàng</label>
                                        <input value="{{$user->bank_account_number}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Tên chủ tài khoản ngân hàng</label>
                                        <input value="{{$user->account_holder_name}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <!-- Thêm các trường khác tại đây -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field7">Tên người dùng</label>
                                        <input value="{{$user->name}}" type="text" class="form-control" name="field7" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Số điện thoại</label>
                                        <input value="{{$user->phone}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Ngày sinh</label>
                                        <input value="{{$user->dob}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Địa chỉ</label>
                                        <input value="{{$user->address}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Ngày cấp căn cước công dân</label>
                                        <input value="{{$user->ngay_cap_cccd}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Ảnh căn cước công dân mặt sau</label>
                                        <img style="width: 100%" src="../upload/img/{{$user->imgccdsau}}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Tên ngân hàng</label>
                                        <input value="{{$user->bank}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Chi nhánh ngân hàng</label>
                                        <input value="{{$user->bank_branch}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <!-- Thêm các trường khác tại đây -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--/.row-->


    </div>
    <!--end main-->

    <!-- javascript -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>




    </body>

    </html>
@endsection
