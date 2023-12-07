<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $data['count_payment'] = Payment::where('state',  '!=', '2')->count();
        // $data['profit']= Payment::where('state',  '!=','2')->get();
        $profit = Payment::where('state',  '!=', '2')->get();
        $data['profit'] = 0;
        foreach ($profit as $key => $value) {
            # code...
            $data['profit'] = $data['profit'] + Product::where('id', $value->id_product)->first()->participation_costs;
        }
        $profits = [];

        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1)); // Lấy tên tháng từ số tháng
            $profit_month = 0;
            $check = Payment::where('state', '!=', '2')->whereMonth('created_at', $i)->count();
            if ($check > 0) {
                $payment_month = Payment::where('state', '!=', '2')->whereMonth('created_at', $i)->get();
                foreach ($payment_month as $key => $value) {
                    $profit = $profit_month + Product::where('id', $value->id_product)->first()->participation_costs;
                    $profit_month = $profit; // Cập nhật giá trị profit_month thay vì gán lại
                }
                $profits[$month] = $profit_month;
            } else {
                $profits[$month] = 0;
            }
        }
        // dd($profits);
        $data['all_profit'] = $profits;
        // dd($data['all_profit']);
        return view('backend/index', $data);
    }
}
