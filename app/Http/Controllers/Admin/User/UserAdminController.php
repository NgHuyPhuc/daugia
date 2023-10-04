<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    //
    public function index(){
        $data['admins'] = Admin::paginate(5);
        return view('backend.users.admin.listadmin',$data);
    }
    public function create()
    {
        return view('backend.users.admin.createadmin');
    }
    public function postcreate(Request $request)
    {
        if($request->hasFile('dgv_chung_chi'))
        {
            $admin = new Admin();
            $admin->email = $request->email;
            $admin->password = $request->password;
            $admin->name = $request->name;

            $admin->dgv_chung_chi = $request->dgv_chung_chi->getClientOriginalName();
            $request->dgv_chung_chi->move('upload/img',$request->dgv_chung_chi->getClientOriginalName());

            $admin->dgv_ngay_cap_chung_chi = $request->dgv_ngay_cap_chung_chi;
            $admin->dgv_so_the_dgv = $request->dgv_so_the_dgv;
            $admin->dgv_ngay_cap_the_dgv = $request->dgv_ngay_cap_the_dgv;
            $admin->dgv_noi_cap_the_dgv = $request->dgv_noi_cap_the_dgv;
            $admin->level = $request->level;
    
            $admin->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công!');
            return redirect()->route('useradmin.home');
        }
    }
    public function edit(Request $request)
    {
        $data['admin'] = Admin::find($request->id);
        return view('backend.users.admin.editadmin',$data);

    }
    public function postedit(Request $request)
    {

    }
    public function delete(Request $request)
    {
        $admin = Admin::find($request->id);
        $admin->delete();
        return redirect()->route('useradmin.home');
    }
    public function userdgv(Request $request){
        $data['users'] = User::orderby('id','asc')->where('level', 2)->paginate(5);
        return view('backend.users.admin.listdgv', $data);
    }
}
