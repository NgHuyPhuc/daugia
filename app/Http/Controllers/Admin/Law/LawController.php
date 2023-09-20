<?php

namespace App\Http\Controllers\Admin\Law;

use App\Http\Controllers\Controller;
use App\Models\Law;
use Illuminate\Http\Request;

class LawController extends Controller
{
    //
    public function index(){
        $data['laws'] = Law::orderby('id', 'desc')->paginate(5);
        return view('backend.law.law',$data);
    }
    public function create()
    {
        return view('backend.law.createlaw');
    }
    public function postcreate(Request $request)
    {
        $law = new Law();
        $law->info = $request->info;
        $law->link = $request->link;
        $law->save();
        $request->session()->flash('alert', 'Đã thêm mới thành công!');
        return redirect()->route('law.home');

    }
    public function edit(Request $request)
    {
        $data['law'] = Law::find($request->id);
        return view('backend.law.editlaw',$data);
    }
    public function postedit(Request $request)
    {
        $law = Law::find($request->id);
        $law->info = $request->info;
        $law->link = $request->link;
        $law->save();
        $request->session()->flash('alert', 'Đã sửa thành công!');
        return redirect()->route('law.home');
    }
    public function delete(Request $request)
    {
        $law = Law::find($request->id);
        $law->delete();
        $request->session()->flash('alert', 'Đã xóa thành công!');
        return redirect()->route('law.home');
    }
}
