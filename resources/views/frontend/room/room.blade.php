@extends('frontend/master/master')
@section('title', 'Danh sách phòng đấu giá')
@section('main')

    <div class="what-news pt-50 pb-20">

        <div class="container">
            @if (session('messagefail'))
                <div id="notification-fail" class="alert alert-warning" role="alert">
                    {{ session('messagefail') }}
                </div>
            @endif
            @if (session('messagesuccess'))
                <div id="notification-success" class="alert alert-success" role="alert">
                    {{ session('messagesuccess') }}
                </div>
            @endif
            <div class="row pdg-border-h3">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="title-dau-gia">
                        <h3>{{ $info->product->product_name }}</h3>
                    </div>
                </div>
            </div>
            <div class="row pt-30">
                <div class="col-lg-5">
                    <img class="inpdg-img" src="../upload/img/{{ $info->product->main_image }}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="detail-info">
                            <div class="detail-row">
                                <span>{{ $info->product->product_name }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Đấu giá viên:</span>
                                <span class="detail-value">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        {{$dgv->name}}
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Thông tin đấu giá
                                                        viên: {{$dgv->name}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-5 detail-dgv">
                                                            <img src="../upload/img/{{$dgv->imgccdtrc}}"
                                                                alt="">
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="row">
                                                                <div class="col-7"><span>Chứng chỉ hành nghề đấu giá
                                                                        số:</span></div>
                                                                <div class="col-5">
                                                                    <span><strong>{{$dgv->dgv_chung_chi}}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Ngày cấp chứng chỉ hành
                                                                        nghề:</span></div>
                                                                <div class="col-5 pt-20">
                                                                    <span><strong>{{$dgv->dgv_ngay_cap_chung_chi}}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Số thẻ đấu giá
                                                                        viên:</span></div>
                                                                <div class="col-5 pt-20">
                                                                    <span><strong>{{$dgv->dgv_so_the_dgv}}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Ngày cấp thẻ đấu giá
                                                                        viên:</span></div>
                                                                <div class="col-5 pt-20">
                                                                    <span><strong>{{$dgv->dgv_ngay_cap_the_dgv}}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Nơi cấp thẻ đấu
                                                                        giá:</span></div>
                                                                <div class="col-5 pt-20"><span><strong>{{$dgv->dgv_noi_cap_the_dgv}}</strong></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Người có tài sản:</span>
                                <span class="detail-value">{{ $info->product->ownership }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Ngày công bố:</span>
                                <span class="detail-value">{{ $info->product->registration_time }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Thời gian bắt đầu:</span>
                                <span class="detail-value">{{ $info->thoi_gian_bat_dau }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Thời gian kết thúc dự kiến:</span>
                                <span class="detail-value">{{ $info->thoi_gian_ket_thuc }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Giá khởi điểm:</span> <!---->
                                <span class="detail-value">{{ number_format($info->product->starting_price) }} VND</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Bước giá:</span>
                                <span class="detail-value">{{ number_format($info->product->price_step) }}VNĐ</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Chi phí tham gia đấu giá:</span>
                                <span class="detail-value">{{ number_format($info->product->participation_costs) }}
                                    VNĐ</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label txt-main">Tiền đặt trước:</span>
                                <span class="detail-value">{{ number_format($info->product->auction_deposit) }} VNĐ</span>
                            </div>
                            <div class="detail-row">
                                <strong><span id="max-price">Giá cao nhất hiện tại:</span></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="menu-bar">
                    <div class="row pb-20 pt-20">
                        <div class="col-lg-6">
                            <div class="timmer">
                                Thời gian còn lại
                                <span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Trả giá -->
                            <form action="{{ route('user.postautionroom', ['id' => $info->id]) }}" method="post">
                                <div class="row">
                                    <div class="col-xs-1 col-md-1 col-sm-1">
                                        <a class="button-price-decrease" href="javascript:void(0)"
                                            onclick="decreaseQuantity()">-</a>
                                    </div>
                                    {{-- @dd($detail); --}}
                                    <div class="col-xs-3 col-md-3 col-sm-3">
                                        <input type="text" id="quantity-text"
                                            @if ($detail== null)
                                                value="{{ number_format($info->product->starting_price, 0, '.', '.') }}"
                                            @else
                                                value="{{ number_format($detail->bidding_price, 0, '.', '.') }}"
                                            @endif    
                                            disabled>
                                    </div>
                                    <div style="display: none" class="col-xs-3 col-md-3 col-sm-3">
                                    {{-- <div  class="col-xs-3 col-md-3 col-sm-3"> --}}
                                        <input name="bidding_price" type="number" id="quantity"
                                            @if ($detail== null)
                                                min="{{ $info->product->starting_price }}"
                                                value="{{ $info->product->starting_price }}"
                                            @else
                                                min="{{$detail->bidding_price}}"
                                                value="{{ $detail->bidding_price }}"
                                            @endif
                                            
                                            >
                                    </div>
                                    <div class="col-xs-1 col-md-1 col-sm-1">
                                        <a class="button-price-increase" href="javascript:void(0)"
                                            onclick="increaseQuantity()">+</a>
                                    </div>
                                    <input type="hidden" name="id_product" value="{{ $info->id_product }}">
                                    <input type="hidden" name="id_room" value="{{ $info->id }}">
                                    <input type="hidden" name="id_user" value="{{ Auth::guard('web')->user()->id }}">
                                    <div style="margin-left: 50px;" class="col-xs-3 col-md-3 col-sm-1">
                                        <button class="submit-price" type="submit">Trả giá</button>
                                    </div>

                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div id="spinner-2s">
                        <div id="spinner-container" class="d-flex justify-content-center">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <table id="data" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Người đấu giá</th>
                            <th scope="col">Giá trả</th>
                            <th scope="col">Thời điểm trả giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
                            <th scope="row">1</th>
                            <td>NHP</td>
                            <td>4000000</td>
                            <td>Thứ ba, 12-9-2023 | 02:03:51</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="what-news pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="nav-tab" role="tablist" class="nav nav-tabs">
                        <a href="" class="nav-item nav-link active">KIẾN THỨC LUẬT PHÁP</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-van-ban-goc.aspx?ItemID=121748">- Luật đấu
                                    giá
                                    2016</a>
                            </div>
                            <div>
                                <a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=121741&amp;Keyword=8">-
                                    Nghị định 62/2017/NĐ-CP</a>
                            </div>
                            <div>
                                <a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=122824&amp;Keyword=">-
                                    Thông tư 06/2017/TT-BTP</a>
                            </div>
                            <div><a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=17067&amp;Keyword=">-
                                    Luật
                                    giao địch điện tử</a>
                            </div>
                            <div><a target="_blank" href="http://vbpl.vn/TW/Pages/vbpq-toanvan.aspx?ItemID=15066">- Luật
                                    công nghệ thông
                                    tin</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div><a target="_blank"
                                    href="http://vbpl.vn/botuphap/Pages/vbpq-van-ban-goc.aspx?ItemID=30470">- Nghị định
                                    52/2013/NĐ-CP</a>
                            </div>
                            <div><a target="_blank" href="http://vbpl.vn/TW/Pages/vbpq-van-ban-goc.aspx?ItemID=105747">-
                                    Thông tư
                                    59/2015/TT-BCT</a>
                            </div>
                            <div><a target="_blank"
                                    href="http://vbpl.vn/bocongthuong/Pages/vbpq-van-ban-goc.aspx?ItemID=46686">- Thông
                                    tư
                                    12/2013/TT-BCT</a>
                            </div>
                            <div><a target="_blank" href="http://vbpl.vn/TW/Pages/vbpq-van-ban-goc.aspx?ItemID=44378">-
                                    Thông tư
                                    47/2014/TT-BCT</a>
                            </div>
                            <div><a target="_blank"
                                    href="http://vbpl.vn/bocongthuong/Pages/vbpq-toanvan.aspx?ItemID=130669&amp;Keyword=">-
                                    Thông tư 21/2018/TT-BCT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // console.log(<?php echo json_encode($detail)?>);

        function decreaseQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            var quantityText = document.getElementById('quantity-text');

            // if (currentQuantity > {{ $info->product->starting_price }}) {
            //     quantityInput.value = currentQuantity - {{ $info->product->price_step }};
            //     quantityText.value = new Intl.NumberFormat().format(quantityInput.value);
            // }
            if(<?php echo json_encode($detail)?> == null)
            {
                if (currentQuantity > {{ $info->product->starting_price }}) {
                    quantityInput.value = currentQuantity - {{ $info->product->price_step }};
                    quantityText.value = new Intl.NumberFormat().format(quantityInput.value);
                }
            }
            else{
                if (currentQuantity > {{ $detail->bidding_price }}) {
                    quantityInput.value = currentQuantity - {{ $info->product->price_step }};
                    quantityText.value = new Intl.NumberFormat().format(quantityInput.value);
                }
            }


        }

        function increaseQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            var quantityText = document.getElementById('quantity-text');

            quantityInput.value = currentQuantity + {{ $info->product->price_step }};
            quantityText.value = new Intl.NumberFormat().format(quantityInput.value);

        }

        function startCountdown(hours, minutes, seconds) {
            var hoursElement = document.getElementById("hours");
            var minutesElement = document.getElementById("minutes");
            var secondsElement = document.getElementById("seconds");

            var totalSeconds = hours * 3600 + minutes * 60 + seconds;

            var countdown = setInterval(function() {
                if (totalSeconds <= 0) {
                    clearInterval(countdown);
                    return;
                }

                totalSeconds--;

                var remainingHours = Math.floor(totalSeconds / 3600);
                var remainingMinutes = Math.floor((totalSeconds % 3600) / 60);
                var remainingSeconds = totalSeconds % 60;

                hoursElement.textContent = (remainingHours < 10 ? "0" : "") + remainingHours;
                minutesElement.textContent = (remainingMinutes < 10 ? "0" : "") + remainingMinutes;
                secondsElement.textContent = (remainingSeconds < 10 ? "0" : "") + remainingSeconds;
            }, 1000);
        }

        var time1 = new Date().getTime();
        var time2 = new Date({{ strtotime($info->thoi_gian_ket_thuc) }} * 1000);
        var timediff = Math.floor(Math.abs(time2 - time1) / 1000);
        startCountdown(0, 0, timediff);

        $(document).ready(function() {
            // Hiển thị spinner khi trang được tải
            $('#spinner-container').show();

            // Ẩn spinner sau 2 giây
            setTimeout(function() {
                $('#spinner-2s').hide();
            }, 2000);
        });
        setTimeout(function() {
            var notificationFail = document.getElementById('notification-fail');
            var notificationSuccess = document.getElementById('notification-success');

            if (notificationFail) {
                notificationFail.style.display = 'none';
            }

            if (notificationSuccess) {
                notificationSuccess.style.display = 'none';
            }
        }, 10000);

        // console.log('id'+{{ $info->id }})
        // showdata 
        // let pricenow ;
        // var pricenow ;
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: '/room/auctiondata/{{ $info->id }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.info.length > 0) {
                            // pricenow = response.info[0]['bidding_price'];
                            document.getElementById('max-price').textContent = 'Giá cao nhất hiện tại: '+ new Intl.NumberFormat().format(response.info[0]['bidding_price'])  +'VND';
                            var info = '<thead>' + '<tr>' +
                                '<th scope="col">ID</th>' +
                                '<th scope="col">Người đấu giá</th>' +
                                '<th scope="col">Giá trả</th>' +
                                '<th scope="col">Thời điểm trả giá</th>' +
                                '</tr>' + '</thead>';
                            for (var i = 0; i < response.info.length; i++) {
                                var createdAt = new Date(response.info[i]['created_at']);
                                var formattedDate = createdAt.toLocaleString("vi-VN", {
                                    year: "numeric",
                                    month: "2-digit",
                                    day: "2-digit",
                                    hour: "2-digit",
                                    minute: "2-digit",
                                    second: "2-digit"
                                });
                                info = info +
                                    '<tbody>' +
                                    '<tr>' +
                                    '<td scope="row">' + response.info[i]['id'] + '</td>' +
                                    '<td>' + response.info[i].user['name'] + '</td>' +
                                    '<td>' + new Intl.NumberFormat().format(response.info[i]['bidding_price']) + ' VND' + '</td>' +
                                    // '<td>' + response.info[i]['created_at'] + '</td>' +
                                    '<td>'+ formattedDate+'</td>'+
                                    '</tr>' + '</tbody>';
                            }
                            $('#data').empty();
                            $('#data').append(info);
                        }
                    },
                    error: function(err) {

                    }
                })
            }, 2000);
            // },100000);
            // console.log(pricenow);
        });
    </script>
@endsection
