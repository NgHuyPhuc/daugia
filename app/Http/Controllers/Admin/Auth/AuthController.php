<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function getLogin(){
        return view("backend/login");
    }
    public function postLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::guard('webadmin')->attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->route('admin.home');
        }
        return redirect()->back()->with('error','invalid');
    }
    public function logout(){
        Auth::guard('webadmin')->logout();
        return redirect()->route('admin.login');
    }
}
