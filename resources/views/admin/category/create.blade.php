@extends('admin.adminlayout.layout')
@section("content")
<br>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
    <div class=" main-content-area">
        <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">
                <form method="POST" action="{{route("categorystore")}}"  name="frm-login">
                    @csrf
                    
                    <fieldset class="wrap-input">
                        <label for="frm-login-uname">name</label>
                        <input type="text" id="frm-login-uname" name="name" placeholder=" enter category name ">
                        @error('name')
                         <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-uname">desction</label>
                        <input type="text" id="frm-login-uname" name="description" placeholder="enter category description">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </fieldset>
                    <input type="submit" class="btn btn-submit" value="add" name="submit">
                </form>
            </div>												
        </div>
    </div><!--end main products area-->		
</div>
</div><!--end row-->
@endsection