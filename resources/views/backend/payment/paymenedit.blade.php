@extends('backend/master/master')
@section('title', 'Sửa Đơn Hàng')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa Đơn Hàng</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="post" enctype="multipart/form-data" action="{{ route('payment.postedit',['id' => $payment->id]) }}">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Sửa Đơn Hàng</div>
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>ID Tài khoản tham gia đấu giá</label>
                                        <input value="{{$payment->id_user }}" type="text" name="id_user" class="form-control">
                                        <label> {{$payment->user->name }}</label>
                                    </div>
                                    <div class="form-group">
                                        <label>ID sản phẩm</label>
                                        <input id="id_product" value="{{$payment->id_product }}" type="text" name="id_product" class="form-control">
                                        {{-- <input  name="id_prd" type="text"> --}}
                                        <br>
                                        <label id="prd_name" for="">{{$payment->product->product_name }}</label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Tên Số tài khoản ngân hàng</label>
                                        <input value="{{$payment->bank_account_number}}" type="text" name="bank_account_number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tổng tiền thanh toán</label>
                                        <input value="{{$payment->total_amount}}" type="text" name="total_amount" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                          <select class="form-control" name="state" id="">
                                            <option {{$payment->state == 1? 'selected' : ''}} value="1">Đã thanh toán</option>
                                            <option {{$payment->state == 2? 'selected' : ''}} value="2">Chưa thanh toán</option>
                                            <option {{$payment->state == 3? 'selected' : ''}} value="3">Đã hoàn thành đấu giá</option>
                                            <option {{$payment->state == 4? 'selected' : ''}} value="4">Đã hoàn tiền đặt cọc</option>
                                            <option {{$payment->state == 5? 'selected' : ''}} value="5">Lỗi</option>
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
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>



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
    </script>
    </body>

    </html>
@endsection
