@extends('master')
@section('content')
<div class="col-sm-6">
<form action="/update" method="post">
    @csrf
    <div class="form-group">
    
    <input type="hidden" name="id"  value={{$data->id}} >
</div>
     <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" value={{$data->name}}  placeholder="Enter name">
    
  </div>
<div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" value={{$data->email}} placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" value={{$data->address}} placeholder="Enter address">
    
  </div>
  
  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>


@endsection
