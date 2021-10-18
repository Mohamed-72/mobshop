<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
{ 

    public function Details($id){

        $data = Product::find($id);
        // dd($data);
        return view('details_page.details', ['Product'=>$data]);
    }

}