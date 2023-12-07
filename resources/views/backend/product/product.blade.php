@extends('backend/master/master')
@section('title', 'Danh sách sản phẩm')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            @if (session('alert'))
                            <div id="offdiv" class="alert bg-success" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg>{{session('alert')}}<a onclick="offdiv();"  href="javascript:void(0)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif
                            
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Thêm mới sản phẩm đấu giá</a>
                                <form style="margin-top: 20px" action="{{ route('product.search') }}" method="get">
                                    <label for="">Nhập thông tin tìm kiếm:</label>
                                    <input type="text" name="keyword">
                                    <button class="btn btn-success" type="submit">Tìm kiếm</button>
                                </form>
                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Thông tin sản phẩm</th>
                                        <th width='13%'>Giá khởi điểm</th>
                                        <th>Bước giá</th>
                                        <th>Phí đăng ký</th>
                                        <th width='7%'>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td><a href="{{route('product.detail',['id' => $item->id])}}" target="_blank">{{ $item->id }}</a> </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3"><img style="max-width: 100%"
                                                            src="../upload/img/{{ $item->main_image }}" alt="Áo đẹp"
                                                            width="100px" class="thumbnail"></div>
                                                    <div class="col-md-9">
                                                        <p><a href="{{route('product.detail',['id' => $item->id])}}" target="_blank"><strong>{{ $item->product_name }}</strong></a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ number_format($item->starting_price) }} VND</td>
                                            <td>{{ number_format($item->participation_costs) }} VND</td>
                                            <td>
                                                <p>{{ number_format($item->price_step) }} VND</p>
                                            </td>
                                            <td>
                                                <a href="{{ route('product.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-warning"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i> Sửa</a>
                                                <a href="{{ route('product.delete', ['id' => $item->id]) }}"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')"
                                                    class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div align='right'>
                                {{$products->links('backend.pagination.pagination')}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
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
    function offdiv(){
        var x = document.getElementById("offdiv");
        x.style.display = "none";
    }
</script>
        
        

</body>

</html>
@endsection