@extends('customer.master')
@section('title', 'UserList')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <a href="{{ route('profile', $user->id) }}$user->id}}" class="btn btn-primary">Edit</a>
                <!-- <a href="{{url('/userlist/delete/'.$user->id)}}" class="btn btn-danger">Delete</a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection     