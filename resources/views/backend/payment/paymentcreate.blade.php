@extends('backend/master/master')
@section('title', 'Thêm mới Đơn Hàng')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm mới Đơn Hàng</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="post" enctype="multipart/form-data" action="{{ route('payment.postcreate') }}">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Thêm mới Đơn Hàng</div>
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>ID Tài khoản tham gia đấu giá</label>
                                        <input value="" type="text" id='id_user' name="id_user" class="form-control">
                                        <label id='name_user'> </label>
                                    </div>
                                    <div class="form-group">
                                        <label>ID sản phẩm</label>
                                        <input id="id_product" value="" type="text" name="id_product" class="form-control">
                                        {{-- <input  name="id_prd" type="text"> --}}
                                        {{-- <br> --}}
                                        <label id="prd_name" for=""></label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Tên Số tài khoản ngân hàng</label>
                                        <input value="" type="text" name="bank_account_number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tổng tiền thanh toán</label>
                                        <input value="" type="text" name="total_amount" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                          <select class="form-control" name="state" id="">
                                            <option selected value="1">Đã thanh toán</option>
                                            <option value="2">Chưa thanh toán</option>
                                            <option value="3">Đã hoàn thành đấu giá</option>
                                            <option value="4">Đã hoàn tiền đặt cọc</option>
                                            <option value="5">Lỗi</option>
                                          </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Sửa Đơn Hàng</button>
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
        $(document).ready(function() {
            $('#id_product').on('input', function() {
                var id = $(this).val();
                if (id !== '') {
                    $.ajax({
                        url: '/admin/get-product-name/' + id,
                        type: 'GET',
                        // data: { id: id },
                        success: function(response) {
                            $('#prd_name').text(response);
                        },
                        error: function(xhr) {
                            $('#prd_name').text('Id hàng hóa không tồn tại');
                            console.log(xhr.responseText);
                        }
                    });
                } else {
                    $('#prd_name').text('tên hàng hóa');
                }
            });
        });
        $(document).ready(function() {
        $('#id_user').on('input', function() {
            var id = $(this).val();
            if (id !== '') {
                $.ajax({
                    url: '/admin/get-user-name/' + id,
                    type: 'GET',
                    // data: { id: id },
                    success: function(response) {
                        $('#name_user').text(response);
                    },
                    error: function(xhr) {
                        $('#name_user').text('Id người dùng không tồn tại');
                        console.log(xhr.responseText);
                    }
                });
            } else {
                $('#name_user').text('tên người dùng');
            }
        });
    });
    </script>
    </body>

    </html>
@endsection
