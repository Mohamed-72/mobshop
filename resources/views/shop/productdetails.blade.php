@extends("layout.layout")
@section("content")
<div class="row">

    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
        <div class="wrap-product-detail">
            <div class="detail-media">
                <div class="product-gallery">
                  <ul class="slides">
                    <li data-thumb="assets/images/products/digital_18.jpg">
                      <img src="{{asset('images/products/'.$productdetails['image'])}}" alt="product thumbnail" />
                    </li>
                  </ul>
                </div>
            </div>
            <div class="detail-info">
                
                <h2 class="product-name">{{$productdetails['name']}}</h2>
                <div class="short-desc">
                    <ul>
                        <li>{{$productdetails['description']}}</li>
                        <li>{{$productdetails['details']}}</li>
                    </ul>
                </div>
               
                <div class="wrap-price"><span class="product-price">{{$productdetails['price']}}</span></div>
                <div class="stock-info in-stock">
                   
                
                    <p class="availability">Availability: 
                        @if ($productdetails['quantity'] > 0)
                        <b>In Stock</b></p>
                        @else
                        <b>out of stock </b></p>
                        @endif
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <div class="quantity-input">
                        <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >

                        <a class="btn btn-reduce" href="#"></a>
                        <a class="btn btn-increase" href="#"></a>
                    </div>
                </div>
                <div class="wrap-butons">
                    <a href="{{route("addtocard",["productid"=>$productdetails['id']])}}" class="btn add-to-cart">Add to Cart</a>
                    <a href="#  " class="btn add-to-cart">continue shoping</a>

                    <br>
                    <br>
                </div>
            </div>
            
            
            @if(Session::has('message'))
                <span style="margin-left: 200px;color:green" class="btn add-to-cart">{{session('message')}}</span>
        </div>            @endif
                
        
           
    
@endsection