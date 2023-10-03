<?php

use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auction\AuctionRoomController;
use App\Http\Controllers\Admin\Auction\AuctionRoomFinal;
use App\Http\Controllers\Admin\Auction\DetailAutionRoomController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Law\LawController;
use App\Http\Controllers\Admin\Notify\NotifyController;
use App\Http\Controllers\Admin\Payment\PaymentController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserAdminController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Site\AuctionRoom\AuctionRoomController as AuctionRoomAuctionRoomController;
use App\Http\Controllers\Site\Auth\LoginController;
use App\Http\Controllers\Site\Payment\PaymentController as PaymentPaymentController;
use App\Http\Controllers\Site\SiteController\SiteController;
use App\Http\Controllers\Site\UserSite\UserSiteController;
use App\Models\DetailAuctionRoom;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//admin
Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('admin.login')->middleware('checkadmin');
Route::post('/admin/login', [AuthController::class, 'postlogin'])->name('admin.postlogin');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::prefix('admin')->middleware('auth:webadmin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('/product')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.home');
        Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
        Route::get('/search', [ProductController::class, 'search'])->name('product.search');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/postcreate', [ProductController::class, 'postcreate'])->name('product.postcreate');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/postedit/{id}', [ProductController::class, 'postedit'])->name('product.postedit');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    });
    Route::prefix('/category')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.home');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/postcreate', [CategoryController::class, 'postcreate'])->name('category.postcreate');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/postedit/{id}', [CategoryController::class, 'postedit'])->name('category.postedit');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    });
    Route::prefix('/notify')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [NotifyController::class, 'index'])->name('notify.home');
        Route::get('/create', [NotifyController::class, 'create'])->name('notify.create');
        Route::post('/postcreate', [NotifyController::class, 'postcreate'])->name('notify.postcreate');
        Route::get('/edit/{id}', [NotifyController::class, 'edit'])->name('notify.edit');
        Route::post('/postedit/{id}', [NotifyController::class, 'postedit'])->name('notify.postedit');
        Route::get('/delete/{id}', [NotifyController::class, 'delete'])->name('notify.delete');
    });
    Route::prefix('/law')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [LawController::class, 'index'])->name('law.home');
        Route::get('/create', [LawController::class, 'create'])->name('law.create');
        Route::post('/postcreate', [LawController::class, 'postcreate'])->name('law.postcreate');
        Route::get('/edit/{id}', [LawController::class, 'edit'])->name('law.edit');
        Route::post('/postedit/{id}', [LawController::class, 'postedit'])->name('law.postedit');
        Route::get('/delete/{id}', [LawController::class, 'delete'])->name('law.delete');
    });
    Route::prefix('/user')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('useradminsite.home');
        Route::get('/detail/{id}', [UserController::class, 'detail'])->name('useradminsite.detail');
        Route::get('/search', [UserController::class, 'search'])->name('useradminsite.search');
        Route::get('/create', [UserController::class, 'create'])->name('useradminsite.create');
        Route::post('/postcreate', [UserController::class, 'postcreate'])->name('useradminsite.postcreate');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('useradminsite.edit');
        Route::post('/postedit/{id}', [UserController::class, 'postedit'])->name('useradminsite.postedit');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('useradminsite.delete');
    });
    Route::prefix('/useradmin')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [UserAdminController::class, 'index'])->name('useradmin.home');

        Route::get('/create', [UserAdminController::class, 'create'])->name('useradmin.create');
        Route::post('/postcreate', [UserAdminController::class, 'postcreate'])->name('useradmin.postcreate');
        Route::get('/edit/{id}', [UserAdminController::class, 'edit'])->name('useradmin.edit');
        Route::post('/postedit/{id}', [UserAdminController::class, 'postedit'])->name('useradmin.postedit');
        Route::get('/delete/{id}', [UserAdminController::class, 'delete'])->name('useradmin.delete');
    });
    Route::prefix('/auctionroom')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [AuctionRoomController::class, 'index'])->name('auctionroom.home');
        Route::get('/create', [AuctionRoomController::class, 'create'])->name('auctionroom.create');
        Route::post('/postcreate', [AuctionRoomController::class, 'postcreate'])->name('auctionroom.postcreate');
        Route::get('/edit/{id}', [AuctionRoomController::class, 'edit'])->name('auctionroom.edit');
        Route::post('/postedit/{id}', [AuctionRoomController::class, 'postedit'])->name('auctionroom.postedit');
        Route::get('/delete/{id}', [AuctionRoomController::class, 'delete'])->name('auctionroom.delete');
    });
    Route::prefix('/detailauctionroom')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [DetailAutionRoomController::class, 'index'])->name('detailauctionroom.home');
        Route::get('/search', [DetailAutionRoomController::class, 'search'])->name('detailauctionroom.search');
        Route::get('/create', [DetailAutionRoomController::class, 'create'])->name('detailauctionroom.create');
        Route::post('/postcreate', [DetailAutionRoomController::class, 'postcreate'])->name('detailauctionroom.postcreate');
        Route::get('/edit/{id}', [DetailAutionRoomController::class, 'edit'])->name('detailauctionroom.edit');
        Route::post('/postedit/{id}', [DetailAutionRoomController::class, 'postedit'])->name('detailauctionroom.postedit');
        Route::get('/delete/{id}', [DetailAutionRoomController::class, 'delete'])->name('detailauctionroom.delete');
    });
    Route::prefix('/auctionroomfinal')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [AuctionRoomFinal::class, 'index'])->name('auctionroomfinal.home');
    });
    Route::prefix('/about')->middleware('auth:webadmin')->group(function () {
        Route::post('/uploads-ckeditor', [AboutController::class, 'ckeditor_image']);
        Route::get('/file-browser', [AboutController::class, 'file_browser']);
        Route::get('/', [AboutController::class, 'index'])->name('about.home');
        Route::get('/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/postcreate', [AboutController::class, 'postcreate'])->name('about.postcreate');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('/postedit/{id}', [AboutController::class, 'postedit'])->name('about.postedit');
        Route::get('/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
    });
    Route::prefix('/payment')->middleware('auth:webadmin')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('payment.home');
        Route::get('/search', [PaymentController::class, 'search'])->name('payment.search');
        Route::get('/create', [PaymentController::class, 'create'])->name('payment.create');
        Route::post('/postcreate', [PaymentController::class, 'postcreate'])->name('payment.postcreate');
        Route::get('/edit/{id}', [PaymentController::class, 'edit'])->name('payment.edit');
        Route::post('/postedit/{id}', [PaymentController::class, 'postedit'])->name('payment.postedit');
        Route::get('/delete/{id}', [PaymentController::class, 'delete'])->name('payment.delete');
    });
    Route::get('/get-product-name/{id}', [AuctionRoomController::class, 'getProductName']);
    Route::get('/get-dgv-name/{id}', [AuctionRoomController::class, 'getDgvName']);

});
//end admin

