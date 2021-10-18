@extends('layout.layout')

@section('content')
<br>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
    <div class="widget mercado-widget filter-widget brand-widget">
        <h2 class="widget-title">Brand</h2>
        <div class="widget-content">
            @foreach ($dervieddata as $item )
            <ul class="list-style vertical-list list-limited" data-show="6">
                <li class="list-item"><a class="filter-link " href="{{route('categoryprodcuts',["categoryid"=>$item['id']])}}">{{$item['name']}}</a></li>
            </ul>
            @endforeach
        </div>
    </div>
    
    
    <div class="widget mercado-widget widget-product">
        <h2 class="widget-title">Popular Products</h2>
        <div class="widget-content">
            <ul class="products">
                @foreach ( $latest as $late )
                    
                
                <li class="product-item">
                    <div class="product product-widget-style">
                        <div class="thumbnnail">
                            <a href="{{route('productdetails',["productid"=>$late['id']])}}" title="{{$late['description']}}">
                                <figure><img src="{{asset('images/products/'.$late['image'])}}" alt=""></figure>
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="{{route('productdetails',["productid"=>$late['id']])}}" class="product-name"><span>{{$late['name']}}</span></a>
                            <div class="wrap-price"><span class="product-price">{{$late['price']}}</span></div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div><!-- brand widget-->

</div><!--end sitebar-->

</div><!--end row-->

</div><!--end container-->
<div class="row">

    <ul class="product-list grid-products equal-container">
@foreach ( $productdata as $product)
        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
            <div class="product product-style-3 equal-elem ">
                <div class="product-thumnail">
                    <a href="{{route('productdetails',["productid"=>$product['id']])}}" title="{{$product['description']}}">
                        <figure><img src="{{asset('images/products/' .$product['image'])}}" alt="mobilephone"></figure>
                    </a>
                </div>
                <div class="product-info">
                    <a href="{{route('productdetails',["productid"=>$product['id']])}}" class="product-name"><span>{{$product['name']}}</span></a>
                    <div class="wrap-price"><span class="product-price">{{$product['price']}}</span></div>
                    <a href="" class="btn add-to-cart">Add To Cart</a>
                </div>
            </div>
        </li>
        @endforeach

    </ul>
</div>

    <!-- showing products-->
    



    

</div><!--end sitebar-->

</div><!--end row-->

</div><!--end container-->


@endsection

