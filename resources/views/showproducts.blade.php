   
@extends('layout.layout')

@section("content")
    
<div class="row">

<ul class="product-list grid-products equal-container">
@foreach ( $productcat as $product)
    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
        <div class="product product-style-3 equal-elem " style="margin: 30 px 0;">
            <div class="product-thumnail">
                <a href="{{route('indexdetails',['id'=>$product['id']])}}" title="">
                    <figure><img src="{{asset('images/products/' .$product['image'])}}" alt="mobilephone" style="height: 25rem; width:25rem;"></figure>
                </a>
            </div>
            <div class="product-info">
                <a href="{{route('indexdetails',['id'=>$product['id']])}}" class="product-name"><span>{{$product['name']}}</span></a>
                <div class="wrap-price"><span class="product-price">${{$product['price']}}</span></div>
                
                
                @if ($product->quantity != 0)
				<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="hidden" value="{{ $product->id }}" name="id">
					<input type="hidden" value="{{ $product->name }}" name="name">
					<input type="hidden" value="{{ $product->price }}" name="price">
					<input type="hidden" value="{{ $product->image }}"  name="image">
					<input type="hidden" value="1" name="quantity">
					<button class="btn add-to-cart"><span class="carts" style="color: #888888">Add To Cart</span></button>
				</form>
				@else 
				<button class="btn add-to-cart"><span class="carts" style="color: #888888">Sorry I'm out of stock &hearts;</span></button>
                @endif
            </div>
        </div>
    </li>
    @endforeach

</ul>
</div>      
               
              
@endsection