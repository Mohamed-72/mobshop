{{-- 
@extends('layout.layout');
@section('content') --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
 
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="wrap-logo-top center" style="">

         <a href="{{route('shopproduct')}}" style="margin-left: 40% "  class="link-to-home my-5"><img src="{{ asset('images/logo.PNG') }}" alt="mercado" width="20%"></a>

      </div>
    <div class="wrap-breadcrumb">
        <ul>
            {{-- <li class="item-link"><a href="" class="link">home</a></li> --}}
            {{-- <li class="item-link"><span>login</span></li> --}}
        {{-- </ul>
    </div>
      <div class="col-md-4 col-md-offset-4">
           
			
           <form action="{{ route('auth.check') }}" method="post" class="border">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button style="background-color: #FF2832;color:white" type="submit" class="btn btn-block  ">Sign In</button>
              <br>
              
              <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
           </form>
      </div>
   </div> --}}
{{-- </div>
    
</body>
</html --}} 

   

    {{-- @endsection --}}

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
      <form action="{{ route('auth.check') }}" method="post"  >
         @if(Session::get('fail'))
            <div class="alert alert-danger">
               {{ Session::get('fail') }}
            </div>
         @endif

        @csrf
        @if($errors->any())
        <h4 style="color:red">{{$errors->first()}}</h4>
        <h6>Visit <a href="{{route('comment.create')}}">contact us</a> to know why you blocked</h6>
        @endif
          <div class="avatar my-5">
           
             <img src="{{ asset('images/Capture.PNG') }}" alt="mercado" width="40%">
          </div>           
            <div class="form-group">
               <label>Email</label>
               <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>        
            <div class="form-group">
              
                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Sign in</button>
            </div>
          <p class="hint-text">Don't have an account? <a href="{{ route('auth.register') }}">Sign up here</a></p>
        </form>
        
    </div>
    </body>
    </html>