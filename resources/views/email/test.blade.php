{{-- <style>
.email{
    width: 500px;
    margin: 0;
    padding: 15px;
    text-align: center;
}
</style>

<div class="email">
    <h2 style="text-align: center">Hi {{$name}}</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div> --}}

<div style="width: 600px;margin: 0 auto">
    <div style="text-align: center">
        <h2> Xin chào {{ $name }}</h2>
        <p>Bạn đã thanh toán thành công đơn hàng <strong>123</strong></p>

        <table border="1" cellspacing='0' cellpadding='10' width='100%'>
            <tr>
                <td>Tên sản phẩm:</td>
                <td>Đây là tên sản phẩm</td>
            </tr>
            <tr>
                <td>Chi phí tham gia</td>
                <td>200.000</td>
            </tr>
            <tr>
                <td>Tiền đặt cọc </td>
                <td>5.000.000</td>
            </tr>
            <tr>
                <td>Tổng tiền </td>
                <td>5.200.000</td>
            </tr>
        </table>
    </div>
</div>
