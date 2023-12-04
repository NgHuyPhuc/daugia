<!-- Tin nhắn của bạn -->
<div class="message right">
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
        <p class="p-message">{{ $message }}</p>
    </div>

    {{-- <img class="img-icon" src="../upload/img/hinh-anh-bau-troi-sao-dem-dep.jpg" alt=""> --}}
    <img class="img-icon" src="../upload/img/{{ $avatar }}" alt="">

</div>
