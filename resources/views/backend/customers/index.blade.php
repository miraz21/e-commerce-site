@extends('layouts.backend')

@section('main')
<h3 class="text-center">Customer List</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  	 @foreach($customers as $key=>$customer)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->phone}}</td>
      <td>{{$customer->address}}</td>
      <td>
      	<a class="btn btn-primary" href="{{route('admin.customer.edit', $customer->id)}}">Edit</a>
      	<a class="btn btn-warning" href="{{route('admin.customer.delete', $customer->id)}}">Delete</a>
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>
{{$customers->links('pagination::bootstrap-4')}}
@endsection