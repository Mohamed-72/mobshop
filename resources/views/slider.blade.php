@extends('admin.adminlayout.layout')
@section("content")

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3" style="margin-top: 10rem;">
    <div class=" main-content-area">
        <div class="wrap-login-item ">
            <a style="margin-left: 200px; margin-bottom:60px;" class="btn btn-success" href="{{route('sliderindex')}}">View Image Slider Table</a>						
            <div class="login-form form-item form-stl">
                <form method="POST" action="{{route('sliderstore')}}" enctype="multipart/form-data" name="frm-login">
                    @csrf
                    <fieldset class="wrap-title">
                        <h3 class="form-title">Add Image Slider</h3>										
                    </fieldset>
                    
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">Select Image:</label>
                        <input class="form-control" type="file" id="frm-login-pass" name="image" required>
                    </fieldset>

                    <input type="submit" class="btn btn-submit" value="Add" name="submit">
                </form>
            </div>												
        </div>
    </div><!--end main products area-->		
</div>

@endsection