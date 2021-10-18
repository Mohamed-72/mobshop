<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;


class IndexController extends Controller
{

   
  public function showpage ()
  {
    $latestproducts = Product::orderBy('id','desc')->take(5)->get();
    
    $imgSlider = Slider::all();
    // dd($imgSlider);

      $product=Product::where("quantity",'<=',2)->get();
    // dd($product);
      $data=Category::all();
      // dd($data);
      return view("index",['productsale'=>$product,'categories'=>$data,'latests'=>$latestproducts,'imageSlider'=>$imgSlider]);
   
   
  }


public function showproducts ($catid)
{
    $productcat=Product::where("categort_id",$catid)->get();
 
        return view("showproducts",['productcat' => $productcat]);
}



   
  //  public function latestproduct()
  //   {
  //       $latestproducts = Product::orderBy('id','desc')->take(5)->get();
  //       //  dd($latestproducts);
  //       $imgSlider = Slider::all();
  //       // dd($imgSlider);
  //       return view('index', ['latests'=>$latestproducts], ['imageSlider'=>$imgSlider]);
  //   }



}
