@extends('backend/master/master')
@section('title', 'Chỉnh sửa user')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Thành viên</h1>
        </div>
    </div>
    <!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <form method="post" enctype="multipart/form-data" action="{{ route('useradminsite.postedit',['id' => $user->id]) }}">

            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - {{$user->email}}</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 40px">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input value="{{$user->email}}" type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input value="{{$user->password}}" type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ảnh cccd mặt trước</label>
                                <input type="file" name="imgccdtrc" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số căn cước công dân</label>
                                <input value="{{$user->cccd}}" type="text" name="cccd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input value="{{$user->dob}}" type="date" name="dob" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select name="gender" class="form-control" value="">
                                    <option {{$user->gender ==1 ? 'selected' : ''}} value="1">Nam</option>
                                    <option {{$user->gender ==2 ? 'selected' : ''}} value="2">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên ngân hàng</label>
                                <input value="{{$user->bank}}" type="text" name="bank" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Chi nhánh ngân hàng</label>
                                <input value="{{$user->bank_branch}}" type="text" name="bank_branch" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Tên chủ tài khoản</label>
                                <input value="{{$user->name}}" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input value="{{$user->phone}}" type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ảnh cccd mặt sau</label>
                                <input type="file" name="imgccdsau" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày cấp cccd</label>
                                <input value="{{$user->ngay_cap_cccd}}" type="date" name="ngay_cap_cccd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nơi cấp cccd</label>
                                <input value="{{$user->noi_cap_cccd}}" type="text" name="noi_cap_cccd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số tài khoản ngân hàng</label>
                                <input value="{{$user->bank_account_number}}" type="text" name="bank_account_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tên chủ tài khoản(ngân hàng)</label>
                                <input value="{{$user->account_holder_name}}" type="text" name="account_holder_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control" value="">
                                    <option {{$user->level == 0 ? 'selected' : ''}} value="0">Tài khoản chưa kích hoạt</option>
                                    <option {{$user->level == 1 ? 'selected' : ''}} value="1">Tài khoản đã kích hoạt</option>
                                    <option {{$user->level == 2 ? 'selected' : ''}} value="2">Tài khoản đấu giá viên</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success" type="submit">Sửa tài khoản</button>
                            <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @csrf
        </form>

    </div>
</div>

    <!--/.row-->
</div>

<!--end main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>




</body>

</html>
@endsection