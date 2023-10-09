<?php

namespace App\Http\Controllers\Admin\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index(){
        $data['payments'] = Payment::orderby('id','desc')->paginate(5);
        return view('backend.payment.payment',$data);
    }
    public function create()
    {
        return view('backend.payment.paymentcreate');
    }
    public function postcreate(Request $request)
    {
        $payment = new Payment;
        $payment->id_user = $request->id_user;
        $payment->id_product  = $request->id_product ;
        $payment->bank_account_number = $request->bank_account_number;
        $payment->bank = $request->bank;
        $payment->account_holder_name = $request->account_holder_name;
        $payment->total_amount = $request->total_amount;
        $payment->state = $request->state;

        $payment->save();
        $request->session()->flash('alert', 'Đã thêm mới thành công');
        return redirect()->route('payment.home');
    }
    public function edit(Request $request)
    {
        $data['payment'] = Payment::findOrFail($request->id);
        return view('backend.payment.paymenedit',$data);
    }
    public function postedit(Request $request)
    {
        $payment = Payment::findOrFail($request->id);
        $payment->id_user = $request->id_user;
        $payment->id_product  = $request->id_product ;
        $payment->bank_account_number = $request->bank_account_number;
        $payment->bank = $request->bank;
        $payment->account_holder_name = $request->account_holder_name;
        $payment->total_amount = $request->total_amount;
        $payment->state = $request->state;

        $payment->save();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()
        // ->back();
        ->route('payment.home');
    }
    public function delete(Request $request)
    {
        $payment = Payment::findOrFail($request->id);
        $payment->delete();
        $request->session()->flash('alert', 'Đã xóa thành công');
        return redirect()->route('payment.home');
    }
    public function search(Request $request)
    {
        if(isset($request->id))
        {
            $searchTerm = $request->id;
            $data['payments'] = Payment::where('id_product', $searchTerm)->paginate(5);
            return view('backend.payment.paymentsearch', $data);
        }
        else{
            $searchTerm = $request->keyword;
            $data['payments'] = Payment::whereHas('product', function ($query) use ($searchTerm) {
                $query->where('product_name', 'like', '%' . $searchTerm . '%');
            })
            ->orWhereHas('user', function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            })
            ->paginate(5);
            // dd($data);
            return view('backend.payment.paymentsearch', $data);
        }
    }
}
