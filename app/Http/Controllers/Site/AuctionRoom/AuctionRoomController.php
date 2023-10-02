<?php

namespace App\Http\Controllers\Site\AuctionRoom;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoom;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuctionRoomController extends Controller
{
    //
    public function index()
    {
        return view('frontend.room.listroom');

    }
    public function listroom()
    {
        // dd(Carbon::now());
        $timenow = Carbon::now();
        // dd($timenow);
        $data['list'] = AuctionRoom::where('thoi_gian_bat_dau','<=', $timenow)->where('thoi_gian_ket_thuc','>=' , $timenow)->where('state','1')->get();
        // $data['list'] = AuctionRoom::where('thoi_gian_ket_thuc','>=' , $timenow)->where('state','1')->get();
        // dd($data);
        return view('frontend.room.listroom', $data);
    }
    public function autionroom(Request $request)
    {
        $data['info'] = AuctionRoom::findOrFail($request->id);
        return view('frontend.room.room',$data);
    }
    
}
