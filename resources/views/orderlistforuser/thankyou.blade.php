@extends("layout.layout")
@section("content")
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Thank You</span></li>
            </ul>
        </div>
    </div>
    <div class="container pb-60">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Thank you for your order</h2>
                @foreach ($data as $order)
                <div class="row text-center alert alert-info">
                  
                 <div class="container">
                     <div class="row">
                         <div class='col-lg-4'><h4> order number : {{$order['id']}}</h4></div>
                         <div class='col-lg-4'><h4> total_price : {{$order['totalprice']}}</h4></div>
                         <div class='col-lg-4'><h4> status : {{$order['status']}}</h4></div>
                     </div>
                 </div>
                
                </div>
                @if ($order['status']=="pending")
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                  </div>
                @endif
                @if ($order['status']=="dispatched")
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                  </div>
                @endif
                @if ($order['status']=="processed")
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                  </div>
                @endif
                @if ($order['status']=="shipped")
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                  </div>
                @endif
                @if ($order['status']=="delivered")
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                  </div>
                @endif
                  
                  @endforeach

            </div>
        </div>
    </div><!--end container-->

</main>
    
<input type="text">
@endsection