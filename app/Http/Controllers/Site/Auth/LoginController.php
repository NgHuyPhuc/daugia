<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(){
        return view('frontend.login_register.login');
    }
    public function postlogin(Request $request){
        // dd($request);
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('site.home');
        }
        return redirect()->back()->with('error','invalid');
    }
    public function logout(){
        // dd(Auth::guard('web')->logout());
        // Auth::guard('webadmin')->logout();
        // return redirect()->route('admin.login');

        Auth::guard('web')->logout();
        return redirect()->route('site.home');
    }
    public function register(){
        return view('frontend.login_register.register');
    }
}
