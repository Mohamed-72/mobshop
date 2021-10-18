@extends('layout.layout')

@section('content')
<br>

    <!-- showing products-->
    



    <div class="widget mercado-widget widget-product">
        <h2 class="widget-title">Popular Products</h2>
        <div class="widget-content">
            @foreach ( $productdata as $product )
            
            <ul class="products">
                <li class="product-item">
                    <div class="product product-widget-style">
                        <div class="thumbnnail">
                            <a href="detail.html" title="{{$product['description']}}">
                                <figure><img src="" alt="mobilephone"></figure>
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>{{$product['name']}}</span></a>
                            <div class="wrap-price"><span class="product-price">{{$product['price']}}</span></div>
                        </div>
                    </div>
                </li>
            </ul>
            @endforeach
        </div>
    </div><!-- brand widget-->

</div><!--end sitebar-->

</div><!--end row-->

</div><!--end container-->


@endsection

