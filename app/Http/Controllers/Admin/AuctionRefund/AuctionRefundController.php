<?php

namespace App\Http\Controllers\Admin\AuctionRefund;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class AuctionRefundController extends Controller
{
    //
    public function index(){
        $data['payments'] = Payment::orderby('id','desc')->where('state','3')->orwhere('state','5')->paginate(5);
        return view('backend.refund.refundpayment',$data);
    }
    public function create()
    {
        // return view('backend.payment.paymentcreate');
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
        return redirect()->route('paymentstate.home');
    }
    public function edit(Request $request)
    {
        $data['payment'] = Payment::findOrFail($request->id);
        return view('backend.refund.refundpaymentedit',$data);
    }
    public function postedit(Request $request)
    {
        $payment = Payment::findOrFail($request->id);
        $payment->state = $request->state;

        $payment->save();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()
        // ->back();
        ->route('paymentstate.home');
    }
    public function delete(Request $request)
    {
        $payment = Payment::findOrFail($request->id);
        $payment->delete();
        $request->session()->flash('alert', 'Đã xóa thành công');
        return redirect()->route('paymentstate.home');
    }
    public function search(Request $request)
    {
        if(isset($request->id))
        {
            $searchTerm = $request->id;
            $data['payments'] = Payment::where('id_product', $searchTerm)->paginate(5);
            $data['payments']->appends(['id'=>$searchTerm]);
            return view('backend.refund.refundpaymentsearch', $data);
        }
        else{
            $searchTerm = $request->keyword;
            $data['payments'] = Payment::where(function ($query) use ($searchTerm) {
                $query->where('state', 5)
                      ->orWhere('state', 3);
            })
            ->where(function ($query) use ($searchTerm) {
                $query->whereHas('user', function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%');
                })
                ->orWhereHas('product', function ($query) use ($searchTerm) {
                    $query->where('product_name', 'like', '%' . $searchTerm . '%');
                });
            })
            ;
            $data['payments']->appends(['keyword'=>$searchTerm]);
            return view('backend.refund.refundpaymentsearch', $data);
        }
    }
}
