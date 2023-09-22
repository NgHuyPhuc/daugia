<?php

namespace App\Http\Controllers\Site\UserSite;

use App\Http\Controllers\Controller;
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
}
