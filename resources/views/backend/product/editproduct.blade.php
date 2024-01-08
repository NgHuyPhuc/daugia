@extends('backend/master/master')
@section('title', 'Chỉnh sửa sản phẩm')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa sản phẩm</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <form method="post" enctype="multipart/form-data" action="{{ route('product.postedit',["id"=>$product->id]) }}">
                <div class="panel panel-primary">
                    <div class="panel-heading">Sửa sản phẩm</div>
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="category" class="form-control">
                                        @foreach ($categories as $item)
                                            <option value='{{ $item->id }}' {{$item->id == $product->categories_id? 'selected' : ''}} >{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên Sản Phẩm</label>
                                    <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input type="number" name="starting_price" class="form-control" value="{{$product->starting_price}}">
                                </div>
                                <div class="form-group">
                                    <label>Địa điểm sản phẩm hiện tại</label>
                                    <input type="text" name="city_province" class="form-control" value="{{$product->city_province}}">
                                </div>
                                <div class="form-group">
                                    <label>Bước giá</label>
                                    <input type="number" name="price_step" class="form-control" value="{{$product->price_step}}">
                                </div>
                                <div class="form-group">
                                    <label>Chi phí tham gia</label>
                                    <input type="number" name="participation_costs" class="form-control" value="{{$product->participation_costs}}">
                                </div>
                                <div class="form-group">
                                    <label>Tiền đặt cọc</label>
                                    <input type="number" name="auction_deposit" class="form-control" value="{{$product->auction_deposit}}">
                                </div>
                                <div class="form-group">
                                    <label>Thông tin cơ bản:</label>
                                    <input type="text" name="description" class="form-control" value="{{$product->description}}">
                                </div>
                                <div class="form-group">
                                    <label>Chủ sở hữu hiện tại</label>
                                    <input type="text" name="ownership" class="form-control" value="{{$product->ownership}}">
                                </div>
                                <div class="form-group">
                                    <label>Thời gian đăng ký</label>
                                    <input type="date" name="registration_time" class="form-control" value="{{$product->registration_time}}">
                                </div>
                                <div class="form-group">
                                    <label>Thời gian kết thúc đăng ký</label>
                                    <input type="date" name="registration_deadline" class="form-control" value="{{$product->registration_deadline}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input id="img" type="file" name="img" class="form-control hidden"
                                        onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="100%" height="350px"
                                        src="../upload/img/{{$product->main_image}}">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh sản phẩm chi tiết</label>
                                    <input id="img_multi" type="file" name="img_multi[]" class="form-control" multiple>

                                    @foreach ($more_img as $item)
                                        <div class="col-md-6">
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="../upload/img/{{$item->img}}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thông tin chi tiết</label>
                                    <textarea  name="more_description" style="width: 100%;height: 100px;">{{$product->more_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit">Sửa sản phẩm</button>
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
 function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#avatar').click(function(){
            $('#img').click();
        });
    });

</script>
</body>

</html>
@endsection