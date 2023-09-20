<?php

namespace App\Http\Controllers\Admin\Auction;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoomFinal as ModelsAuctionRoomFinal;
use Illuminate\Http\Request;

class AuctionRoomFinal extends Controller
{
    //
    public function index()
    {
        $data['finals'] = ModelsAuctionRoomFinal::orderby('id','desc')->paginate(5);
        return view('backend.auctionroomfinal.auctionroomfinal',$data);
    }
}
