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
                            
                            <a href="{{route('payment.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
                            <form style="margin-top: 20px" action="{{ route('paymentstate.search') }}" method="get">
                                <label for="">Nhập thông tin tìm kiếm:</label>
                                <input type="text" name="keyword">
                                <button class="btn btn-success" type="submit">Tìm kiếm</button>
                            </form>
                            <form style="margin-top: 20px" action="{{ route('paymentstate.search') }}" method="get">
                                <label for="">Nhập ID sản phẩm:</label>
                                <input type="text" name="id">
                                <button class="btn btn-success" type="submit">Tìm kiếm</button>
                            </form>
                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Người tham gia</th>
                                        <th>Thông tin sản phẩm</th>
                                        <th>Số tài khoản ngân hàng</th>
                                        <th>Ngân hàng</th>
                                        <th>Chủ tài khoản</th>
                                        <th>Số tiền đặt cọc sản phẩm</th>
                                        <th>Phí tham gia</th>
                                        <th>Số tiền đã thanh toán</th>
                                        <th>Trạng thái</th>
                                        <th width='7%'>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($payments as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td><a href="{{route('useradminsite.detail',['id' => $item->user->id])}}" target="_blank">{{$item->user->name}}</a></td>
                                        <td><p><a href="{{route('product.detail',['id' => $item->product->id])}}" target="_blank"><strong>{{ $item->product->product_name }}</strong></a></p></td>

                                        <td>{{chunk_split($item->bank_account_number , 4, ' ')}}</td>
                                        <td>{{$item->bank}}</td>
                                        <td>{{$item->account_holder_name}}</td>
                                        <td>{{number_format($item->product->participation_costs)}} VND</td>
                                        <td>{{number_format($item->product->auction_deposit)}} VND</td>
                                        <td>{{number_format($item->total_amount)}} VND</td>
                                        <td>
                                            @if ($item->state == 1)
                                                <p class="btn btn-success">Đã thanh toán</p>
                                            @elseif($item->state == 2)
                                                <p class="btn btn-danger">Chưa thanh toán</p>
                                            @elseif($item->state == 3)
                                                <p class="btn btn-warning">Đã hoàn thành đấu giá</p>
                                            @elseif($item->state == 4)
                                                <p class="btn btn-success">Đã hoàn tiền đặt cọc đấu giá</p>
                                            @elseif($item->state == 5)
                                                <p class="btn btn-danger">Lỗi</p>

                                            @endif
                                        </td>
                                        {{-- <td><p class="btn-danger">ád</p></td> --}}
                                        <td>
                                            <a href="{{route('payment.edit',['id' => $item->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                            <a href="{{route('payment.delete',['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                            <div align='right'>
                                {{$payments->links('backend.pagination.pagination')}}
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