<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategortycontroller extends Controller
{
    public function categoryshow ()
    {
      $data=Category::all();
            return view("admin.category.categorypageforadmin",["deriveddata"=>$data]);
    }
    public function create()
    {
        return view("admin.category.create");
    }
    public function store(Request $req)
    {
        
       $req->validate( [
            'name' => 'required|max:255|unique:categories,name',
            'description' => 'required|max:255',
            
        ],[
          'name.required' => 'please enter your name',
          'description.required' => 'please enter your description',

      ]);
           Category::create([
              'name'=>$req->name,
              'description'=>$req->description,
           ]);
        return redirect()->route("go_category_for_admin");
    }
    public function destroy($categoryid)
    {
       // $product = product::delete('id',$id);
       //  Category::find($categoryid)->delete();

       $category=Category::where('id',$categoryid)->first();
       $category->delete();
       //$flight->delete();
         // return Redirect::route('posts.index');
         return redirect()->route("go_category_for_admin")->with(["message"=>"category has been delete sucessfuuly"]);
    }
    public function edit($id)
    {
        $data= Category::find($id);
      return view('admin.category.categoryedit',["categoryinfo"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryid)
    {
      $request->validate( [
        'name' => 'required|max:255|unique:categories,name',
        'description' => 'required|max:255',
        
    ],[
      'name.required' => 'please enter your name',
      'description.required' => 'please enter your description',

  ]);

       $category = Category::find($categoryid);
       $category->update($request->all());
       
         return redirect()->route('go_category_for_admin')->with(["updatemessage"=>"category has been updated sucessfuly"]);
    }
    
}
