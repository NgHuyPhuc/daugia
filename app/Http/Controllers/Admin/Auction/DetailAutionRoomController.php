<?php

namespace App\Http\Controllers\Admin\Auction;

use App\Http\Controllers\Controller;
use App\Models\DetailAuctionRoom;
use Illuminate\Http\Request;

class DetailAutionRoomController extends Controller
{
    //
    public function index(){
        return view('backend.detailauctionroom.detailauctionroom');
    }
    public function search(Request $request){
        
        if(DetailAuctionRoom::where('id_auction_room', $request->id)->orwhere('id_product', $request->id_prd)->count()>0)
        {
            $data['error'] = null;
            $data['details'] = DetailAuctionRoom::where('id_auction_room', $request->id)->orwhere('id_product', $request->id_prd)->orderby('bidding_price','desc')->paginate(2);
            $data['details']->appends([
                'id' => $request->id,
                'id_prd' => $request->id_prd,
            ]);
            return view('backend.detailauctionroom.detailauctionroomsearch',$data);
        }
        else{
            $data['error'] = 'không có phòng tìm kiếm';
            $data['details'] = [];
            return view('backend.detailauctionroom.detailauctionroomsearch',$data);
        }
        // dd($data['details'][0]->id_auction_room);
    }
    public function create()
    {

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
