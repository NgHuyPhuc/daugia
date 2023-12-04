<div class="message left">
    <img class="img-icon" src="../upload/img/{{$avatar}}" alt="">
    {{-- <img class="img-icon" src="../upload/img/hinh-anh-4k-con-duong-va-hang-cay.jpg" alt=""> --}}
    <div class="">
        @if ($level == 2)
            @if (isset($name))
                <a style="color: red">{{ $name }} (Đấu giá viên)</a>
                <br>
            @endif
        @else
            @if (isset($name))
                <a>{{ $name }}</a>
                <br>
            @endif

        @endif
        <p class="p-message">{{$message}}</p>
    </div>
</div>