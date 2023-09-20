<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $data['categories'] = Category::all();
        return view('backend.category.category',$data);
    }
    public function create(Request $request)
    {
        
    }
    public function postcreate(Request $request)
    {
        // dd($request);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        $request->session()->flash('alert', 'Đã thêm thành công');
        return redirect()->route('category.home');
    }
    public function edit(Request $request)
    {
        $data['categories'] = Category::all();
        $data['category'] = Category::find($request->id);
        return view('backend.category.editcategory',$data);
    }
    public function postedit(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()->route('category.home');
    }
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        $request->session()->flash('alert', 'Đã xóa thành công');
        return redirect()->route('category.home');
    }
}
