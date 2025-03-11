@extends('customer.master')
@section('title', 'Profile')        
@section('content')
<h1>Profile</h1>

    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input type="Name" class="form-control" id="name" name="name" value="{{$users->name}}">
    </div>      
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$users->email}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

<ul>
<li>street: {{ optional($users->address)->street ?? 'no street' }}</li>
<li>city: {{ optional($users->address)->city ?? 'no city' }}</li>
</ul>
