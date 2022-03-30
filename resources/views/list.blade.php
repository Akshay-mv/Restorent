@extends('master')
@section('content')
<h1>Restorent list page</h1>
@if(Session::get('status'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session::get('status');}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    
    

   

@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">operation</th>
      
    </tr>
  </thead>
  
      
@foreach($data as $item)
<tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td><a href="delete/{{$item->id}}">delete</a>
      <a href="edit/{{$item->id}}">update</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>







@endsection
