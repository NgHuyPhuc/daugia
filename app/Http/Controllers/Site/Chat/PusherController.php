<?php

namespace App\Http\Controllers\Site\Chat;

use App\Events\PusherBroadcast;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->get('message'),$request->get('name')
        ,$request->get('avatar')
        ,$request->get('level')
        ))->toOthers();
        
        return view('frontend.chat.broadcast', 
        ['message' => $request->get('message'),
        'name'=>$request->get('name')
        ,'avatar'=>$request->get('avatar')
        ,'level'=>$request->get('level')

        ]);
    }

    public function receive(Request $request)
    {
        return view('frontend.chat.receive', 
        ['message' => $request->get('message'),
        'name'=>$request->get('name')
        ,'avatar'=>$request->get('avatar')
        ,'level'=>$request->get('level')

        ]);
    }
}
