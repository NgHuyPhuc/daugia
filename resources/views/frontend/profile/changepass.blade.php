@extends('frontend/master/master')
@section('title', 'Thông tin cá nhân')
@section('main')

<div class="container mb-50">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="pro-detail-tab nav-tabs">
                <div class="tab-item nav-link "><a href="{{route('user.profile')}}">Thông tin</a></div>
                <div class="tab-item nav-link active"><a class="active" href="">Đổi mật khẩu</a></div>
                <div class="tab-item nav-link "><a href="{{route('user.profilepayment')}}">Thông tin thanh toán</a></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <form action="{{route('user.postprofilechangepass')}}" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="form-name">Mật khẩu cũ</label><code>*</code>
                            <input type="Password" name="old_password" class="form-control" id="form-name" placeholder="Mật khẩu cũ" value="" required>
                            @if (session('old_pass'))
                                <label for="" class="text-danger">{{session('old_pass')}}</label>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="form-name">Password mới</label><code>*</code>
                            <input type="Password" name="password" class="form-control" id="form-name" placeholder="Mật khẩu mới" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="form-name">Nhập lại Password mới</label><code>*</code>
                            <input type="Password" name="repassword" class="form-control" id="form-name" placeholder="Nhập lại mật khẩu" value="" required>
                            @if (session('repass'))
                                <label for="" class="text-danger">{{session('repass')}}</label>
                            @endif
                        </div>

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn  btn-success button-effect button-pd cus-btn-update">Cập nhật</button>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>

@endsection
