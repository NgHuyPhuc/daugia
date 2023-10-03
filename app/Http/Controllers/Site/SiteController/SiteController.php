<?php

namespace App\Http\Controllers\Site\SiteController;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Law;
use App\Models\Notify;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class SiteController extends Controller
{
    //
    public function index()
    {
        // dd(Auth::guard('webadmin')->check());
        $data['categories'] = Category::all();
        $data['notifiesTop'] = Notify::orderby('id', 'desc')->get()->take(12);
        $notifybot = Notify::orderby('id', 'desc')->get()->take(18);
        $chunks = $notifybot->chunk(3);
        foreach ($chunks as $key => $chunk) {
            $data['chunks'][$key] = $chunk;
        }
        $data['products'] = Product::orderby('id', 'desc')->get()->take(9);
        $data['laws'] = Law::orderby('id', 'desc')->get()->take(8)->chunk(4);
        // dd($data);
        return view('frontend.index', $data);
    }

    public function products()
    {
        $data['products'] = Product::orderby('id', 'desc')->paginate(3);
        return view('frontend.product.product',$data);
    }
    public function detail(Request $request)
    {
        $data['product'] = Product::findOrFail($request->id);
        $data['check'] = null;
        // dd(Auth::guard('web')->check());
        if(Auth::guard('web')->check()){
            $data['check'] = Payment::where('id_product', $request->id)->where('id_user', Auth::user()->id)->first();
        }
        // dd($data['check']->isEmpty());
        return view('frontend.product.detail',$data);
    }
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        // $data['payments'] = Payment::whereHas('product', function ($query) use ($searchTerm) {
        //     $query->where('product_name', 'like', '%' . $searchTerm . '%');
        // });
        $data['products'] = Product::where('product_name','like','%'.$request->keyword.'%')
        ->orwhereHas('category', function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword. '%');
        })->paginate(9);
        return view('frontend.product.search',$data);;
    }
    public function about()
    {
        $data['about'] = About::orderby('id','desc')->first();
        // $data['about'] = About::get()->toarray();
        // $data['about'] = About::all();
        // dd($data);
        return view('frontend.about.about', $data);
    }
}
