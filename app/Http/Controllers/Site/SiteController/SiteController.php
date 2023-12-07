<?php

namespace App\Http\Controllers\Site\SiteController;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AuctionRoom;
use App\Models\Category;
use App\Models\Law;
use App\Models\MoreImageProduct;
use App\Models\Notify;
use App\Models\Payment;
use App\Models\Product;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use function PHPUnit\Framework\isEmpty;

class SiteController extends Controller
{
    //
    public function index()
    {
        $data['categories'] = Category::all();
        $data['notifiesTop'] = Notify::orderby('id', 'desc')->get()->take(12);
        $notifybot = Notify::orderby('id', 'desc')->get()->take(18);
        $chunks = $notifybot->chunk(3);
        foreach ($chunks as $key => $chunk) {
            $data['chunks'][$key] = $chunk;
        }
        $data['products'] = Product::orderby('id', 'desc')->get()->take(9);
        $data['laws'] = Law::orderby('id', 'desc')->get()->take(8)->chunk(4);
        return view('frontend.index', $data);
    }

    public function products()
    {
        $data['products'] = Product::orderby('id', 'desc')->paginate(6);
        return view('frontend.product.product',$data);
    }
    public function detail(Request $request)
    {
        $data['product'] = Product::findOrFail($request->id);
        $data['listpayment'] = Payment::where('id_product',$request->id)->where('state','!=',2)->paginate(5);
        $data['check'] = null;
        $data['auctionroom'] = AuctionRoom::where('id_product', $request->id)->first();
        $data['check_wishlist'] = false;
        $data['more_img'] = MoreImageProduct::where('id_product', $request->id)->where('state',1)->get();
        if(Auth::check())
        {
            $checkwishlist = WishList::where('id_user',Auth::user()->id)->where('id_product', $request->id)->count();
            if($checkwishlist > 0){
                $data['check_wishlist'] = true;
            }
        }
        if(Auth::guard('web')->check()){
            $data['check'] = Payment::where('id_product', $request->id)->where('id_user', Auth::user()->id)->first();
        }
        return view('frontend.product.detail',$data);
    }
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $data['products'] = Product::where('product_name','like','%'.$request->keyword.'%')
        ->orwhereHas('category', function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword. '%');
        })->paginate(9);
        return view('frontend.product.search',$data);;
    }
    public function about()
    {
        $data['about'] = About::orderby('id','desc')->first();
        return view('frontend.about.about', $data);
    }
    public function mail(Request $request)
    {
        $name = 'Nguyen Van A';
        Mail::send('email.test',compact('name'), function($email) use ($name) {
            $email->subject('demo mail new');
            $email->to('sumasa05@gmail.com', $name);
        });
    }
}
