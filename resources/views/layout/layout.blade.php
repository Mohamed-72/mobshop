<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.PNG') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="  {{ asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="  {{ asset('/css/chosen.min.css') }}">
        <link rel="stylesheet" type="text/css" href="  {{ asset('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('/css/color-01.css') }}">
		<script src="{{ asset('/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
		<script src="{{ asset('/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/chosen.jquery.min.js') }}"></script>
		<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('/js/jquery.sticky.js') }}"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

		<script src="{{ asset('/js/functions.js') }}"></script>

    </head>
	<style>
		
		.link-term:hover {
			border: solid black 2px;

		}
		.link-term:active {
			border: solid red 2px;

		}
	

	</style>
<body class="inner-page about-us ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels"  href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">			

				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456-789-1111</a>
								</li>
							</ul>
						</div>

						
						
						<div class="topbar-menu right-menu">
							<ul>
								@if( session()->get('LoggedUser') >= 1 )
                                  <li class="menu-item " ><div><a title="Register or Login" href="{{route('auth.logout')}}">	<span> @lang('auth.logout')</span></a></div></li>
								@else
								  <li class="menu-item  " > <a title="Register or Login"  href="{{route('auth.login')}}">	<span> @lang('auth.login')</span></a></li>
							  	<li class="menu-item" ><a title="Register or Login" href="{{route('auth.register')}}">	<span> @lang('auth.register')</span></a></li>
								@endif
								</li>

							
								{{-- <div  style="display: inline"  >
										<a class="btn  dropdown-toggle" style="color:black"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
										 {{app()->getLocale() =='ar' ?'العربية':'English'}}
										</a>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
										  <li><a class="dropdown-item" href="{{url('en')}}"> {{app()->getLocale() =='ar' ?'English':''}}</a></li>
										  <li><a class="dropdown-item" href="{{url('ar')}}"> {{app()->getLocale() =='en' ?'العربية':''}}</a></li>
										 
										</ul>
									  </div> --}}
							
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">

							<a href="{{route('shopproduct')}}" class="link-to-home"><img src="{{ asset('images/logo.PNG') }}" alt="mercado"></a>

						</div>
						
                                
								

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="{{route('searchproducts')}}" method="POST" id="form-search-top" name="form-search-top">
									@csrf
									<input type="text" name="search" value="" placeholder=" @lang('auth.search')">
									<button name="sad" form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							{{-- <div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true" id="heartbeat"></i>
									<div class="left-info">
										<span class="index"># item</span>
										<span class="title">@lang('auth.Wishlist')</span>
									</div>
								</a>
							</div> --}}
							<div class="wrap-icon-section minicart">
								<a href="{{route('cart.list')}}" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true" id="shake-top"></i>
									<div class="left-info">
										@if (session('LoggedUser') >= 1)
											
										<span class="index">{{$cartTotalQuantity = Cart::session(session('LoggedUser'))->getTotalQuantity();}} items</span>
										@else
										<span class="index">0 items</span>
										@endif
										<span class="title">@lang('auth.cart')</span>
										{{-- {{$userID = session('LoggedUser'); }} --}}
									{{-- <h1>	{{$cartTotalQuantity = Cart::session(session('LoggedUser'))->getTotalQuantity();}}<h1> --}}
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
						
							
						

					</div>
				</div>

				<?php
					use App\Models\Marquee;
					$marquee = Marquee::all();
				?>
				<div class="nav-section header-sticky">
					<div class="container">
						<marquee scrollamount="4" direction="left">
							@foreach ($marquee as $marq)
							<span style="color:#FF2832; font-size:15px;"><i>&lang; {{$marq->comment}} &rang;</i> <span style="color:#444444;font-weight:bolder;">MőB SHőP</span></span>
							@endforeach					
						</marquee>
					</div>

					{{-- <div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{route('about_us.about')}}" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="{{route('shopproduct')}}" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="{{route('cart.list')}}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="{{route('trackordersforuser')}}" class="link-term mercado-item-title">my orders</a>
								</li>	
								<li class="menu-item">
									<a href="{{route('comment.create')}}" class="link-term mercado-item-title">Contact Us</a>
								</li>
								<li class="menu-item">
									<a href="{{route('gotoadmin')}}" class="link-term mercado-item-title">admindashborad</a>
								</li>							
							</ul>
						</div>
					</div> --}}
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								{@if( session()->get('UserType') == 0 ) 
							
								
								<li class="menu-item ">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								
								<li class="menu-item">
									<a href="{{route('shopproduct')}}" class="link-term mercado-item-title">@lang('auth.shop')</a>
								</li>
								<li class="menu-item">
									<a href="{{route('cart.list')}}" class="link-term mercado-item-title">@lang('auth.cart')</a>
								</li>
								<li class="menu-item">
									<a href="{{route('comment.create')}}" class="link-term mercado-item-title">@lang('auth.contact')</a>
								</li>
								<li class="menu-item">
									<a href="{{route('about_us.about')}}" class="link-term mercado-item-title">@lang('auth.about')</a>
								</li>	
								@if( session()->get('LoggedUser') >= 1 )
								<li class="menu-item" >
									<a href="{{route('trackordersforuser')}}" class="link-term mercado-item-title">@lang('auth.order')</a>
								</li>
								
							
								
								@else 
								<span>  </span>

								@endif
								{{-- <span style="color:white"> {{session('LoggedUser')}}</span> --}}
								
								
									
								@else 
								  @if( session()->get('LoggedUser') >= 1 )
								
								  <li class="menu-item">
									<a href="{{route('showordersforadmin')}}" class="link-term mercado-item-title">admindashborad</a>
								</li>	

								<li class="menu-item">
									<a href="/" class="link-term mercado-item-title">HomePage</a>
								</li>
								<li class="menu-item">
									<a href="{{route('shopproduct')}}" class="link-term mercado-item-title">Proudct</a>
								</li>
							     @else
								 <li class="menu-item ">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								
								<li class="menu-item">
									<a href="{{route('shopproduct')}}" class="link-term mercado-item-title">@lang('auth.shop')</a>
								</li>
								<li class="menu-item">
									<a href="{{route('cart.list')}}" class="link-term mercado-item-title">@lang('auth.cart')</a>
								</li>
								<li class="menu-item">
									<a href="{{route('comment.create')}}" class="link-term mercado-item-title">@lang('auth.contact')</a>
								</li>	
								<li class="menu-item">
									<a href="{{route('about_us.about')}}" class="link-term mercado-item-title">@lang('auth.about')</a>
								</li>
								
									@endif
							

								  
								 @endif						 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
{{-- <h1> @lang('auth.title')<h1> --}}
	<!-- here is the cpntent -->
@yield('content')

				
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name"> @lang('auth.s1')</h4>
								<p class="fc-desc" > @lang('auth.s2')  </p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">@lang('auth.s3')</h4>
								<p class="fc-desc"> @lang('auth.s4')</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name"> @lang('auth.s5')</h4>
								<p class="fc-desc"> @lang('auth.s6')</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name"> @lang('auth.s7')</h4>
								<p class="fc-desc"> @lang('auth.s8')</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">  @lang('auth.s9')</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">@lang('auth.s10')</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">@lang('auth.phone')</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">support@gmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">@lang('auth.s11')</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder=" @lang('auth.s12')">
											<button class="btn-submit"> @lang('auth.subscribe')</button>
										</form>
									</div>
								</div>
							</div>
							

					</div>

					<div class="row">


						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header"> @lang('auth.social')</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>

						

					</div>
				
			</div>
		</div>
	
	</footer>
	<script src="{{ asset('/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>