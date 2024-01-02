@extends('backend/master/master')
@section('title', 'Sửa chi tiết phòng đấu giá')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa chi tiết phòng đấu giá</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="post" enctype="multipart/form-data" action="{{ route('detailauctionroom.postedit',['id' => $auction_room->id]) }}">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Sửa chi tiết phòng đấu giá</div>
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>id</label>
                                        <input value="{{$auction_room->id}}" type="text" name="info" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>ID phòng đấu giá</label>
                                        <input value="{{$auction_room->id_auction_room}}" type="text" name="id_auctionroom" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>ID sản phẩm</label>
                                        <input value="{{$auction_room->id_product}}" type="text" name="id_product" class="form-control" disabled>
                                        <strong>{{$auction_room->product->product_name}}</strong>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Người đấu giá</label>
                                        <input value="{{$auction_room->id_user}}" type="text" name="id_user" class="form-control">
                                        <strong>{{$auction_room->user->name}}</strong>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá trả</label>
                                        <input value="{{$auction_room->bidding_price}}" type="text" name="bidding_price" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Sửa</button>
                                    <button style="margin-left: 20px" class="btn btn-danger" type="reset">Huỷ bỏ</button>
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
    </script>
    </body>

    </html>
@endsection
