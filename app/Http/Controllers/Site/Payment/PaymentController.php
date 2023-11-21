<?php

namespace App\Http\Controllers\Site\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    //
    public function payment(Request $request)
    {
        // dd($request);
        // dd(count(Payment::where('id_user', $request->id_user)->where('id_product',$request->id_product)->get()));
        if (Auth::user()->level == 1) {
            if (Payment::where('id_user', $request->id_user)->where('id_product', $request->id_product)->count() > 0) {
                return back()->with('message', 'Bạn đã mua sản phẩm này');
            } else {
                $payment = new Payment();
                $payment->id_user = $request->id_user;
                $payment->id_product = $request->id_product;
                $payment->total_amount = $request->total_amount;
                $payment->bank_account_number = $request->bank_account_number;
                $payment->account_holder_name = $request->account_holder_name;
                $payment->bank = $request->bank;
                $payment->state = 2;
                $payment->save();
                return redirect()->route('user.profilepayment');
            }
        }
    }
    public function payment_success(Request $request)
    {
        if($request->vnp_ResponseCode == 00)
        {
            $payment = Payment::find($request->vnp_TxnRef);
            $payment->state = 1;
            $payment->save();
    
            $user = User::find($payment->id_user);
            $emailsend = $user->email;
            $product = Product::find($payment->id_product);
            Mail::send('email.paymentsuccess', ['payment'=>$payment, 'user' => $user, 'product' => $product]
                    , function($email) use($emailsend){
                        $email->to($emailsend);
                        $email->subject('Thanh toán đơn hàng thành công');
                    });
            return redirect()->route('user.profilepayment');
        }
        else{
            echo 'thanh toan that bai';
        }
    }
    public function vnpay_payment(Request $request)
    {
        $payment = new Payment();
        $payment->id_user = $request->id_user;
        $payment->id_product = $request->id_product;
        $payment->total_amount = $request->total_amount;
        $payment->bank_account_number = $request->bank_account_number;
        $payment->account_holder_name = $request->account_holder_name;
        $payment->bank = $request->bank;
        $payment->state = 2;
        $payment->save();

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/payment/thanks";
        $vnp_TmnCode = "GEL2YUQS"; //Mã website tại VNPAY 
        $vnp_HashSecret = "NHZOSIXEXIUBYYBMTVLLHRHCTTTJAFAZ"; //Chuỗi bí mật

        $vnp_TxnRef = $payment->id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán hóa đơn';
        $vnp_OrderType = 'Auction Payment';
        $vnp_Amount = $request->total_amount * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }
}
