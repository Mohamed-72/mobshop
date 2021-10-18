<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopCnotrller extends Controller
{
    public function categorylist()
    {    
        $product=Product::paginate(6);
       // $populr =  Product::query()
       //// ->join('items', 'items.product_id', '=', 'products.id')
       // ->selectRaw('products.id, SUM(items.quantity) AS quantity_sold')
      //  ->groupBy(['products.id']) // should group by primary key
       // ->orderByDesc('quantity_sold')
       // ->take(1) // 20 best-selling products
      //  ->get();
       // dd($populr);
        $data=Category::all();
        $latest = Product::orderBy('created_at','desc')->take(2)->get();
        return view('shop_page.shop',["dervieddata"=>$data,"productdata"=>$product,"latest"=>$latest]);
    } 
    public function getcategoryproduct($categoryid)
    {
               $data=Category::all();
                $product=Product::where("categort_id",$categoryid)->paginate(6);
                $latest = Product::orderBy('created_at','desc')->take(2)->get();

            return view("shop_page.shop",["productdata"=>$product,"dervieddata"=>$data,"latest"=>$latest]);
    }
   public function serach(request $req)
   {
      $product= Product::where("name","like","%$req->search%")->paginate(6);    
      $data=Category::all();
      $latest = Product::orderBy('created_at','desc')->take(2)->get();

      return view("shop_page.shop",["productdata"=>$product,"dervieddata"=>$data,"latest"=>$latest]);
   }
    
   public function showproduct($id)
   {
         $product = Product::find($id);
         return view("shop.productdetails",["productdetails"=>$product]);
   }
   public function filter(Request $req)
   {
       $product=Product::whereBetween('price',[$req->start_price,$req->end_price])->paginate(15);
       $data=Category::all();
       $latest = Product::orderBy('created_at','desc')->take(2)->get();


      return view("shop_page.shop",["productdata"=>$product,"dervieddata"=>$data,"latest"=>$latest]);
   }

   
}
