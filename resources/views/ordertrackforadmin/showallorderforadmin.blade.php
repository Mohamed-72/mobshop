@extends('admin.adminlayout.layout')
@section("content")
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">address</th>
        <th scope="col">firstname</th>
        <th scope="col">lastname</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
        <th scope="col">city</th>
        <th scope="col">order-date</th>
        <th scope="col">user_id</th>
        <th scope="col">status now</th>
        <th scope="col">status </th>



      </tr>
      @foreach ($delivereddata as $order)
          
      
      <tr>
        <th scope="row">{{$order['id']}}</th>
        <td>{{$order['address']}}</td>
        <td>{{$order['firstname']}}</td>
        <td>{{$order['lastname']}}</td>
        <td>{{$order['phone']}}</td>
        <td>{{$order['email']}}</td>
        <td>{{$order['city']}}</td>
        <td>{{$order['order-date']}}</td>
        <td>{{$order['user_id']}}</td>
        <td>{{$order['status']}}</td>
        <td><form method="POST" action="{{route('updatestatus',["orderid"=>$order['id']])}}">
            @csrf
            <select name="status">
            <option value="pending">pending</option>
            <option value="dispatched">dispatched</option>
            <option value="processed">processed</option>
            <option value="shipped">shipped</option>
            <option value="delivered">delivered</option>
          </select>
          <input class="btn alert-dark"  type="submit" value="update">
        </form></td>
         


      </tr>
      @endforeach
    </thead>
    <tbody>
      
    </tbody>
  </table>
    
@endsection