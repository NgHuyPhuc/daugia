@extends('backend/master/master')
@section('title', 'Tìm kiếm chi tiết thông tin phòng đấu giá')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Tìm kiếm chi tiết thông tin phòng đấu giá</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tìm kiếm chi tiết thông tin phòng đấu giá</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <form action="{{ route('detailauctionroom.search') }}" method="get">

                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <label for="">Nhập id phòng đấu giá</label>
                                <input name="id" type="text">
                            </div>
                            <div class="table-responsive">
                                <label for="">Nhập id sản phẩm</label>
                                <input name="id_prd" id="id_product" type="text">
                                <br>
                                <label id="prd_name" for="">Tên sản phẩm</label>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </form>

                </div>
                <!--/.row-->


            </div>
            <!--end main-->
        </div>
    </div>

    <!-- javascript -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function offdiv() {
            var x = document.getElementById("offdiv");
            x.style.display = "none";
        }

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
