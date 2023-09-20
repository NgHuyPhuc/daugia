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
        return view('');
    }
    public function postcreate(Request $request)
    {


    }
    public function edit(Request $request)
    {

    }
    public function postedit(Request $request)
    {

    }
    public function delete(Request $request)
    {

    }
}
