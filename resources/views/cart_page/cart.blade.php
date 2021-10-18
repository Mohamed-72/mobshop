@extends('layout.layout')

@section("content")

<main class="my-8">
	<div class="container px-6 mx-auto">
		<div class="flex justify-center my-6">
			<div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
			  @if ($message = Session::get('success'))
				  <div class="bg-success rounded" style="padding: .5rem; padding-top: 1rem; margin-top:10rem;">
					  <p class="text-green-800">{{ $message }}</p>
				  </div>
			  @endif
				<h3 class="text-3xl text-bold">Cart List</h3>
				{{-- <h3 class="text-3xl text-bold">{{$id}}</h3> --}}
			  <div class="flex-1">
				<table class="table table-hover" cellspacing="0">
				  <thead>
					<tr class="text-uppercase">
					  <th class="md:table-cell">Phone</th>
					  <th class="text-left">Name</th>
					  <th class="pl-5 text-left lg:text-right lg:pl-0">
						<span class="lg:hidden" title="Quantity">Quantity</span>
						<span class="hidden lg:inline">Quantity</span>
					  </th>
					  <th class="text-right md:table-cell"> price</th>
					  <th class="text-right md:table-cell"> total price</th>
					  <th class="text-right md:table-cell"> Remove </th>
					</tr>
				  </thead>
				  <tbody>
					  @foreach ($cartItems as $item)
					<tr>
					  <td class=" pb-4 md:table-cell">
						<a href="">
						  <img src="{{asset('images/products/'.$item->attributes->image)}}" class="rounded" alt="Thumbnail" style="width: 4rem">						  
						</a>
					  </td>
					  <td>
						<a href="">
						  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
						</a>
					  </td>
					  	<td class="justify-center mt-6 md:justify-end md:flex">
							<div class="h-10 w-28">
								<div class="relative flex flex-row w-full h-8">
									
									<form action="{{ route('cart.update') }}" method="POST">
										@csrf
										<input type="hidden" name="id" value="{{ $item->id}}" >
										<input type="number" name="quantity" value="{{ $item->quantity }}" 
										class="text-center" style="width: 10rem;"/>
										<button type="submit" class="btn btn-light">Change</button>
									</form>
								</div>
							</div>
					  	</td>
					  <td class="text-right md:table-cell">
						<span class="text-sm font-medium lg:text-base">
							${{ $item->price }}
						</span>
					  </td>
					  <td class="text-right md:table-cell">
						<span class="text-sm font-medium lg:text-base">
							${{ $item->getPriceSum() }}
						</span>
					  </td>
					  <td class="text-right md:table-cell">
						<form action="{{ route('cart.remove') }}" method="POST">
						  @csrf
						  <input type="hidden" value="{{ $item->id }}" name="id">
						  <button class="btn btn-danger">x</button>
					  </form>
						
					  </td>
					</tr>
					@endforeach
					 
				  </tbody>
				</table>
				<div>
				 Total : ${{ Cart::getTotal() }}
				</div>
				<br>
				<div>
				  <form action="{{ route('cart.clear') }}" method="POST">
					@csrf
					<button class="btn btn-danger">Remove All Cart</button>
				  </form>
				</div>


			  </div>
			</div>
		</div>
		<hr>
		<div class="summary">
			<div class="checkout-info">
				
				<a class="btn btn-checkout" href="{{route('orderpage')}}">Check out</a>
				<a class="link-to-shop" href="{{route('shopproduct')}}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</main>
@endsection