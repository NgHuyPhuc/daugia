<?php

namespace App\Http\Controllers\Site\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Law;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getCategory(Request $request)
    {
        $slug = $request->slug;
        $data['allcategory'] = Category::all();
        $data["categories"] = Category::where('slug','=',$slug)->first();
        $data["allproduct"] = Category::where('slug',$slug)
                                    ->first()
                                    ->product()
                                    ->orderby('id','desc')
                                    ->paginate(6);
        $data['laws'] = Law::orderby('id', 'desc')->get()->take(8)->chunk(4);
        
        // dd($data["product"]);
        // dd($data["categories"]);

        // dd($data['allcategory']);
        return view('frontend.product.category',$data);
    }
}
