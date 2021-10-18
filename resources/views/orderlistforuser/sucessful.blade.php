
@extends("layout.layout")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

/* body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif
} */

/* .container {
    margin-top: 50px;
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #FF5722
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #ee5435;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 7px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #ee5435;
    border-color: #ee5435;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #ff2b00;
    border-color: #ff2b00;
    border-radius: 1px
} */
<style>
    .move{
        position: relative;
        top: 100px;
        right: ;

    
    }
  </style>
</head>
<body>
    @if (count($sucessfulorders)==0)
    <h1 style="text-align: center ;padding:50px">Sorry, You Don't Have Successful Order Yet</h1>
    <div style="text-align: center ;color:red" class="checkout-info ">
        <a class="link-to-shop" href="{{route('shopproduct')}}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
    </div>
    @else
@if (count($sucessfulorders)>0)
<div > <h1 style="margin-left:600px;margin-top:60px">delviered orders <h1></div>
    <div  class="container">
         @foreach ( $sucessfulorders as $order )
         <article class="card"style="border: solid rgb(124, 119, 119,0.5) 1px;background-color:rgb(246,248,250)">
             <div class="card-body">
                 <article  class="card">
                     <div class="card-body row">
                       <div class='col-lg-4'><h4> order number : {{$order['id']}}</h4></div>
                       <div class='col-lg-4'><h4> total_price : {{$order['totalprice']}}</h4></div>
                       <div class='col-lg-4'><h4> status :delivered  </h4></div>
                     </div>
                 </article>
               
                     

                 <hr>
                 <div class="row">
                   @foreach ($order->itemes as $key =>$val )
                   
                  <style>
                      h1{margin-left: 100px;
                    display:inline;}
                  </style>
      
                      <div style=" margin-left: 100px" >
                        <img src="{{asset('images/products/'.$val->image)}}" width="100px"  >
                        <div class="move" style="width:100px;display:inline " >
                         <div class="title m-5"><strong>Name</strong> : {{$val['name']}} </div>
                         <div class="title m-5">  <strong>quantatiy</strong> : {{$val['quantity']}}</div>
                          <div class="title m-5"> <strong>price</strong> : {{$val['price']}}$ </div>
                          <div class="title m-5"> <strong>subtotal </strong>: {{$val['subtotl']}}$ </div>
                        </div>
                          
                    </div>
                   </div>
                   
               
       
                     {{-- <li style="border: red solid 2px" class="col-md-8  d-flex justify-content-around">
                         <figure class="itemside mb-3">
                            
                           
                         </figure>
                         <div class="info align-self-center ">
                          
                        </div>
                     </li> --}}
                     
                     @endforeach
                     
             
                
             </div>
         </article>
         <br><br>
         
         @endforeach
       </div>
       <hr>
       <hr>
       @endif
       @endif
       <br>
</body>
</html>
@endsection
