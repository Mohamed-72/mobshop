<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class AdminProductnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view("admin.product.create",["dervied"=>$data]);
    }
    public function showtableproducts()
    {
        $data=Product::all();
        return view('admin.product.producttable',["productsdata"=>$data]);
       // return view('admin.product.producttable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
       $req->validate( [
            'name' => 'required|max:255|unique:products,name',
            'details' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $file_exsetention=$req->image->getClientOriginalExtension();
        $filename=time() . "." . $file_exsetention;
        $path='images/products';
        $req->image->move($path,$filename);
       
           Product::create([
              'name'=>$req->name,
              'details'=>$req->details,
              'description'=>$req->description,
              'quantity'=>$req->quantity,
              'price'=>$req->price,
              'image'=>$filename,
              'categort_id'=>$req->categort_id
           ]);
        return redirect()->route("adminproductlist");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Product::find($id);
      return view("admin.product.show",['specificproduvt'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Product::find($id);
      return view("admin.product.edit",["productinfo"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
         $product->update($request->all());
         return redirect()->route('adminproductlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productid)
    {
      Product::find($productid)->delete();
       
         return redirect()->route('adminproductlist')->with(["message"=>"product has been deleted sucessfuuly"]);
    }
    public function gotoadmin()
    {
        return view("admin.admindashbord");
    }
    public function addSale(Request $request){
       
        $salePrice = $request->salePrice;
        $pro_id = $request->pro_id;
       
        DB::table('products')->where('id', $pro_id)->update(['spl_price' =>  $salePrice]);
        echo 'added successfully';
    }
}
