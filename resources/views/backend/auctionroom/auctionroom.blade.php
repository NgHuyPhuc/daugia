@extends('backend/master/master')
@section('title', 'Danh sách phòng đấu giá')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách Phòng đấu giá</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách Phòng đấu giá</h1>
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
                            
                            <a href="{{route('auctionroom.create')}}" class="btn btn-primary">Thêm Phòng đấu giá mới</a>
                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Thông tin sản phẩm đấu giá</th>
                                        <th>Thời gian bắt đầu đấu giá</th>
                                        <th>Thời gian kết thúc đấu giá</th>
                                        <th>Đấu giá viên</th>
                                        <th>State</th>
                                        <th width='7%'>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($rooms as $item)
                                    <tr>
                                        <td><a href="{{route('detailauctionroom.search',['id_prd'=>$item->id_product])}}">{{$item->id}}</a></td>
                                        <td>
                                            <p><a href="{{route('detailauctionroom.search',['id_prd'=>$item->id_product])}}"><strong>{{$item->product->product_name}}</strong></a></p>
                                        </td>
                                        <td>{{$item->thoi_gian_bat_dau}}</td>
                                        <td>{{$item->thoi_gian_ket_thuc}}</td>
                                        <td>{{$item->dgv->name }}</td>
                                        <td>{{$item->state ==0? 'Phòng đang đóng' : 'Phòng đang mở'}}</td>
                                        <td>
                                            <a target="_blank" href="{{route('user.autionroom',['id' => $item->id])}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Vào phòng đấu giá</a>
                                            <hr>
                                            <a target="_blank" href="{{route('payment.search',['id' => $item->id_product])}}" class="btn btn-success">Xem thông tin những người tham gia đấu giá</a>
                                            <hr>
                                            <a href="{{route('auctionroom.edit',['id' => $item->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                            <a href="{{route('auctionroom.delete',['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa điều luật này?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                            <div align='right'>
                                {{-- <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
                                </ul> --}}
                                {{$rooms->links('backend.pagination.pagination')}}
                                
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
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script>
    function offdiv(){
        var x = document.getElementById("offdiv");
        x.style.display = "none";
    }
</script>
        
        

</body>

</html>
@endsection