//site
Route::get('/login', [LoginController::class, 'login'])->name('user.login')->middleware('checkuser');
Route::post('/login', [LoginController::class, 'postlogin'])->name('user.postlogin')->middleware('checkuser');
Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');


Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::prefix('product')->group(function () {
    Route::get('/', [SiteController::class, 'products'])->name('productsite.home');
    Route::get('/search', [SiteController::class, 'search'])->name('productsite.search');
    Route::get('/detail/{id}', [SiteController::class, 'detail'])->name('productsite.detail');
});
Route::post('/payment', [PaymentPaymentController::class, 'payment'])->name('paymentsite.post');
Route::get('/register', [SiteController::class, 'register'])->name('user.register')->middleware('checkuser');
Route::get('/about', [SiteController::class, 'about'])->name('user.about');

// Route::get('/listroom', [AuctionRoomAuctionRoomController::class, 'room'])->name('user.listroom');
Route::prefix('room')->group(function () {
    Route::get('/', [AuctionRoomAuctionRoomController::class, 'listroom'])->name('user.listroom');
    Route::get('/auction/{id}', [AuctionRoomAuctionRoomController::class, 'autionroom'])->name('user.autionroom')->middleware('auth:web')->middleware('checkroom');
    Route::get('/auctiondata/{id}', [AuctionRoomAuctionRoomController::class, 'getRealTimeData'])->name('user.autionroom.getRealTimeData')->middleware('auth:web')->middleware('checkroom');
    Route::post('/postauction/{id}',[AuctionRoomAuctionRoomController::class, 'postautionroom'])->name('user.postautionroom')->middleware('auth:web')->middleware('checkroom');
});
// Route::get('/listroom', [SiteController::class, 'room'])->name('user.room')->middleware('auth:web');
// Route::get('/listroom', [AuctionRoomController, 'room'])->name('user.room');

Route::prefix('/profile')->middleware('auth:web')->group(function () {
    Route::get('/', [UserSiteController::class, 'profile'])->name('user.profile')->middleware('auth:web');
    Route::post('/', [UserSiteController::class, 'postprofile'])->name('user.postprofile')->middleware('auth:web');
    Route::get('/changepass', [UserSiteController::class, 'profilechangepass'])->name('user.profilechangepass')->middleware('auth:web');
    Route::post('/changepass', [UserSiteController::class, 'postprofilechangepass'])->name('user.postprofilechangepass')->middleware('auth:web');
});


//end site