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
        if(Auth::user()->level == 2)
        {
            return $next($request);
        }
        elseif (Auth::user()->level == 1){
            $id_prd = AuctionRoom::findOrFail($request->id)->id_product;
            $id_user = Auth::user()->id;
            // dd($idprd);
            $count = Payment::where('id_product', $id_prd)->where('id_user', $id_user)->where('state','1')->count();
            // dd($count);
            if($count > 0){
                return $next($request);
            }
            else{
                return redirect()->route('user.listroom')->with('message', 'Bạn không có quyền vào phòng đấu giá');
            }
        }
    }
}
