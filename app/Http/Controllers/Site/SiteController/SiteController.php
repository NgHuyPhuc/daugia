<?php

namespace App\Http\Controllers\Site\SiteController;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    //
    public function index(){
        // dd(Auth::guard('webadmin')->check());
        return view('frontend.index');
    }
    
    public function products(){
        return view('frontend.product.product');
    }
    public function detail(){
        return view('frontend.product.detail');
    }
    public function listroom(){
        return view('frontend.room.listroom');
    }
    public function room(){
        return 'room';
    }
    public function profile(){
        return view('frontend.profile.profile');
    }
    public function about(){
        $data['about'] = About::first();
        // $data['about'] = About::get()->toarray();
        // $data['about'] = About::all();
        // dd($data);
        return view('frontend.about.about',$data);
    }
}
