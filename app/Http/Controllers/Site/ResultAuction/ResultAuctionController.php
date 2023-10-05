<?php

namespace App\Http\Controllers\Site\ResultAuction;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoomFinal;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class ResultAuctionController extends Controller
{
    //
    public function index(){
        $data['list'] = AuctionRoomFinal::orderby('id', 'desc')->paginate(10);
        return view('frontend.result.result',$data);
    }
    public function search(Request $request){

    }
    public function detail(Request $request){
        $data['final'] = AuctionRoomFinal::find($request->id);
        $id_product = $data['final']->id_product;
        $id_auction_room = $data['final']->id_room;
        $data['product'] = Product::find($id_product);
        $data['listpayment'] = Payment::where('id_product', $id_product)->where('state',1)->get();
        // dd($data);
        return view('frontend.result.resultdetail', $data);
    }
}
