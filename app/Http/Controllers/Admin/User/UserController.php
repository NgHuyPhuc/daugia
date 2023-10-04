<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $data['users'] = User::orderby('level','asc')->paginate(5);
        return view('backend.users.user.listuser', $data);
    }
    public function create()
    {
        return view('backend.users.user.createuser');
    }
    public function postcreate(Request $request)
    {
        if ($request->hasFile('imgccdtrc') || $request->hasFile('imgccdsau')) {
            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->imgccdtrc = $request->imgccdtrc->getClientOriginalName();
            $request->imgccdtrc->move("upload/img", $request->imgccdtrc->getClientOriginalName());
            $user->imgccdsau = $request->imgccdsau->getClientOriginalName();
            $request->imgccdsau->move("upload/img", $request->imgccdsau->getClientOriginalName());
            $user->dob = $request->dob;
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->cccd = $request->cccd;
            $user->ngay_cap_cccd = $request->ngay_cap_cccd;
            $user->noi_cap_cccd = $request->noi_cap_cccd;
            $user->bank_account_number = $request->bank_account_number;
            $user->account_holder_name = $request->account_holder_name;
            $user->bank = $request->bank;
            $user->bank_branch = $request->bank_branch;
            $user->level = $request->level;
            $user->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công!');
            return redirect()->route('useradminsite.home');
        }
    }
    public function edit(Request $request)
    {
        $data['user'] = User::find($request->id);
        return view('backend.users.user.edituser', $data);
    }
    public function postedit(Request $request)
    {
        $user =  User::find($request->id);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->phone = $request->phone;
        if($request->hasFile('imgccdtrc')){
            $user->imgccdtrc = $request->imgccdtrc->getClientOriginalName();
            $request->imgccdtrc->move("upload/img", $request->imgccdtrc->getClientOriginalName());
        }
        if($request->hasFile('imgccdtrc')){
            $user->imgccdsau = $request->imgccdsau->getClientOriginalName();
            $request->imgccdsau->move("upload/img", $request->imgccdsau->getClientOriginalName());
        }
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->cccd = $request->cccd;
        $user->ngay_cap_cccd = $request->ngay_cap_cccd;
        $user->noi_cap_cccd = $request->noi_cap_cccd;
        $user->bank_account_number = $request->bank_account_number;
        $user->account_holder_name = $request->account_holder_name;
        $user->bank = $request->bank;
        $user->bank_branch = $request->bank_branch;
        $user->level = $request->level;
        $user->save();
        $request->session()->flash('alert', 'Đã sửa thành công!');
        return redirect()->route('useradminsite.home');
    }
    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        $request->session()->flash('alert', 'Đã xóa thành công!');
        return redirect()->route('useradminsite.home');
    }
    public function search(Request $request){
        $data['users'] = User::where('id','like','%'.$request->keyword.'%')
        ->orwhere('name','like','%'.$request->keyword.'%')
        ->paginate(5);
        // dd($data);
        return view('backend.users.user.searchuser',$data);
    }
    public function detail(Request $request){
        $data['user'] = User::find($request->id);
        return view('backend.users.user.detailuser',$data);
    }
}
