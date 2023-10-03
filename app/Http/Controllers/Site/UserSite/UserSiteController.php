<?php

namespace App\Http\Controllers\Site\UserSite;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoom;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSiteController extends Controller
{
    //
    public function profile()
    {
        $data['profile'] = User::findOrFail(Auth::user()->id);
        // dd($data);
        return view('frontend.profile.profile', $data);
    }
    public function postprofile(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        // dd($request);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->cccd = $request->cccd;
        $user->ngay_cap_cccd = $request->ngay_cap_cccd;
        $user->noi_cap_cccd = $request->noi_cap_cccd;
        $user->save();
        $request->session()->flash('alert', 'Cập nhật thông tin thành công');
        return redirect()->route('user.profile');
    }
    public function profilechangepass()
    {
        return view('frontend.profile.changepass');
    }
    public function postprofilechangepass(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        // dd($request);
        $oldpass = $request->old_password;
        // dd($user->password,Hash::check($oldpass, $user->password));
        if (Hash::check($oldpass, $user->password)) {
            if ($request->password === $request->repassword) {
                $user->password = $request->password;
                $user->save();
                $request->session()->flash('alert', 'Cập mật khẩu thành công');
                return redirect()->route('user.profile');
            }
            else{
                $request->session()->flash('repass', 'Mật khẩu mới và nhập lại không giống nhau');
                return redirect()->route('user.profilechangepass');
            }
        } 
        else {
            $request->session()->flash('old_pass', 'Mật khẩu cũ không đúng');
            return redirect()->route('user.profilechangepass');
        }
    }
    public function profilepayment(){
        $data['payments'] = Payment::orderby('id','desc')->where('id_user', Auth::user()->id)->paginate(2);
        // dd($data);
        return view('frontend.profile.listpayment',$data);
    }
    public function searchPayment(Request $request)
    {
        $searchTerm = $request->keyword;
        // $data['room'] = AuctionRoom::where('id_product','')
        // $data['payment'] = Payment::where('id','like','%'.$request->keyword.'%')->orwhere('product_name','like','%'.$request->keyword.'%')->paginate(5);
        $data['payments'] = Payment::
        // where('id','like','%'.$request->keyword.'%')->
        whereHas('product', function ($query) use ($searchTerm) {
            $query->where('product_name', 'like', '%' . $searchTerm . '%');
        })->orwhere('id','like','%'.$request->keyword.'%')
        // ->first();
        ->paginate(5);
        // $data['test'] = Payment::join('room', 'payment.id_product', '=', 'room.id_product')
        // ->where('payment.id', $paymentId)
        // ->value('room.id');
        // dd($data);
        // dd($data['payments']->room);
        $data['test'] = [];
        foreach($data['payments'] as $item)
        {
            $roomId =  Payment::join('auction_rooms', 'payments.id_product', '=', 'auction_rooms.id_product')
                            ->where('payments.id', $item->id_product)
                            ->value('auction_rooms.id');
            $data['test'][] = $roomId;  
        }
        // dd($data);
        return view('frontend.profile.searchpayment',$data);
        // return 'abc';
    }
}
