@extends('backend/master/master')
@section('title', 'Danh sách phòng đấu giá')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Danh sách Chi tiết phòng đấu giá</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách Chi tiết phòng đấu giá</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">

                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                @if ($error != null)
                                    <div id="offdiv" class="alert bg-danger" role="alert">
                                        <svg class="glyph stroked checkmark">
                                            <use xlink:href="#stroked-checkmark"></use>
                                        </svg>Không tồn tại phòng đang tìm kiếm<a onclick="offdiv();"
                                            href="javascript:void(0)" class="pull-right"><span
                                                class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                @endif
                                @if (session('alert'))
                                    <div id="offdiv" class="alert bg-success" role="alert">
                                        <svg class="glyph stroked checkmark">
                                            <use xlink:href="#stroked-checkmark"></use>
                                        </svg>{{ session('alert') }}<a onclick="offdiv();" href="javascript:void(0)"
                                            class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                @endif
                                <form action="{{ route('detailauctionroom.search') }}" method="get">
                                    <div class="table-responsive">
                                        <label for="">Nhập id phòng đấu giá</label>
                                        <input name="id" type="text">
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <label for="">Nhập id sản phẩm</label>
                                        <input id="id_product" name="id_prd" type="text">
                                        <br>
                                        <label id="prd_name" for="">Tên sản phẩm</label>
                                    </div>
                                    <button class="btn btn-success" type="submit">Tìm kiếm</button>

                                    @csrf
                                </form>
                                {{-- <a href="{{route('auctionroom.create')}}" class="btn btn-primary">Thêm thông báo mới</a> --}}
                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Thông tin sản phẩm đấu giá</th>
                                            <th>Phòng đấu giá</th>
                                            <th>Người tham gia đấu giá</th>
                                            <th>Tiền đấu giá</th>
                                            <th width='7%'>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($details as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->product->product_name }}</td>
                                                <td>{{ $item->id_auction_room }}</td>
                                                <td><a href="{{ route('useradminsite.detail', ['id' => $item->user->id]) }}"
                                                        target="_blank">{{ $item->user->name }}</a></td>
                                                <td>{{ number_format($item->bidding_price) }} VND</td>
                                                <td>
                                                    <a href="{{ route('detailauctionroom.edit', ['id' => $item->id]) }}"
                                                        onclick="return confirm('Bạn có chắc chắn muốn sửa lượt đấu giá này ?')"
                                                        class="btn btn-warning"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i> Sửa</a>
                                                    {{-- <a href="{{route('detailauctionroom.delete',['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa điều luật này?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a> --}}
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
                                    @if ($error != null)
                                    @else
                                        {{ $details->links('backend.pagination.pagination') }}
                                    @endif

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
