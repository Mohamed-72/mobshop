<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Ordercontrollerforadmin extends Controller
{
    public function showallorders()
   {
      // $data=Order::all();
       $processingfulorder=Order::all();
        


        // dd($sucessfulorder);
       return view('ordertrackforadmin.showallorderforadmin',["delivereddata"=>$processingfulorder]);
   }

   public function updatestatus(Request $req ,$id)
   {
         $order=Order::find($id);
         $order->update(["status"=>$req->status]);
         return redirect()->back();
   }
   public function getuserorders()
   {
       
       
        $sucessfulorders=Order::where("user_id",session()->get('LoggedUser'))->where("status","delivered")->get();
        $processedorders=Order::where("user_id",session()->get('LoggedUser'))->where("status","!=","delivered")->get();
        return view('orderlistforuser.thankyu',["data"=>$processedorders,"sucessfulorders"=>$sucessfulorders]); 
   }
   public function getsusessful()
   {
    $sucessfulorders=Order::where("user_id",session()->get('LoggedUser'))->where("status","delivered")->get();

       return view("orderlistforuser.sucessful",["sucessfulorders"=>$sucessfulorders]);
   }
}
