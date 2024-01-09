@extends('backend/master/master')
@section('title', 'Danh sách Admin')
@section('main')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Danh sách thành viên</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách thành viên</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">

                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <div class="alert bg-success" role="alert">
                                    <svg class="glyph stroked checkmark">
                                        <use xlink:href="#stroked-checkmark"></use>
                                    </svg>Đã thêm thành công<a href="#" class="pull-right"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </div>
                                <a href="{{route('useradmin.create')}}" class="btn btn-primary">Thêm Thành viên</a>
                                <a href="{{route('useradmin.tkdgv')}}" class="btn btn-primary">Tài khoản đấu giá viên</a>
                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Chứng chỉ đấu giá viên</th>
                                            <th>Ngày cấp chứng chỉ</th>
                                            <th>Số thẻ đấu giá viên</th>
                                            <th>Ngày cấp thẻ đấu giá viên</th>
                                            <th>Nơi cấp thẻ đấu giá viên</th>
                                            <th>Level</th>
                                            <th width='18%'>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            {{-- <td>{{$item->dgv_chung_chi}}</td> --}}
                                            <td>
                                                <div class=""><img style="max-width: 100%" src="../upload/img/{{$item->dgv_chung_chi}}" alt="Chứng chỉ đấu giá viên" width="100px" class="thumbnail"></div>
                                            </td>
                                            <td>{{$item->dgv_ngay_cap_chung_chi}}</td>
                                            <td>{{$item->dgv_so_the_dgv}}</td>
                                            <td>{{$item->dgv_ngay_cap_the_dgv}}</td>
                                            <td>{{$item->dgv_noi_cap_the_dgv}}</td>
                                            <td>{{$item->level}}</td>
                                            <td>
                                                <a href="{{route('useradmin.edit',['id'=>$item->id])}}" class="btn btn-warning"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i> Sửa</a>
                                                <a href="{{route('useradmin.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa Admin này?')" class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                            
                                        @endforeach
                                        

                                    </tbody>
                                </table>
                                <div align='right'>
                                    {{$admins->links('backend.pagination.pagination')}}
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
