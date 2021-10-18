<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Prophecy\Prophecy\Revealer;

class Cart extends Controller
{
    public function cartshow()
    {   
      $collection= \Cart::getContent();
     // dd($collection);
        return view("cart.cartshow",["dervied"=>$collection]);
    }

    public function addtocard($id)
    {
     $Product=Product::find($id);
     $rowid=$Product->id;
     $qantity=1;
     foreach(\Cart::getContent() as $index =>$val)
     {
          if($val['id']==$Product->id)
          {
            return redirect()->back();
          }
     }
     
     \Cart::add($rowid, $Product->name,$Product->price, $qantity, array());
          return redirect()->back()->with("productdetails")->with("message","item has been added sucessfuly to cart ");
    } 


    public function updatecart($rowid,Request $req)
    {
     
     if($req->get("action")=="increase")
     {
       $qant=$req->quantity;
       //$increase=\Cart::get($rowid)->quantity;

       \Cart::update($req->rowvalue,["quantity"=>$qant]);
      // dd($req->all());

       return redirect()->back();
     }
     elseif($req->get("action")=="decrese")
     
     {
      $increase=\Cart::get($rowid)->quantity-1;
      
      return redirect()->back();
     }
     else
     {
      return redirect()->back();
     }
     
      
     // dd(\Cart::getContent());
      return redirect()->route("cartpage");
      
    }
    
    public function removeitem($itemid)
    {
     // dd($text);
         //  dd(\Cart::getContent()->name);


    // dd(\Cart::getSubTotal());
    //dd( \Cart::get($itemid)->quantity);
          \Cart::remove($itemid);
        
            return redirect()->route("cartpage");
    }
   
}
