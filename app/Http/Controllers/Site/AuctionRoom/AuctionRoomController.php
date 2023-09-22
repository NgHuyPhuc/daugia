<?php

namespace App\Http\Controllers\Site\AuctionRoom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuctionRoomController extends Controller
{
    //
    public function index()
    {
        return view('frontend.room.listroom');

    }
    public function room()
    {
        return 'room';
    }
}
