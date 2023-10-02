<?php

namespace App\Http\Middleware;

use App\Models\AuctionRoom;
use App\Models\Payment;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuctionRoom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd($request->id);
        $id_prd = AuctionRoom::findOrFail($request->id)->id_product;
        $id_user = Auth::user()->id;
        // dd($idprd);
        $count = Payment::where('id_product', $id_prd)->where('id_user', $id_user)->count();
        // dd($count);
        if($count > 0){
            return $next($request);
        }
        else{
            return back()->with('message', 'Bạn không có quyền vào phòng đấu giá');
        }
    }
}
