<?php

namespace App\Http\Controllers\Site\AuctionRoom;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoom;
use App\Models\AuctionRoomFinal;
use App\Models\DetailAuctionRoom;
use App\Models\MoreImageProduct;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuctionRoomController extends Controller
{
    //
    public function index()
    {
        return view('frontend.room.listroom');
    }
    public function listroom()
    {
        $timenow = Carbon::now();
        $data['list'] = AuctionRoom::where('thoi_gian_bat_dau', '<=', $timenow)->where('thoi_gian_ket_thuc', '>=', $timenow)->where('state', '1')->get();
        return view('frontend.room.listroom', $data);
    }
    public function autionroom(Request $request)
    {
        $data['info'] = AuctionRoom::findOrFail($request->id);
        $data['detail'] = DetailAuctionRoom::where('id_auction_room', $request->id)->orderby('bidding_price', 'desc')->first();
        $data['check'] = true;
        $data['more_img'] = MoreImageProduct::where('id_product','=', $data['info']->id_product)->where('state', '=', 1)->get();
        if ($data['detail'] == null) {
            $data['check'] = false;
            $detail = ["bidding_price" => $data['info']->product->starting_price + $data['info']->product->price_step];
            $data['detail'] = json_encode($detail);
        }
        $data['dgv'] = User::findOrFail($data['info']->id_dgv);
        return view('frontend.room.room', $data);
    }
    public function postautionroom(Request $request)
    {
        // dd($request);

        if (Auth::guard('web')->user()->level == 1) {
            $idroom = $request->id;
            $inforoom = AuctionRoom::find($idroom);
            $max = $inforoom->product->starting_price;
            if (DetailAuctionRoom::where('id_auction_room', $idroom)->orderby('bidding_price', 'desc')->count() > 0) {
                $max = DetailAuctionRoom::where('id_auction_room', $idroom)->orderby('bidding_price', 'desc')->first()->bidding_price;
            }
            $setTimeAuctionRoom = AuctionRoom::findOrFail($idroom);
            $timeKetThuc = $setTimeAuctionRoom->thoi_gian_ket_thuc;
            if ($request->bidding_price <= $max) {
                // return back()->with('messagefail', 'Đã có người trả giá cao hơn');
                return response()->json([
                    'errors' => ['Đã có người trả giá cao hơn']
                ], 400);
            } else {
                $detailAutionRoom = new DetailAuctionRoom();
                $detailAutionRoom->id_auction_room = $request->id_room;
                $detailAutionRoom->id_product = $request->id_product;
                $detailAutionRoom->id_user = $request->id_user;
                $detailAutionRoom->bidding_price = $request->bidding_price;
                // $setTimeAuctionRoom->thoi_gian_ket_thuc = Carbon::parse($timeKetThuc)->addMinutes(5);
                $setTimeAuctionRoom->save();
                $detailAutionRoom->save();
                return response()->json(['success' => true, 'message' => 'Request processed successfully']);
                // return back()->with('messagesuccess', 'Bạn đã trả giá thành công');
            }
        } else {
            return back()->with('messagefail', 'Đã có lỗi sảy ra');
        }
    }
    public function getRealTimeData(Request $request)
    {
        $info = DetailAuctionRoom::with('user:id,name')->where('id_auction_room', $request->id)->orderby('bidding_price', 'desc')->get()->take(5);
        if ($request->ajax()) {
            return response()->json(array(
                'info' => $info
            ));
        }
        return view('frontend.room.room', compact('info'));
    }
    public function postendauction(Request $request)
    {
        $final_room = new AuctionRoomFinal();
        $auction_room = AuctionRoom::find($request->id);
        $auction_room_detail = DetailAuctionRoom::orderby('id', 'desc')->where('id_auction_room', $request->id)->first();
        $final_room->id_product = $auction_room_detail->id_product;
        $final_room->id_auction_room = $auction_room_detail->id_auction_room;
        $final_room->id_dgv = $auction_room->id_dgv;
        $final_room->id_user = $auction_room_detail->id_user;
        $final_room->bidding_price = $auction_room_detail->bidding_price;
        $auction_room->state = 0;

        $payment_status = Payment::where('id_product', $auction_room->id_product)->get();
        foreach ($payment_status as $item) {
            $item->state = 3;
            $item->save();
        }
        // dd($payment_status);
        $auction_room->save();
        $final_room->save();
        return redirect()->route('user.listroom');
        // dd($final_room);
        // dd($auction_room,$auction_room_detail);
        // $final_room->id_product = ;
    }
}
