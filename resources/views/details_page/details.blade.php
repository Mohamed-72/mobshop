@extends("layout.layout")
@section("content")

<!--main area-->
<main id="main" class="main-site">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        
        <div class="row">
            
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                            <ul style="list-style-type: none;">
                                <li>
                                    <img src="{{asset('images/products/'.$Product->image)}}" alt="product thumbnail" />                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        
                        <h2 class="product-name">{{ $Product->name }}</h2>
                        <div class="short-desc">
                            {{ $Product->description }}
                        </div>
                        
                        <div class="wrap-price"><span class="product-price">
                            <!-- ${{ $Product->price }} -->
                            @if($Product->spl_price ==0)
                                    ${{$Product->price}}
                                     <input type="hidden" value="{{$Product->price}}"
                                      name="newPrice"/>
                                      @else
                                      <h2 style="color:red">It Is On Sale</h2><br>
                                    <b style="text-decoration:line-through; color:#ddd">
                                      ${{$Product->price}} </b>
                                       ${{$Product->spl_price}}
                                       <input type="hidden" value="{{$Product->spl_price}}"
                                        name="newPrice"/>
                                        
                                      @endif
                                      </span></div><br><br>













                        <div class="stock-info in-stock">
                            
                            <p class="availability">Availability: <b>{{ $Product->quantity }}</b></p>
                        </div>
                        @if ($Product->quantity != 0)
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $Product->id }}" name="id">
                                <input type="hidden" value="{{ $Product->name }}" name="name">
                                @if( $Product->spl_price == 0)
											<input type="hidden" value= "{{ $Product->price }}" name="price">
											@else
											<input type="hidden" value= "{{ $Product->spl_price }}" name="price">
											@endif
                                <input type="hidden" value="{{ $Product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="btn add-to-cart"><span class="carts" style="color: #888888">Add To Cart</span></button>
                            </form>
                        @else 
                        <button class="btn add-to-cart"><span class="carts" style="color: #888888">Sorry I'm out of stock &hearts;</span></button>
                        @endif
                        
                        <br><hr>
                        <div class="summary">
                            <div class="checkout-info">
                                <a class="link-to-shop" href="{{route('shopproduct')}}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

            {{-- //////////// --}}

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Free Shipping</b>
                                        <span class="subtitle">On Oder Over $99</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Special Offer</b>
                                        <span class="subtitle">Get a gift!</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Order Return</b>
                                        <span class="subtitle">Return within 7 days</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->
            </div><!--end sitebar-->
        </div><!--end row-->
    </div><!--end container-->
</main>
<!--main area-->

@endsection