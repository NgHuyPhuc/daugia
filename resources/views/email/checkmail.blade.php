<div style="width: 600px;margin: 0 auto">
    <div style="text-align: center">
        <h2> Xin chào {{ $name }}</h2>
        <p>Vui lòng xác nhận email</p>
    </div>
    {{-- @dd($id,$token); --}}
    <div style="text-align: center">
        <a href="{{ route('user.checkmail',['customer'=>$id, 'token' => $token]) }}"
            style="text-align: center;display: inline-block;background-color: green;color: #fff;padding: 7px 25px; font-weight: bold">Xác nhận
            email</a>
    </div>
    
</div>
