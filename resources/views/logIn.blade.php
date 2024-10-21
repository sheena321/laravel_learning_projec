
@extends('customer.master')
  @section('title', 'Larael Crud')
  @section('content')
  <form action="{{ route('loginUser') }}" method="post">
    @csrf
    <h1>@if(session()->has('error')) {{session()->get('error')}} @endif</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember" name="remember">
    <label class="form-check-label" for="exampleCheck1">Rememberpassword</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection