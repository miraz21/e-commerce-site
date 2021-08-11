@extends('layouts.backend')

@section('main')
<h3 class="text-center">Product List</h3>
<a href="{{route('admin.product.create')}}"class="btn btn-success">Add New Product</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	 @foreach($products as $key=>$product)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$product->name}}</td>
      <td>{{number_format($product->price)}}BDT</td>
      <td>{{$product->desc}}</td> 
      <td>
      	<img src="{{asset('upload/products/'.$product->photo)}}" alt="photo" width="100">
      </td> 
      <td>
      	<a href="{{route('admin.product.edit', $product->id)}}"class="btn btn-primary">Edit</a>
      	<a href="{{route('admin.product.delete', $product->id)}}"class="btn btn-warning">Delete</a>
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>
{{$products->links('pagination::bootstrap-4')}}
@endsection