<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function index()
    {
        
        $comment = Contact::paginate(2);

        // dd($comment);
        return view('admin/comment/index',["commentCollection"=>$comment]);
    }


    public function show(Contact $comment)
    {
      return view('show',compact('comment'));
    }



    public function create()

    
    {
        //$users= User::all();
        return view('contact-us/create');
       
    }

    public function store(Request $requestObj)
    {
        $requestData=$requestObj->all();

        $requestObj->validate([
                'name' => 'required|min:3' ,
                'email' => 'required |email |unique:contacts',
                'phone' => 'required',
                'comment' => 'required',
                
            ],[
                'name.required' => 'please enter your name',
                'name.min' => 'this field must be greater than 3 letters',
                'email.unique'=>"this email already existed",
            ]);


       $comment= Contact::create([
            'name' =>$requestObj->name,
            'email' =>$requestObj->email,
            'phone'=>$requestObj->phone,
            'comment'=>$requestObj->comment,
            //'user_id'=> $requestObj->post_creator
        ]);
       // dd($requestData);

        return redirect()->route('comment.create');
   
       
    }

    public function destrooy($comentid)
    {
      Contact::find($comentid)->delete();
       
         return redirect()->route('comment.index')->with(["message"=>"comment has been deleted sucessfuly"]);
    }
}
