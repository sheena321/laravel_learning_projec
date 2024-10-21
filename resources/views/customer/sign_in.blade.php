  @extends('customer.master')
  @section('title', 'Larael Crud')
  @section('content')
<form action="{{isset($edit) ? route('customer.update', $customer->id) : route('customer.create')}}" method="post">
    @csrf
      <!-- <div>{{session()->get('username')}}</div>   /**like this we can get value from session in blade[ username set in controller] */ -->


      @if(session()->has('success')) 
      <div>
        {{session()->get('success')}}   /* {{session('success')}} also works */
       </div>
       @endif


       
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{isset($edit) ? $customer->email : ''}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="{{isset($edit) ? $customer->password : ''}}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="add1" name="add1" placeholder="1234 Main St" value="{{isset($edit) ? $customer->address1 : ''}}">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="2" placeholder="Apartment, studio, or floor" name="add2" value="{{isset($edit) ? $customer->address2 : ''}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">address1</th>
      <th scope="col">address2</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  @unless(isset($edit))   
      @foreach ($customers as $customer)
        <tr>
          <th scope="row">{{$customer->id}}</th>
          <td>{{$customer->email}}</td>
          <td>{{$customer->address1}}</td>
          <td>{{$customer->address2}}</td>
          <td><a href="{{route('customer.edit', $customer->id)}}"><button class="btn btn-primary">Edit</button></a></td>
          <td><a href="{{route('customer.delete', $customer->id)}}"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
      @endforeach
      <div>
      {{$customers->links()}}
    </div>
    @endunless
   
    <a href="{{route('login')}}"><button class="btn btn-primary">logout</button"></a>
    
   
