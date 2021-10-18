@extends('admin.adminlayout.layout')
@section("content")
<div style="padding: 8rem 0 10rem 0;">
    <a style="margin-left: 650px; margin-bottom:60px;" class="btn btn-success" href="{{route('add_slider')}}">Add New Image Slider</a>
    <table class="table" style="width:60rem; margin:auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">remove</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($showdetails as $slider)
            <tr>
                <th scope="row">{{$slider->id}}</th>
                <td>{{$slider->image}}</td>
                <td><a class="btn btn-danger" href="{{route('deleteimg', ['imgid'=>$slider->id])}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection