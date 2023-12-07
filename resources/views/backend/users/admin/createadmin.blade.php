@extends('backend/master/master')
@section('title', 'Thêm mới User Admin')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <form method="post" enctype="multipart/form-data" action="{{ route('useradmin.postcreate') }}">
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm mới admin</div>
                    <div class="panel-body">
                        <div class="row" style="margin-bottom: 40px">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Ngày cấp thẻ đấu giá viên</label>
                                    <input type="date" name="dgv_ngay_cap_the_dgv" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    {{-- <input type="date" name="dgv_ngay_cap_the_dgv" class="form-control" required> --}}
                                      <select class="form-control" name="level" >
                                        <option selected value="2">admin 2</option>
                                        <option value="1">admin 1</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Chứng chỉ đấu giá viên</label>
                                    <input type="file" name="dgv_chung_chi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày cấp chứng chỉ</label>
                                    <input type="date" name="dgv_ngay_cap_chung_chi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số thẻ đấu giá viên</label>
                                    <input type="text" name="dgv_so_the_dgv" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nơi cấp thẻ đấu giá viên</label>
                                    <input type="text" name="dgv_noi_cap_the_dgv" class="form-control" required>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit">Thêm mới admin</button>
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





</body>

</html>
@endsection