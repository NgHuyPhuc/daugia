<?php

namespace App\Http\Controllers\Site\UserSite;

use App\Http\Controllers\Controller;
use App\Models\AuctionRoom;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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
        // dd($request->file());

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
        $user->bank_account_number = $request->bank_account_number;
        $user->account_holder_name = $request->account_holder_name;
        $user->bank = $request->bank;
        $user->bank_branch = $request->bank_branch;
        if($request->hasFile("avatar"))
        {
            $user->avatar = $request->avatar->getClientOriginalName();
            $request->avatar->move("upload/img", $request->avatar->getClientOriginalName());
        }
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
            } else {
                $request->session()->flash('repass', 'Mật khẩu mới và nhập lại không giống nhau');
                return redirect()->route('user.profilechangepass');
            }
        } else {
            $request->session()->flash('old_pass', 'Mật khẩu cũ không đúng');
            return redirect()->route('user.profilechangepass');
        }
    }
    public function profilepayment()
    {
        $data['payments'] = Payment::orderby('id', 'desc')->where('id_user', Auth::user()->id)->paginate(2);
        // dd($data);
        return view('frontend.profile.listpayment', $data);
    }
    public function searchPayment(Request $request)
    {
        $searchTerm = $request->keyword;
        // $data['room'] = AuctionRoom::where('id_product','')
        // $data['payment'] = Payment::where('id','like','%'.$request->keyword.'%')->orwhere('product_name','like','%'.$request->keyword.'%')->paginate(5);
        $data['payments'] = Payment::where('id_user', Auth::user()->id)
            ->whereHas('product', function ($query) use ($searchTerm) {
                $query->where('product_name', 'like', '%' . $searchTerm . '%');
            })->orwhere('id', 'like', '%' . $searchTerm . '%')
            ->paginate(5);


        $data['test'] = [];
        foreach ($data['payments'] as $item) {
            $roomId =  Payment::join('auction_rooms', 'payments.id_product', '=', 'auction_rooms.id_product')
                ->join('users', 'payments.id_user', '=', 'users.id')
                ->where('payments.id', $item->id_product)
                ->value('auction_rooms.id');
            $data['test'][] = $roomId;
        }
        // dd(Auth::user()->id);
        // dd($data);
        return view('frontend.profile.searchpayment', $data);
        // return 'abc';
    }
    public function register()
    {
        return view('frontend.login_register.register');
    }
    public function postregister(Request $request)
    {
        $email = $request->email;
        $check = User::where('email', $email)->count();
        if ($check > 0) {
            return redirect()->back()->with('message', 'Email đã được đăng ký');
        } else {
            if ($request->password == $request->repassword) {
                $token = Str::random(20);
                $user = new User();
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->name = $request->name;
                $user->phone = $request->phone;
                if($request->hasfile('avatar'))
                {
                    $user->avatar = $request->avatar->getClientOriginalName();
                    $request->avatar->move("upload/img", $request->avatar->getClientOriginalName());
                }
                if($request->hasfile('imgccdtrc')){
                    $user->imgccdtrc = $request->imgccdtrc->getClientOriginalName();
                    $request->imgccdtrc->move("upload/img", $request->imgccdtrc->getClientOriginalName());
                }
                if($request->hasfile('imgccdsau')){
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
                $user->checkmail = 0;
                $user->token = $token;
                $user->level = 0;
            
                $user->save();
                $emailsend = $request->email;
                $name = $request->name;
                $id = $user->id;
                $request->session()->flash('message', 'Đã thêm mới thành công!');
                Mail::send('email.checkmail', ['id'=>$id,'emailsend' => $emailsend, 'name' => $name, 'token' => $token]
                , function($email) use($emailsend,$name){
                    $email->to($emailsend,$name);
                    $email->subject('Xác nhận email tài khoản');
                });
                return redirect()->route('user.login')->with('message','Bạn đã đăng ký thành công hãy đăng nhập');
            } else {
                return redirect()->back()->with('message', 'Password không trùng khớp');
            }
        }
    }
    public function checkmail(Request $request)
    {
        $id = $request->customer;
        $token = $request->token;
        // dd($id,$token);
        $user = User::findorfail($id);
        $emailsend = $user->email;
        $name = $user->name;
        if($user->token === $token) {
            $user->checkmail = 1;
            $user->save();
            Mail::send('email.checkmailsuccess', ['id'=>$id,'emailsend' => $emailsend, 'name' => $name, 'token' => $token]
                , function($email) use($emailsend,$name){
                    $email->to($emailsend,$name);
                    $email->subject('Xác nhận email thành công');
                });
            return redirect()->route('user.login');
        }
        else{
            dd('Mã không hợp lệ');
        }
    }
}
