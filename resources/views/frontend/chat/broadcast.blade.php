<!-- Tin nhắn của bạn -->
<div class="message right">
    <div class="">
        @if (isset($name))
            <a>{{$name}}</a>
            <br>

        @endif
        <p class="p-message">{{$message}}</p>
    </div>
    
    <img class="img-icon" src="../upload/img/hinh-anh-bau-troi-sao-dem-dep.jpg" alt="">
</div>