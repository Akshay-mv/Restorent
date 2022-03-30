@extends('master')
@section('content')
<h1>register new user</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session::get('status');}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
<div class="col-sm-6">
<form method="post" action="register">
    @csrf
     <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter name">
    
  </div>
<div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter password">
    
  </div>
  <div class="form-group">
    <label >phone </label>
    <input type="text" name="phone" class="form-control"  placeholder="Enter phone number">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection


