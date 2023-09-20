<?php

namespace App\Http\Controllers\Admin\Notify;

use App\Http\Controllers\Controller;
use App\Models\Notify;
use Illuminate\Http\Request;

class NotifyController extends Controller
{
    //
    public function index(){
        $data['notifies'] = Notify::orderby('id', 'desc')->paginate(5);
        return view('backend.notify.notify',$data);
    }
    public function create()
    {
        return view('backend.notify.createnotify');
    }
    public function postcreate(Request $request)
    {
        // dd($request->link->getClientOriginalName());
        // dd($request, $request->file()['link']->originalName);
        if($request->hasFile('link')){
            $notify = new Notify();
            $notify->info = $request->info;
            $request->link->move("upload/pdf", $request->link->getClientOriginalName());
            $notify->link = $request->link->getClientOriginalName();
            $notify->save();
            $request->session()->flash('alert', 'Đã thêm thành công');
            return redirect()->route('notify.home');
        }
    }
    public function edit(Request $request)
    {
        $data['notify'] = Notify::find($request->id);
        return view('backend.notify.editnotify',$data);
    }
    public function postedit(Request $request)
    {
        $notify = Notify::find($request->id);
        $notify->info = $request->info;
        if($request->hasFile('link'))
        {
            $notify->link = $request->link->getClientOriginalName();
            $request->link->move("upload/pdf", $request->link->getClientOriginalName());
        }
        $notify->save();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()->route('notify.home');
    }
    public function delete(Request $request)
    {
        $notify = Notify::find($request->id);
        $notify->delete();
        $request->session()->flash('alert', 'Đã xóa thành công');
        return redirect()->route('notify.home');
    }
}
