<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data['products'] = Product::orderby('id', 'desc')->paginate(5);
        return view('backend.product.product', $data);
    }
    public function create()
    {
        $data['categories'] = Category::all();
        return view('backend.product.createproduct', $data);
    }
    public function postcreate(Request $request)
    {
        if ($request->hasFile("img")) {
            $product = new Product();
            $file = $request->img;
            $file->move("upload/img", $file->getClientOriginalName());
            $product->product_name = $request->product_name;
            $product->categories_id = $request->category;
            $product->city_province = $request->city_province;
            $product->description = $request->description;
            $product->more_description = $request->more_description;
            $product->ownership = $request->ownership;
            $product->registration_time = $request->registration_time;
            $product->registration_deadline = $request->registration_deadline;
            $product->starting_price = $request->starting_price;
            $product->price_step = $request->price_step;
            $product->participation_costs = $request->participation_costs;
            $product->auction_deposit = $request->auction_deposit;
            $product->main_image = $request->img->getClientOriginalName();
            $product->save();
            $request->session()->flash('alert', 'Đã thêm thành công');
            return redirect()->route('product.home');

        }
    }
    public function edit(Request $request)
    {
        $data['product'] = Product::find($request->id);
        $data['categories'] = Category::all();
        return view('backend.product.editproduct',$data);
    }
    public function postedit(Request $request)
    {
        $product = Product::find($request->id);
        if ($request->hasFile("img")) {
            $file = $request->img;
            $file->move("upload/img", $file->getClientOriginalName());
            $product->main_image = $file->getClientOriginalName();
        }
        $product->product_name = $request->product_name;
        $product->categories_id = $request->category;
        $product->city_province = $request->city_province;
        $product->description = $request->description;
        $product->more_description = $request->more_description;
        $product->ownership = $request->ownership;
        $product->registration_time = $request->registration_time;
        $product->registration_deadline = $request->registration_deadline;
        $product->starting_price = $request->starting_price;
        $product->price_step = $request->price_step;
        $product->participation_costs = $request->participation_costs;
        $product->auction_deposit = $request->auction_deposit;
        $product->save();
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()->route('product.home');

    }
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        $request->session()->flash('alert', 'Đã xóa thành công');
        return redirect()->route('product.home');
    }
    public function detail(Request $request)
    {
        $data['product'] = Product::findOrFail($request->id);
        // $data['product'] = Product::find($request->id);
        // dd($data['product']->category);
        // dd($data['product']);
        return view('backend.product.productdetail', $data);
    }
    public function search(Request $request)
    {
        $data['products'] = Product::where('id','like','%'.$request->keyword.'%')->orwhere('product_name','like','%'.$request->keyword.'%')->paginate(5);
        // dd($data);
        return view('backend.product.search', $data);
    }

}
