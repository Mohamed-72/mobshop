@extends("layout.layout")
@section("content")
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">customer details</h3>
                <form action="{{route('makeorder')}}" method="POST" name="frm-billing">
                    @csrf
                    <p class="row-in-form">
                        <label for="fname">first name<span>*</span></label>
                        <input id="fname" type="text" name="firstname" value="" placeholder="Your name">
                    </p>
                    <p class="row-in-form">
                        <label for="lname">last name<span>*</span></label>
                        <input id="lname" type="text" name="lastname" value="" placeholder="Your last name">
                    </p>
                    <p class="row-in-form">
                        <label for="email">Email Addreess:</label>
                        <input id="email" type="email" name="email" value="" placeholder="Type your email">
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Phone number<span>*</span></label>
                        <input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
                    </p>
                    <p class="row-in-form">
                        <label for="add">Address:</label>
                        <input id="add" type="text" name="address" value="" placeholder="Street at apartment number">
                    </p>
                    <p class="row-in-form">
                        <label for="country">city<span>*</span></label>
                        <input id="country" type="text" name="city" value="" placeholder="United States">
                    </p>
                             <input type="submit" style="margin-left:500px" class="btn btn-success" value="place odrer now"> 
                </form>
            </div>
        </div>
    </div>
</main>
 
@endsection