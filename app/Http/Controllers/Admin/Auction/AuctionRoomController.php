<?php

namespace App\Http\Controllers\Admin\Auction;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoom;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AuctionRoomController extends Controller
{
    //
    public function index()
    {
        $data['rooms'] = AuctionRoom::orderby('id', 'desc')->paginate(5);
        return view('backend.auctionroom.auctionroom', $data);
    }
    public function create()
    {
        return view('backend.auctionroom.createauctionroom');
    }
    public function postcreate(Request $request)
    {
        // dd($request);
        $room = new AuctionRoom();
        $room->id_product = $request->id_product;
        $room->thoi_gian_bat_dau = $request->thoi_gian_bat_dau;
        $room->thoi_gian_ket_thuc = $request->thoi_gian_ket_thuc;
        $room->id_dgv  = $request->id_dgv;
        $room->state = $request->state;

        $room->save();
        $request->session()->flash('alert', 'Đã thêm thành công');
        return redirect()->route('auctionroom.home');
    }
    public function edit(Request $request)
    {
        $data['room'] = AuctionRoom::findOrFail($request->id);
        return view('backend.auctionroom.editauctionroom', $data);
    }
    public function postedit(Request $request)
    {
        // die;
        
        $room = AuctionRoom::find($request->id);
        $room->id_product = $request->id_product;
        $room->thoi_gian_bat_dau = $request->thoi_gian_bat_dau;
        $room->thoi_gian_ket_thuc = $request->thoi_gian_ket_thuc;
        $room->id_dgv  = $request->id_dgv;
        $room->state = $request->state;
        $room->save();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()->route('auctionroom.home');
    }
    public function delete(Request $request)
    {
        $room = AuctionRoom::find($request->id);
        $room->delete();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()->route('auctionroom.home');
    }

    public function getProductName(Request $request)
    {
        // dd($request->id);
        $id = $request->id;
        $product = Product::findOrFail($id);
        // dd($product->product_name);
        return $product->product_name;
    }
    public function getDgvName(Request $request)
    {
        // dd($request->id);
        $id = $request->id;
        // $user = User::findOrFail($id);
        $user = User::where('level', '2')->where('id', $id)->firstOrFail();
        // dd($user->user_name);
        return $user->name;
    }
}
