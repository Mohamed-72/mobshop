
@extends('admin.adminlayout.layout')
@section("content")
<br>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
    <div class=" main-content-area">
        <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">
                <form method="POST" action="{{route('updateuser',["userid"=>$userinfo['id']])}}" enctype="multipart/form-data" name="frm-login">
                    @csrf
                    <h1>{{$userinfo['id']}}</h1>
                    <fieldset class="wrap-input">
                        <label for="frm-login-uname">name</label>
                        <input type="text" id="frm-login-uname" name="name" placeholder="user name" value="{{$userinfo['name']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">Email</label>
                        <input type="text" id="frm-login-pass" name="email" placeholder="user email" value="{{$userinfo['email']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">Status<span style="color: blue">(put zero if want block user)<span></label><br>
                        <input type="number" class="form-control" id="frm-login-pass" name="status" min="0" max="1" placeholder="product description" value="{{$userinfo['status']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">is_admin<span style="color: blue">(put one if want make this admin)<span></label><br>
                        <input type="number" class="form-control" id="frm-login-pass" name="is_admin" min="0" max="1" placeholder="product description" value="{{$userinfo['is_admin']}}">
                    </fieldset>

                  
                    
                    
                   
                    <input type="submit" class="btn btn-submit" value="update" name="submit">
                </form>
            </div>												
        </div>
    </div><!--end main products area-->		
</div>
</div><!--end row-->
@endsection