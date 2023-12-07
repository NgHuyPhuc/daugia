@extends('backend/master/master')
@section('title', 'Thêm mới phòng đấu giá')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Phòng đấu giá</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <form method="post" enctype="multipart/form-data" action="{{ route('auctionroom.postcreate') }}">
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm Phòng đấu giá</div>
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Nhập id sản phẩm</label>
                                    <input type="text" name="id_product" id="id_product" class="form-control">
                                    <label id="prd_name">tên hàng hóa</label>
                                </div>
                                <div class="form-group">
                                    <label>Thời gian bắt đầu</label>
                                    <input type="datetime-local" name="thoi_gian_bat_dau" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Thời gian kết thúc</label>
                                    <input type="datetime-local" name="thoi_gian_ket_thuc" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Id đấu giá viên</label>
                                    <input type="text" name="id_dgv" id="id_dgv" class="form-control">
                                    <label id="name_dgv">Id đấu giá viên</label>

                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="form-control" name="state" >
                                        <option value="0">Phòng đóng</option>
                                        <option value="1">Phòng mở</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit">Thêm Phòng đấu giá</button>
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
</script>
<script>
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
        $('#id_dgv').on('input', function() {
            var id = $(this).val();
            if (id !== '') {
                $.ajax({
                    url: '/admin/get-dgv-name/' + id,
                    type: 'GET',
                    // data: { id: id },
                    success: function(response) {
                        $('#name_dgv').text(response);
                    },
                    error: function(xhr) {
                        $('#name_dgv').text('Id đấu giá viên không tồn tại');
                        console.log(xhr.responseText);
                    }
                });
            } else {
                $('#name_dgv').text('tên đấu giá viên');
            }
        });
    });
</script>
</body>

</html>
@endsection