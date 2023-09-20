<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $data['abouts'] = About::orderby('id','desc')->paginate(5);
        // dd($data);
        return view('backend.about.about',$data);
    }
    public function create()
    {
        return view('backend.about.aboutcreate');
    }
    public function postcreate(Request $request)
    {
        $about = new About();
        // dd($request);
        $about->title = $request->title;
        $about->content = $request->content;
        if($request->hasFile('img')){
            $about->img = $request->img->getClientOriginalName();
            $request->img->move('upload/img', $request->img->getClientOriginalName());
            $about->save();
            $request->session()->flash('alert', 'Đã sửa thành công');
            return redirect()->route('about.home');
        }
        else{
            $about->img = 'default.png';
            $about->save();
            $request->session()->flash('alert', 'Đã sửa thành công');
            return redirect()->route('about.home');
        }
        
    }
    public function edit(Request $request)
    {
        $data['about'] = About::findOrFail($request->id);
        return view('backend.about.aboutedit', $data);
    }
    public function postedit(Request $request)
    {
        $about = About::findOrFail($request->id);
        $about->title = $request->title;
        $about->content = $request->content;
        if($request->hasFile('img'))
        {
            $about->img = $request->img->getClientOriginalName();
            $request->img->move('upload/img', $request->img->getClientOriginalName());
        }
        $about->save();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()->route('about.home');
    }
    public function delete(Request $request)
    {
        $about = About::findOrFail($request->id);
        $about->delete();
        $request->session()->flash('alert', 'Đã xóa thành công');
        return redirect()->route('about.home');
    }

    public function ckeditor_image(Request $request){
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move('upload/ckeditor', $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/ckeditor/'.$fileName);
            $msg = 'Tải ảnh thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','$msg')</script>";
            @header("Content-Type: text/html; charset=utf-8");
            echo $response;
        }
    }
    public function file_browser(Request $request){
        $paths= glob(public_path('upload/ckeditor/*'));

        $fileNames = array();
        foreach($paths as $path){
            array_push($fileNames,basename($path));
        }
        $data = array(
            'fileNames' => $fileNames
        );
        // dd($data);
        return view('backend.listimg')->with($data);
    }
}
