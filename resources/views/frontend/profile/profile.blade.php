@extends('frontend/master/master')
@section('title', 'Thông tin cá nhân')
@section('main')

    <div class="container mb-50">
        @if (Auth::user()->level == 0)
            <div class="alert alert-danger mt-30">
                Tài khoản chưa được xác thực có thể liên hệ admin để được xác thực sớm hơn
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="pro-detail-tab nav-tabs">
                    <div class="tab-item nav-link active"><a class="active" href="{{route('user.profile')}}">Thông tin</a></div>
                    <div class="tab-item nav-link"><a href="{{route('user.profilechangepass')}}">Đổi mật khẩu</a></div>
                    <div class="tab-item nav-link"><a href="{{route('user.profilewishlist')}}">Sản phẩm yêu thích</a></div>
                    <div class="tab-item nav-link "><a href="{{route('user.profilepayment')}}">Thông tin thanh toán</a></div>
                </div>
            </div>
            @if (session('alert'))
                    <div id="offdiv" class="text-success" role="alert">
                        <h3>{{ session('alert') }}</h3>
                    </div>
                @endif
                {{-- <div id="offdiv" class="text-success bg-success" role="alert">
                    <h3>Cập nhật thông tin thành công</h3>
                </div> --}}
                
            <div class="col-lg-12 col-md-12">
                <form action="{{ route('user.postprofile') }}" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="form-email">Email</label><code>*</code>
                                <input type="text" name="email" class="form-control" id="form-email"
                                    placeholder="Email" value="{{ $profile->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-name">Họ tên</label><code>*</code>
                                <input type="text" name="name" class="form-control" id="form-name"
                                    placeholder="Họ tên" value="{{ $profile->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-dob">Ngày sinh</label><code>*</code>
                                <input type="date" name="dob" class="form-control" id="form-dob"
                                    value="{{ $profile->dob }}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-phone">Số điện thoại (Nên sử dụng số di động để nhận tin nhắn thông báo khi
                                    cần thiết)</label><code>*</code>
                                <input type="text" name="phone" class="form-control" id="form-phone"
                                    placeholder="Số điện thoại" value="{{ $profile->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label>Số tài khoản ngân hàng</label>
                                <input type="text" name="bank_account_number" class="form-control" value="{{ $profile->bank_account_number }}">
                            </div>
                            <div class="form-group">
                                <label>Tên ngân hàng</label>
                                <input type="text" name="bank" class="form-control" value="{{ $profile->bank }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="form-cmnd">Số CMND/CCCD</label><code>*</code>
                                <input type="text" name="cccd" class="form-control" id="form-cmnd"
                                    placeholder="Số CMND" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    value="{{ $profile->cccd }}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-date-cmnd">Ngày Cấp CMND/CCCD</label><code>*</code>
                                <input type="date" name="ngay_cap_cccd" class="form-control" id="form-noi-cap-cmnd"
                                    value="{{ $profile->ngay_cap_cccd }}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-noi-cap-cmnd">Nơi cấp CMND/CCCD</label><code>*</code>
                                <input type="text" name="noi_cap_cccd" class="form-control" id="form-date-cmnd"
                                    placeholder="Nơi cấp căn cước công dân" value="{{ $profile->noi_cap_cccd }}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-address">Địa chỉ</label><code>*</code>
                                <input type="text" name="address" class="form-control" id="form-address"
                                    placeholder="Địa chỉ" value="{{ $profile->address }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Tên chủ tài khoản(ngân hàng)</label>
                                <input type="text" name="account_holder_name" class="form-control" value="{{ $profile->account_holder_name }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Chi nhánh ngân hàng</label>
                                <input type="text" name="bank_branch" class="form-control" value="{{ $profile->bank_branch }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success button-effect button-pd cus-btn-update">Cập
                                nhật</button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>

@endsection
