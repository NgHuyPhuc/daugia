<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MoreImageProduct;
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

            if($request->file('img_multi') != null)
            {
                $files = $request->file('img_multi');
                foreach($files as $image){
                    $image->move("upload/img", $image->getClientOriginalName());
                    $detail_img = new MoreImageProduct();
                    $detail_img->id_product = $product->id;
                    $detail_img->state = 1;
                    $detail_img->img = $image->getClientOriginalName();
                    $detail_img->save();
                }
            }
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
        // $files = $request->file('img_multi');
        // dd($files);

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

        // dd($request->has('img-multi[]'));
        // dd($request->file('img_multi'));
        if($request->file('img_multi') != null)
        {
            $clear_img = MoreImageProduct::where('id_product','=',$request->id)->get();
            // dd($clear_img->count());
            // dd($clear_img);
            if($clear_img->count()>0){
                foreach($clear_img as $value){
                    $value->state = 0;
                    $value->save();
                }
            }
            $files = $request->file('img_multi');
            // dd(count($files));
            foreach($files as $image){
                $image->move("upload/img", $image->getClientOriginalName());
                $detail_img = new MoreImageProduct();
                $detail_img->id_product = $request->id;
                $detail_img->state = 1;
                $detail_img->img = $image->getClientOriginalName();
                $detail_img->save();
            }
        }

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
