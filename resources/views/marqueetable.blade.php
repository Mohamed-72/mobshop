@extends('admin.adminlayout.layout');
@section("content")
<div style="padding: 8rem 0 10rem 0;">
    <a style="margin-left: 650px; margin-bottom:60px;" class="btn btn-success" href="{{route('add_marquee')}}">Add New Comment Marquee</a>
    <table class="table" style="width:60rem; margin:auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">comment</th>
                <th scope="col">remove</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($showdetails as $marquee)
            <tr>
                <th scope="row">{{$marquee->id}}</th>
                <td>{{$marquee->comment}}</td>
                <td><a class="btn btn-danger" href="{{route('deletecomment', ['commentid'=>$marquee->id])}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection