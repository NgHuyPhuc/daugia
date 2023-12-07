@extends('backend/master/master')
@section('title', 'Danh sách thông báo')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách thông báo</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách thông báo</h1>
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
                            
                            <a href="{{route('notify.create')}}" class="btn btn-primary">Thêm thông báo mới</a>
                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Thông tin thông báo</th>
                                        <th>Tài liệu liên kết</th>
                                        <th width='7%'>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($notifies as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <p><strong>{{$item->info}}</strong></p>

                                            {{-- <div class="row"> --}}
                                                {{-- <div class="col-md-4"><img style="max-width: 100%" src="../upload/img/{{$item->main_image}}" alt="Áo đẹp" width="100px" class="thumbnail"></div> --}}
                                                {{-- <div class="col-md-8"> --}}
                                                    {{-- <p><strong>Mã sản phẩm : SP01</strong></p> --}}
                                                {{-- </div> --}}
                                            {{-- </div> --}}
                                        </td>
                                        <td><a href="../upload/pdf/{{$item->link}}">{{$item->link}}</a></td>
                                        <td>
                                            <a href="{{route('notify.edit',['id' => $item->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                            <a href="{{route('notify.delete',['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa thông báo này?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
                                {{$notifies->links('backend.pagination.pagination')}}
                                
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