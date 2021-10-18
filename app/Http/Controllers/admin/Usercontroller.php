<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
public function showalluserforadmin()
{
    $data=User::all();
    return view('admin.user.showalluserforaadmin',["data"=>$data]);
}
public function admindeleteuser($id)
{
    User::find($id)->delete();
    return redirect()->back();
}

public function adminupdateuser($id)
{
    $data= User::find($id);
    
 return view("admin.user.edit",["userinfo"=>$data]);
}


public function updateuser(Request $request, $id)
{
    $user = User::find($id);
     $user->update($request->all());
     return redirect()->route('showalluserforadmin');
}

}
