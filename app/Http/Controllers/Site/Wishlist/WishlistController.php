<?php

namespace App\Http\Controllers\Site\Wishlist;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
    public function add(Request $request)
    {
        $productId = $request->input('product_id');

        // Xử lý thêm sản phẩm vào danh sách yêu thích ở đây
        $id_user = Auth::user()->id;
        $wishlist = WishList::where('id_user', $id_user)->where('id_product', $productId);
        $new_wishlist = new WishList();
        $count = $wishlist->count();
        if($count>0){
            $wishlist->delete();
            return response()->json(['success' => false, 'message' => 'Sản phẩm đã xóa trong danh sách yêu thích.']);
        }
        else{
            $new_wishlist->id_user = $id_user;
            $new_wishlist->id_product = $productId;
            $new_wishlist->save();
            return response()->json(['success' => true, 'message' => 'Sản phẩm đã được thêm vào danh sách yêu thích.']);
        }

    }
    public function wishlist(Request $request)
    {
        $id_user = Auth::user()->id;
        
        $data['list'] = WishList::orderby('id','desc')->where('id_user',$id_user)->paginate(5);
        return view('frontend.profile.wishlist', $data);
    }
}
