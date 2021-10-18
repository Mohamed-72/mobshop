<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexDetailsController extends Controller
{
    public function detail($id){

        $data = Product::find($id);
        // dd($data);
        return view('indexdetails', ['Product'=>$data]);
    }
}
