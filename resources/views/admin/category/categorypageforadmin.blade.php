@extends('admin.adminlayout.layout')
@section("content")

<br>
<a style="margin-left: 700px" class="btn btn-success" href="{{route('categorycreate')}}">add new category</a>

@if (Session::has("message"))
<span class="alert alert-danger">{{session("message")}}</span>
@endif

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">action</th>
        <th scope="col">action</th>
      </tr>
      @foreach ($deriveddata as $item )
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name']}}</td>
        <td><a href="{{route('admindeletecategory',["categoryid"=>$item['id']])}}">delete</a></td>
        <td><a href="{{route('admineditcategry',["categoryid"=>$item['id']])}}">update</a></td>

      </tr>
      @endforeach
    </thead>
    <tbody>
      
    </tbody>
  </table>
    
@endsection