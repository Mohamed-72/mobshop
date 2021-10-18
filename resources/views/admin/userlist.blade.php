@extends("admin.adminlayout.layout")
@section("content")
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">is_admin</th>
        <th scope="col">created_at</th>
      



      </tr>
      @foreach ($user as $users)
          
      
      <tr>
       
        <td>{{$users['id']}}</td>
        <td>{{$users['name']}}</td>
        <td>{{$users['email']}}</td>
        <td>{{$users['phone']}}</td>
        <td>{{$users['is_admin']}}</td>
        <td>{{$users['created_at']}}</td>
        
       
        
         


      </tr>
      @endforeach
    </thead>
    <tbody>
      
    </tbody>
  </table>
    
@endsection