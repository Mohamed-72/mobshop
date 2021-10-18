@extends("layout.layout")
@section('content')


	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Cart</span></li>
				</ul>
			</div>
			
			 @if (!Cart::isEmpty())
            @foreach ($dervied as $value => $item  )
			
			<div class=" main-content-area">
				<div class="wrap-iten-in-cart">
					<h3 class="box-title">{{$item['id']}}</h3>
					<ul class="products-cart">
						<li class="pr-cart-item">
							<div class="produc t-image">
								<figure><img src="{{asset('images/products/1.PNG')}}" alt=""></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="#">{{$item['name']}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">{{$item['price']}}</p></div>
							<div class="quantity">
								<div class="quantity-input">
                                     <form method="POST" action={{route('updatethecart',["cartid"=>$value])}}>
										@csrf
									<input type="number" name="quantity" value={{$item["quantity"]}} max="1000" min="1" pattern="[0-9]*">	
									<input type="hidden"  value="{{$value}}" name="rowvalue">
									<button type="submit" name ="action" value="increase" class="btn btn-increase"></button>
									<button type="submit"  name ="action" value="decrese" class="btn btn-reduce"></button>							
								</form>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price"><?php echo \Cart::getSubTotal()?></p></div>
							<div class="delete">
								<a href="{{route('removeitem',["cartitemid"=>$value])}}" class="btn" title="">
									<span>Delete from your cart</span>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
								
							</div>
						</li>
																
					</ul>
				</div>
				@endforeach
                  @endif

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index"><?php echo \Cart::getTotal() ?> </b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index"><?php echo \Cart::getTotal()?></b></p>
					</div>
					<div class="checkout-info">
						@if (!Cart::isEmpty())
							
						
						<a class="btn btn-checkout" href="{{route('orderpage')}}">Check out</a>
						<a class="link-to-shop" href="{{route('shopproduct')}}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					@endif
				</div>
			</div><!--end main content area-->

</div><!--end container-->


@endsection
