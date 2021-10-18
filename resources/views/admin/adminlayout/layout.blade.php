<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="  {{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="  {{ asset('/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="  {{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/color-01.css') }}">
    
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" >
      {{-- <a class="navbar-brand" href="{{route('gotoadmin')}}">Admin Dashboard</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent ">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  " >
     
            <li  class="nav-item">
              <a href="/" class="nav-link active fs-3 mx-4" ><i class="fa fa-home"  aria-hidden="true"></i></a>
            </li>
        

          <li class="nav-item">
            <a class="nav-link active fs-3 mx-4" aria-current="page" href="{{route('showordersforadmin')}}">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-3 mx-4" aria-current="page" href="{{route('showalluserforadmin')}}">Users</a>
          </li>
  
          <li class="nav-item ">
            <a class="nav-link active fs-3 mx-4" aria-current="page" href="{{route('comment.index')}}">complaints</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-3 mx-4" href="{{route('adminproductlist')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Proudcts
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('adminproductlist')}}">Proudcts</a></li>
              <li><a class="dropdown-item" href="{{route('productcreate')}}">Add proudcts</a></li>
   
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-3 mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Catogries
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('go_category_for_admin')}}">Categories</a></li>
              <li><a class="dropdown-item" href="{{route('categorycreate')}}">Add category</a></li>
            
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-3 mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Slider
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('sliderindex')}}"> Slider_list</a></li>
              <li><a class="dropdown-item" href="{{route('add_slider')}}">Add  Slider</a></li>
            
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-3 mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Marquee
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('marqueeindex')}}">Marquee_list</a></li>
              <li><a class="dropdown-item" href="{{route('add_marquee')}}">Add Marquee</a></li>
            
            </ul>
          </li>

        
       

          <li class="nav-item position-absolute end-0 mx-5 ">
            <a class="nav-link active fs-3 mx-4" aria-current="page" href="{{route('auth.logout')}}">Logout</a>
          </li>

        
        </ul>
        
      </div>
    </div>
  </nav>

@yield('content')




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>