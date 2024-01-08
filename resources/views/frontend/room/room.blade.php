<?php
if ($check == false) {
    $detail = json_decode($detail);
}
?>

@extends('frontend/master/master')
@section('title', 'Phòng đấu giá')
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
                    <div class="detail-img">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="../upload/img/{{ $info->product->main_image }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                @foreach ($more_img as $item)
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="../upload/img/{{ $item->img }}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
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
                                        {{ $dgv->name }}
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Thông tin đấu giá
                                                        viên: {{ $dgv->name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-5 detail-dgv">
                                                            <img src="../upload/img/{{ $dgv->imgccdtrc }}" alt="">
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="row">
                                                                <div class="col-7"><span>Chứng chỉ hành nghề đấu giá
                                                                        số:</span></div>
                                                                <div class="col-5">
                                                                    <span><strong>{{ $dgv->dgv_chung_chi }}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Ngày cấp chứng chỉ hành
                                                                        nghề:</span></div>
                                                                <div class="col-5 pt-20">
                                                                    <span><strong>{{ $dgv->dgv_ngay_cap_chung_chi }}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Số thẻ đấu giá
                                                                        viên:</span></div>
                                                                <div class="col-5 pt-20">
                                                                    <span><strong>{{ $dgv->dgv_so_the_dgv }}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Ngày cấp thẻ đấu giá
                                                                        viên:</span></div>
                                                                <div class="col-5 pt-20">
                                                                    <span><strong>{{ $dgv->dgv_ngay_cap_the_dgv }}</strong></span>
                                                                </div>
                                                                <div class="col-7 pt-20"><span>Nơi cấp thẻ đấu
                                                                        giá:</span></div>
                                                                <div class="col-5 pt-20">
                                                                    <span><strong>{{ $dgv->dgv_noi_cap_the_dgv }}</strong></span>
                                                                </div>
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
                                <span id="hours">00</span>:<span id="minutes">00</span>:<span
                                    id="seconds">00</span>
                            </div>
                        </div>
                        @if (Auth::guard('web')->user()->level == 1)
                            <div class="col-lg-6">
                                <form id="post-price-auction">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-2 col-sm-2 sm-pdt-5px">
                                            <a class="button-price-decrease" href="javascript:void(0)"
                                                onclick="decreaseQuantity()">-</a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <input type="text" id="quantity-text"
                                                value="{{ number_format($detail->bidding_price, 0, '.', '.') }}" disabled>
                                        </div>
                                        <div style="display: none">
                                            <input name="bidding_price" type="number" id="quantity"
                                                min="{{ $detail->bidding_price }}" value="{{ $detail->bidding_price }}">
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2">
                                            <a class="button-price-increase" href="javascript:void(0)"
                                                onclick="increaseQuantity()">+</a>
                                        </div>
                                        <input type="hidden" name="id_product" value="{{ $info->id_product }}">
                                        <input type="hidden" name="id_room" value="{{ $info->id }}">
                                        <input type="hidden" name="id_user"
                                            value="{{ Auth::guard('web')->user()->id }}">

                                        <div class="col-lg-4 col-md-3 col-sm-4">
                                            <button class="submit-price" type="submit">Trả giá</button>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                        @else
                            <div class="col-lg-6 ">
                                <div class="col-lg-4 col-md-3 col-sm-1 float-r">
                                    <form action="{{ route('user.postendauction', ['id' => $info->id]) }}"
                                        method="post">
                                        <button type="submit"
                                            onclick="return confirm('Bạn có chắc chắn muốn kết thúc cuộc đấu giá này?')"
                                            class="end-auction" type="submit">Kết thúc cuộc đấu giá</button>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endif

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
                <div id="spinner-2s">
                    <div id="spinner-container" class="d-flex justify-content-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-icon-container">
                <i class="fas fa-comment-dots chat-icon"></i>
            </div>

            <div style="display: none;" id="chat-box" class="chat-box">

                <div class="chat-header">
                    <h3>Chat</h3>
                    <div class="close-btn">
                        <a href="javascript:void(0)" onclick="closechat()" class="">X</a>
                    </div>
                </div>

                <div class="messages">
                    <!-- Tin nhắn của người dùng khác -->
                    @include('/frontend/chat/receive', [
                        'message' => 'Chào mừng vào phòng chat  👋',
                        'avatar' => 'hinh-anh-4k-con-duong-va-hang-cay.jpg',
                        'level' => '0',
                    ])

                </div>
                <form class="chat-input">
                    <input style="word-wrap: break-word;max-width: 100%;overflow-wrap: break-word;" type="text"
                        id="message" name="message" placeholder="Nhập tin nhắn..." autocomplete="off">
                    <input id="name" type="hidden" name="name" value="{{ Auth::user()->name }}">

                    @if (Auth::user()->avatar == null)
                        <input id="avatar" type="hidden" name="avatar" value="default-thumbnail.jpg">
                    @else
                        <input id="avatar" type="hidden" name="avatar" value="{{ Auth::user()->avatar }}">
                    @endif
                    <input id="level" type="hidden" name="level" value="{{ Auth::user()->level }}">

                    <button type="submit">Gửi</button>
                </form>
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
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

    <script>
        function scrollToBottom() {
            let boxHeight = $('.messages').prop('scrollHeight');
            $('.messages').scrollTop(boxHeight);
        }
        const pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
            cluster: 'ap1'
        });
        const channel = pusher.subscribe('public');

        //Receive messages
        channel.bind('chat', function(data) {
            // console.log(data)

            $.post("/room/receive", {
                    _token: '{{ csrf_token() }}',
                    message: data.message,
                    name: data.name,
                    avatar: data.avatar,
                    level: data.level,
                })
                .done(function(res) {
                    $(".messages > .message").last().after(res)
                    scrollToBottom();
                });
        });

        // Broadcast messages
        $(".chat-input").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: "/room/broadcast",
                method: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: {
                    _token: '{{ csrf_token() }}',
                    message: $(".chat-input #message").val(),
                    name: $(".chat-input #name").val(),
                    avatar: $(".chat-input #avatar").val(),
                    level: $(".chat-input #level").val(),
                }
            }).done(function(res) {
                // console.log(res);
                $(".messages > .message").last().after(res);
                $(".chat-input #message").val('');
                scrollToBottom();

            });
        });
    </script>
    <script>
        const icon = document.querySelector('.chat-icon');
        const chatBox = document.querySelector('.chat-box');

        icon.addEventListener('click', () => {
            chatBox.style.display = chatBox.style.display == 'none' ? 'block' : 'none';
        })

        function closechat() {
            chatBox.style.display = 'none'
        }
    </script>
    <script>
        function decreaseQuantity() {
            
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            var quantityText = document.getElementById('quantity-text');

            // if (currentQuantity > {{ $detail->bidding_price }}) {
            if (currentQuantity > start_price) {
                quantityInput.value = currentQuantity - {{ $info->product->price_step }};
                quantityText.value = new Intl.NumberFormat().format(quantityInput.value);
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

        var start_price = {{ $detail->bidding_price }};

        $(document).ready(function() {
            setInterval(function() {

                $.ajax({
                    url: '/room/auctiondata/{{ $info->id }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {

                        // console.log(typeof response.info[0]['bidding_price'])
                        // console.log(response);
                        if (response.info.length > 0) {
                            if (start_price < response.info[0]['bidding_price']) {
                                start_price = response.info[0]['bidding_price'];
                                $('#quantity-text').val(new Intl.NumberFormat().format(response.info[0]['bidding_price']));
                                // $('#quantity').val(response.info[0]['bidding_price']);
                                document.getElementById('quantity').value = response.info[0]['bidding_price'];
                                $("#quantity").attr("min", response.info[0]['bidding_price']);
                            }
                            // pricenow = response.info[0]['bidding_price'];
                            document.getElementById('max-price').textContent =
                                'Giá cao nhất hiện tại: ' + new Intl.NumberFormat().format(
                                    response.info[0]['bidding_price']) + 'VND';
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
                                    '<td>' + new Intl.NumberFormat().format(response.info[i][
                                        'bidding_price'
                                    ]) + ' VND' + '</td>' +
                                    // '<td>' + response.info[i]['created_at'] + '</td>' +
                                    '<td>' + formattedDate + '</td>' +
                                    '</tr>' + '</tbody>';
                                // console.log(response.info[0]['bidding_price']);

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

        // user.postautionroom
        $(function() {
            $('#post-price-auction').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '{{ route('user.postautionroom', ['id' => $info->id]) }}',
                    data: $('#post-price-auction').serialize(),
                    success: function(response) {
                        // xu ly thanh cong
                        console.log($('#post-price-auction').serialize());
                    },
                    error: function(response, xhr, status, error) {
                        console.log(response.responseJSON.errors[0]);
                    }
                });
            });
        });
    </script>

@endsection
