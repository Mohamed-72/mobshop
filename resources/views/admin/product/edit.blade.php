@extends('admin.adminlayout.layout')
@section("content")
<br>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
    <div class=" main-content-area">
        <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">
                <form method="POST" action="{{route('updateproduct',["productid"=>$productinfo['id']])}}" enctype="multipart/form-data" name="frm-login">
                    @csrf
                    <fieldset class="wrap-title">
                        <h3 class="form-title">add product</h3>										
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-uname">name</label>
                        <input type="text" id="frm-login-uname" name="name" placeholder="product name" value="{{$productinfo['name']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">details:</label>
                        <input type="text" id="frm-login-pass" name="details" placeholder="product details" value="{{$productinfo['details']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">description:</label>
                        <input type="text" id="frm-login-pass" name="description" placeholder="product description" value="{{$productinfo['description']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">quantity:</label>
                        <input type="text" id="frm-login-pass" name="quantity" placeholder="product quantity" value="{{$productinfo['quantity']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">price:</label>
                        <input type="text" id="frm-login-pass" name="price" placeholder="product price" value="{{$productinfo['price']}}">
                    </fieldset>
                    
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">productimage:</label>
                        <input type="file" id="frm-login-pass" name="image" placeholder="product details" value="{{$productinfo['image']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">category_id</label>
                        <input type="text" id="frm-login-pass" name="categort_id" placeholder="category id " value="{{$productinfo['categort_id']}}">
                    </fieldset>
                    
                    
                   
                    <input type="submit" class="btn btn-submit" value="add" name="submit">
                </form>
            </div>												
        </div>
    </div><!--end main products area-->		
</div>
</div><!--end row-->
@endsection