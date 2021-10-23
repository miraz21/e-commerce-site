@extends('layouts.backend')
@section('main')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<h3 class="text-center mt-3">Edit Product</h3>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('admin.product.edit',$product->id)}}" method="post" enctype="multipart/form-data">
@csrf 
  <div class="mb-3">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}">
  </div>
   <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="price" value="{{$product->price}}" >
  </div>
   <div class="mb-3">
    <label for="discount" class="form-label">Discount</label>
    <input type="number" name="discount" class="form-control" id="discount" value="{{$product->discount}}" >
  </div>
   <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="description" cols="30" rows="5"> {{$product->description}}</textarea>
  </div>
  <div class="mb-3">
  <label for="photo" class="form-label">Photo</label>
  <input type="file" name="photo" class="form-control" id="photo" >
  <img src="{{asset('upload/products/'.$product->photo)}}" alt="photo" width="100">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection