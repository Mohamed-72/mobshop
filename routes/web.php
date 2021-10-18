<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AdminCategortycontroller;
use App\Http\Controllers\admin\AdminProductnController;
use App\Http\Controllers\admin\Ordercontrollerforadmin;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\admin\Usercontroller;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\SetLocal;



use App\Http\Controllers\shop\ShopCnotrller;
use App\Models\Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexDetailsController;
use App\Http\Controllers\MarqueeController;
use App\Http\Controllers\orders\Orderscontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Auth\Notifications\ResetPassword;
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
Route::group(['prefix' => '{local}'] ,function() {

    
//     Route::group(['middleware'=>['SetLocal']], function(){

//          Route::get('/', function () {
//                return view('layout.layout');
//          });
// });
});
        //  Route::get('/', function () {
        //       return view('layout.layout');
        // });




Route::get('contact-us/contact', [CommentController::class, 'index'])->name('comment.index');
Route::get('contact-us/contact/create', [CommentController::class, 'create'])->name('comment.create');
Route::post('contact/store', [CommentController::class, 'store'])->name('comment.store');
Route::get("/deletee/{comentid}",[CommentController::class,"destrooy"])->name("deletecoment");


// Route::get("/create",[AdminProductnController::class,"create"])->name("productcreate");
// Route::get("/delete/{productid}",[AdminProductnController::class,"destroy"])->name("admindeleteproduct");
// //Route::get("/index",[AdminProductnController::class,"index"])->name("productlist");
// Route::post("/store",[AdminProductnController::class,"store"])->name("productstore");
// Route::get("/adminshow",[AdminProductnController::class,"showtableproducts"])->name("adminproductlist");
// Route::get("/gotoadmindashboard",[AdminProductnController::class,"gotoadmin"])->name("gotoadmin");
// Route::get("/edit/{productid}",[AdminProductnController::class,"edit"])->name("editproduct");
// Route::post("/update/{productid}",[AdminProductnController::class,"update"])->name("updateproduct");






//crud opertion for the categoryies
// Route::get("/categorypageforadmin",[AdminCategortycontroller::class,"categoryshow"])->name("go_category_for_admin");
// Route::get("/createcategory",[AdminCategortycontroller::class,"create"])->name("categorycreate");
// Route::post("/storecategory",[AdminCategortycontroller::class,"store"])->name("categorystore");
// Route::get("categotory /delete/{categoryid}",[AdminCategortycontroller::class,"destroy"])->name("admindeletecategory");
// Route::get("categotory /edit/{categoryid}",[AdminCategortycontroller::class,"edit"])->name("admineditcategry");
// Route::post("categotory /update/{categoryid}",[AdminCategortycontroller::class,"update"])->name("adminupdatecategory");


//////

Route::get('/shop', [ProductController::class, 'productList'])->name('products.list');
// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


// About Us

Route::get('/aboutus', [AboutController::class, 'aboutus'])->name('about_us.about');

// Details Page

Route::get('/details/{detail}', [DetailsController::class, 'Details'])->name('details_page.details');

////shoplist
Route::get("shopcategorylist",[ShopCnotrller::class,"categorylist"])->name("shopproduct");
Route::get("categoryproducts/{categoryid}",[ShopCnotrller::class,"getcategoryproduct"])->name("categoryprodcuts");
Route::post("serachcategory",[ShopCnotrller::class,"serach"])->name("searchproducts");
//Route::get("productdetails/{productid}",[ShopCnotrller::class,"showproduct"])->name("productdetails");
Route::post("serachcategory",[ShopCnotrller::class,"serach"])->name("searchproducts");
Route::post("filterprice",[ShopCnotrller::class,"filter"])->name("filterprice");




// Index Page

Route::get('/', [IndexController::class, 'showpage'])->name('latestproduct');

// Route::get('/', [IndexController::class, 'latestproduct'])->name('latestproduct');

Route::get('/detail/{id}', [IndexDetailsController::class, 'detail'])->name('indexdetails');

Route::get('/showproducts/{catid}', [IndexController::class, 'showproducts'])->name('showproduct');


// Slider Page

Route::get('/slider', [SliderController::class, 'show'])->name('add_slider');

Route::post('/storee', [SliderController::class,'store'])->name('sliderstore');

Route::get('/slidertable/details', [SliderController::class, 'sliderindexx'])->name('sliderindex');

Route::get('/deleteimg/{imgid}', [SliderController::class, 'destrooy'])->name('deleteimg');


// Marquee

Route::get('/marquee', [MarqueeController::class, 'show'])->name('add_marquee');

Route::post('/stoore', [MarqueeController::class, 'store'])->name('marqueestore');

Route::get('/marqueetable/details', [MarqueeController::class, 'marqueeindex'])->name('marqueeindex');

Route::get('/deletecomment/{commentid}', [MarqueeController::class, 'destroy'])->name('deletecomment');
///ckeckout

Route::get("orderpage",[Orderscontroller::class,"orderpage"])->name("orderpage");
Route::post("makeorder",[Orderscontroller::class,"storeorderitems"])->name("makeorder");

////thankyou
// Route::get("trackorderforuser",[Ordercontrollerforadmin::class,"getuserorders"])->name("trackordersforuser");
// Route::get("orderslistforadmin",[Ordercontrollerforadmin::class,"showallorders"])->name("showordersforadmin");
// Route::post("updatestatus/{orderid}",[Ordercontrollerforadmin::class,"updatestatus"])->name("updatestatus");

///admin delete user 

Route::get("showusersforadmin",[Usercontroller::class,"showalluserforadmin"])->name("showalluserforadmin");
Route::get('admindeleteuser/{userid}',[Usercontroller::class,"admindeleteuser"])->name("admindeleteuser");
Route::get('adminupdateeuser/{userid}',[Usercontroller::class,"adminupdateuser"])->name("adminupdateuser");
Route::post('/updateuser/{userid}',[UserController::class,"updateuser"])->name("updateuser");





Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

    Route::get("/create",[AdminProductnController::class,"create"])->name("productcreate");
Route::get("/delete/{productid}",[AdminProductnController::class,"destroy"])->name("admindeleteproduct");
//Route::get("/index",[AdminProductnController::class,"index"])->name("productlist");
Route::post("/store",[AdminProductnController::class,"store"])->name("productstore");
Route::get("/adminshow",[AdminProductnController::class,"showtableproducts"])->name("adminproductlist");
Route::get("/gotoadmindashboard",[AdminProductnController::class,"gotoadmin"])->name("gotoadmin");
Route::get('/addSale',[AdminProductnController::class,"addSale"]);
Route::get("/edit/{productid}",[AdminProductnController::class,"edit"])->name("editproduct");
Route::post("/update/{productid}",[AdminProductnController::class,"update"])->name("updateproduct");

Route::get("/categorypageforadmin",[AdminCategortycontroller::class,"categoryshow"])->name("go_category_for_admin");
Route::get("/createcategory",[AdminCategortycontroller::class,"create"])->name("categorycreate");
Route::post("/storecategory",[AdminCategortycontroller::class,"store"])->name("categorystore");
Route::get("categotory /delete/{categoryid}",[AdminCategortycontroller::class,"destroy"])->name("admindeletecategory");
Route::get("categotory /edit/{categoryid}",[AdminCategortycontroller::class,"edit"])->name("admineditcategry");
Route::post("categotory /update/{categoryid}",[AdminCategortycontroller::class,"update"])->name("adminupdatecategory");

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get("trackorderforuser",[Ordercontrollerforadmin::class,"getuserorders"])->name("trackordersforuser");
Route::get("orderslistforadmin",[Ordercontrollerforadmin::class,"showallorders"])->name("showordersforadmin");
Route::post("updatestatus/{orderid}",[Ordercontrollerforadmin::class,"updatestatus"])->name("updatestatus");
Route::get("sucessfulorderes",[Ordercontrollerforadmin::class,"getsusessful"])->name("getsucessfuloreders");



   

  
    // Route::get('/admin/settings',[MainController::class,'settings']);
    // Route::get('/admin/profile',[MainController::class,'profile']);
    // Route::get('/admin/staff',[MainController::class,'staff']);
});


