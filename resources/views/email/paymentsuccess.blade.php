<div style="width: 600px;margin: 0 auto">
    <div style="text-align: center">
        <h2> Xin chào {{ $user->name }}</h2>
        <p style="font-size: 16px">Bạn đã thanh toán thành công đơn hàng <strong>{{$payment->id}}</strong></p>

        <table border="1" cellspacing='0' cellpadding='10' width='100%'>
            <tr>
                <td>Tên sản phẩm:</td>
                <td>{{ $product->product_name }} VNĐ</td>
            </tr>
            <tr>
                <td>Chi phí tham gia:</td>
                <td>{{number_format($product->participation_costs)}} VNĐ</td>
            </tr>
            <tr>
                <td>Tiền đặt cọc: </td>
                <td>{{number_format($product->auction_deposit)}} VNĐ</td>
            </tr>
            <tr>
                <td>Tổng tiền: </td>
                <td>{{number_format($payment->total_amount)}} VNĐ</td>
            </tr>
        </table>
    </div>
</div>
