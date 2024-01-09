@extends('backend/master/master')
@section('title', 'Xem chi tiết sản phẩm')
@section('main')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Chi Tiết Sản Phẩm Đấu Giá</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi Tiết Sản Phẩm Đấu Giá</h1>
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
                                        <label for="field7">Id Sản Phẩm</label>
                                        <input value="{{$product->id}}" type="text" class="form-control" name="field7" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Tên sản phẩm</label>
                                        <input value="{{$product->product_name}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Thông tin cơ bản</label>
                                        <input value="{{$product->description }}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Thông tin chi tiết</label>
                                        <input value="{{$product->more_description}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Chủ sở hữu</label>
                                        <input value="{{$product->ownership}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Ảnh sản phẩm</label>
                                        <img style="width: 100%" src="../upload/img/{{$product->main_image}}" alt="">
                                    </div>
                                    
                                    <!-- Thêm các trường khác tại đây -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field7">Thành Phố Hiện Tại của sản phẩm</label>
                                        <input value="{{$product->city_province}}" type="text" class="form-control" name="field7" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Loại sản phẩm</label>
                                        <input value="{{$product->category->name}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Giá khởi điểm</label>
                                        <input value="{{number_format($product->starting_price)}} VND" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Bước giá</label>
                                        <input value="{{number_format($product->price_step)}} VND" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Chi phí tham gia đấu giá</label>
                                        <input value="{{number_format($product->participation_costs)}} VND" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Tiền đặt cọc</label>
                                        <input value="{{number_format($product->auction_deposit)}} VND" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Thời gian công bố</label>
                                        <input value="{{$product->registration_time}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="field8">Thời hạn kết thúc đăng ký</label>
                                        <input value="{{$product->registration_deadline}}" type="text" class="form-control" name="field8" disabled>
                                    </div>
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
     




    </body>

    </html>
@endsection
