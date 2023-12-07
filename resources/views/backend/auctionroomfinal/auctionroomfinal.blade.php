@extends('backend/master/master')
@section('title', 'Chỉnh sửa sản phẩm')
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
                                @if (session('alert'))
                                    <div id="offdiv" class="alert bg-success" role="alert">
                                        <svg class="glyph stroked checkmark">
                                            <use xlink:href="#stroked-checkmark"></use>
                                        </svg>{{ session('alert') }}<a onclick="offdiv();" href="javascript:void(0)"
                                            class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                @endif
                                <a href="{{ route('useradminsite.create') }}" class="btn btn-primary">Thêm Thành viên</a>
                                <form style="margin-top: 20px" action="{{ route('useradminsite.search') }}" method="get">
                                    <label for="">Nhập thông tin tìm kiếm:</label>
                                    <input type="text" name="keyword">
                                    <button class="btn btn-success" type="submit">Tìm kiếm</button>
                                </form>
                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Tên sản phẩm đấu giá</th>
                                            <th>Phòng đấu giá</th>
                                            <th>Đấu giá viên</th>
                                            <th>Người đấu giá thành công</th>
                                            <th>Số tiền đấu giá</th>
                                            {{-- <th width='18%'>Tùy chọn</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($finals as $item)
                                            <tr>
                                                {{-- <td><a href="{{route('useradminsite.detail',['id' => $item->id])}}" target="_blank">{{ $item->id }}</a> </td>
                                                <td><a href="{{route('useradminsite.detail',['id' => $item->id])}}" target="_blank">{{ $item->name }}</a></td> --}}
                                                <td>{{ $item->id  }}</td>
                                                <td>{{ $item->product->product_name  }}</td>
                                                <td>{{ $item->id_auction_room  }}</td>
                                                <td><a href="{{route('useradminsite.detail',['id' => $item->userdgv->id])}}" target="_blank">{{ $item->userdgv->name }}</a></td>
                                                <td><a href="{{route('useradminsite.detail',['id' => $item->user->id])}}" target="_blank">{{ $item->user->name }}</a></td>
                                                <td>{{ number_format($item->bidding_price)}} VND</td>
                                                {{-- <td>
                                                    <a href="{{ route('useradminsite.edit', ['id' => $item->id]) }}"
                                                        class="btn btn-warning"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i> Sửa</a>
                                                    <a href="{{ route('useradminsite.delete', ['id' => $item->id]) }}"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa User này?')"
                                                        class="btn btn-danger"><i class="fa fa-trash"
                                                            aria-hidden="true"></i> Xóa</a>
                                                </td> --}}
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div align='right'>
                                    {{ $finals->links('backend.pagination.pagination') }}
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
    

    <script>
        function offdiv(){
            var x = document.getElementById("offdiv");
            x.style.display = "none";
        }
    </script>

    </body>

    </html>
@endsection
