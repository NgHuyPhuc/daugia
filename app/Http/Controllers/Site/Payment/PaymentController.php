<?php

namespace App\Http\Controllers\Site\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function payment(Request $request)
    {
        // dd($request);
        // dd(count(Payment::where('id_user', $request->id_user)->where('id_product',$request->id_product)->get()));
        if(count(Payment::where('id_user', $request->id_user)->where('id_product',$request->id_product)->get())>0)
        {
            
        }
        else{
            $payment = new Payment();
            $payment->id_user = $request->id_user;
            $payment->id_product = $request->id_product;
            $payment->total_amount = $request->total_amount;
            $payment->bank_account_number = $request->bank_account_number;
            $payment->account_holder_name = $request->account_holder_name;
            $payment->bank = $request->bank;
            $payment->state = 2;
            $payment->save();
            return redirect()->route('site.home');
        }
    }
}