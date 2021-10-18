<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

use App\Providers\RouteServiceProvider;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

   


    function register(){
        return view('auth.register');
    }


    function save(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required||min:3|max:25',
            'email'=>'required|email|unique:users',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'password' => 'required| min:4| max:20 |confirmed',
              'password_confirmation' => 'required| min:4'
        ]);

        //  Insert data into database
         $users = new User;
         $users->name = $request->name;
         $users->email = $request->email;
         $users->password = Hash::make($request->password);
         $users->phone = $request->phone;
         $save = $users->save();

         if($save){
            // return Redirect::to('auth/login')->with('message', 'Login success ');
            $userInfo = User::where('email', $request->email)->first();
        $userType = User::where('is_admin', 0)->first();
        $adminType = User::where('is_admin', 1)->first();


        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                $request->session()->put('Username', $userInfo->name);
                $request->session()->put('UserType', $userInfo->is_admin);
                 if($userInfo->is_admin ==1 )
                 {return redirect('/orderslistforadmin');}
                 else{return redirect('/'); }
                // return $userInfo->is_admin ;

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }




    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = User::where('email', $request->email)->first();
        $userType = User::where('is_admin', 0)->first();
        $adminType = User::where('is_admin', 1)->first();


        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                $request->session()->put('Username', $userInfo->name);
                $request->session()->put('UserType', $userInfo->is_admin);
                 if($userInfo->status ==1 )
                 if($userInfo->is_admin ==1 )
                 {return redirect('/orderslistforadmin');}
                 else{return redirect('/'); }
                
                 else{ 
                      session()->pull('LoggedUser');
                    //   return redirect('contact-us/contact/create')->withInput('<input >');
                      return Redirect::back()->withErrors(['You are Blocked From Login']);
                
                }

                

                // return $userInfo->is_admin ;

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
     }
    function logout(){
         if(session()->has('LoggedUser')){
             session()->pull('LoggedUser');
            return redirect('/');
        }
        
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('admindashbord', $data);
    }

    function settings(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }

    function profile(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    function staff(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('admin.staff', $data);
    }


     
  }


