{{-- 
@extends('layout.layout');

@section('content')
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form class="form-stl" action="{{ route('auth.save') }}" name="frm-login" method="POST" >
                                @if(Session::get('success'))
                                <div class="alert alert-success">
                                   {{ Session::get('success') }}
                                </div>
                              @endif
                   
                              @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                   {{ Session::get('fail') }}
                                </div>
                              @endif
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">Name*</label>
                                   
                                    <input type="text" class="" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                                  <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                </fieldset>
                              
                                <fieldset class="wrap-input ">
                                    <label for="frm-reg-phone">Phone *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Enter phone number">
                                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Login Information</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password *</label>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Password" >
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass">Confirm Password *</label>
                                    <input type="password" class="form-control" id="password" name="password_confirmation" required placeholder="Confirm Password">
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </fieldset>
                             
                                <input type="submit" class="btn btn-sign" value="Register" name="register">

                                <br> <br>
                                <a href="{{ route('auth.login') }}">I already have an account, sign in</a>

                            </form>
                        </div>											
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Sign in Form with Avatar Icon</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="  {{ asset('/css/css1.css') }}">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 

</head>
<body>
<div class="login-form my-5">
    <form class="form-stl" action="{{ route('auth.save') }}" name="frm-login" method="POST" >
        @if(Session::get('success'))
        <div class="alert alert-success">
           {{ Session::get('success') }}
        </div>
      @endif

      @if(Session::get('fail'))
        <div class="alert alert-danger">
           {{ Session::get('fail') }}
        </div>
      @endif
        @csrf
      <div class="avatar my-5">
       
         <img src="{{ asset('images/Capture.PNG') }}" alt="mercado" width="40%">
      </div>
   
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
      <span class="text-danger">@error('name'){{ $message }} @enderror</span> 
     
     </div>        

        <div class="form-group">
           <label>Email</label>
           <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
             <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        </div>

        <fieldset class="wrap-input ">
            <label for="frm-reg-phone">Phone *</label>
            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Enter phone number">
            <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
        </fieldset>


      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password">
        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
        </div>
        <fieldset class="wrap-input item-width-in-half ">
            <label for="frm-reg-cfpass">Confirm Password *</label>
            <input type="password" class="form-control" id="password" name="password_confirmation" required placeholder="Confirm Password">
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
        </fieldset>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Sign in</button>
        </div>
      <p class="hint-text">I already have an account <a href="{{ route('auth.login') }}">Sign in </a></p>
    </form>
    
</div>
</body>
</html>