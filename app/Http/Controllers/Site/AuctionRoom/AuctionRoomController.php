<?php

namespace App\Http\Controllers\Site\AuctionRoom;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoom;
use App\Models\DetailAuctionRoom;
use App\Models\User;
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
        $data['list'] = AuctionRoom::where('thoi_gian_bat_dau', '<=', $timenow)->where('thoi_gian_ket_thuc', '>=', $timenow)->where('state', '1')->get();
        // $data['list'] = AuctionRoom::where('thoi_gian_ket_thuc','>=' , $timenow)->where('state','1')->get();
        // dd($data);
        return view('frontend.room.listroom', $data);
    }
    public function autionroom(Request $request)
    {
        $data['info'] = AuctionRoom::findOrFail($request->id);
        $data['detail'] = DetailAuctionRoom::orderby('bidding_price', 'desc')->where('id_auction_room', $request->id)->first();
        // $data['detail'] = DetailAuctionRoom::orderby('bidding_price', 'desc')->where('id_auction_room', 4)->first();
        $data['dgv'] = User::findOrFail($data['info']->id_dgv);
        // dd($data);
        return view('frontend.room.room', $data);
    }
    public function postautionroom(Request $request)
    {
        $idroom = $request->id;
        $max = DetailAuctionRoom::orderby('bidding_price', 'desc')->first()->bidding_price;
        $setTimeAuctionRoom = AuctionRoom::findOrFail($idroom);
        $timeKetThuc = $setTimeAuctionRoom->thoi_gian_ket_thuc;
        if ($request->bidding_price <= $max) {
            return back()->with('messagefail', 'Đã có người trả giá cao hơn');
        } else {
            $detailAutionRoom = new DetailAuctionRoom();
            $detailAutionRoom->id_auction_room = $request->id_room;
            $detailAutionRoom->id_product = $request->id_product;
            $detailAutionRoom->id_user = $request->id_user;
            $detailAutionRoom->bidding_price = $request->bidding_price;
            $setTimeAuctionRoom->thoi_gian_ket_thuc = Carbon::parse($timeKetThuc)->addMinutes(5);

            // dd($setTimeAuctionRoom->thoi_gian_ket_thuc);
            $setTimeAuctionRoom->save();
            $detailAutionRoom->save();
            // return redirect()->route('user.autionroom',['id'=>$idroom])->with('messagesuccess', 'Bạn đã trả giá thành công');
            return back()->with('messagesuccess', 'Bạn đã trả giá thành công');
        }
    }
    public function getRealTimeData(Request $request){
        $info= DetailAuctionRoom::with('user:id,name')->where('id_auction_room', $request->id)->orderby('bidding_price','desc')->get()->take(5);
        // $info= DetailAuctionRoom::with('user:name')->where('id_auction_room', $request->id)->get()->take(5);
        if($request->ajax()){
            return response()->json(array(
                'info' =>$info
            ));
        }
        return view('frontend.room.room', compact('info'));
    }
}
