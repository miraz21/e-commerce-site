@extends('layouts.frontend')
@section('main')

<form action="{{route('search')}}" method="post">
  @csrf
  <div class="container mt-4">
  <div style="float: right;">
  <input type="text" name="name" >
  <input type="submit" value="search">
  </div>
  </div>
</form>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <p>
          <a href="{{route('inform.data')}}" class="btn btn-secondary my-2">Urgent Information</a>
          <a href="{{route('cart')}}" class="btn btn-secondary my-2">Show Cart</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <h4>New Collection</h4>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        @foreach($products as $product)
        <div class="col">
          <div class="card shadow-sm">
          <img src="{{asset('upload/products/'.$product->photo)}}" alt="photo" height="250">

         <div class="card-body">
            <h2>{{$product->name}}</h2>
              <p class="card-text">{{$product->description}}</p>

              @if($product->price > 0)
              <p class="text-justify"><strong>Product Price: </strong>
                  @if($product->discount>0)
                      <del class="text-danger">BDT {{$product->price}}</del>
                        BDT {{$product->price - $product->discount}} 
                        @else
                        BDT {{$product->price}} 
                        @endif
                       </p>
                       @endif
                       
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-sm btn-outline-secondary" href="{{route('product.show',[$product->id,\Illuminate\Support\Str::slug($product->name)])}}">View</a>

                  <a class="btn btn-sm btn-outline-secondary" href="{{route('add.to.cart',$product->id)}}">Add To Cart</a>
                  </div>
                <small class="text-muted">{{number_format($product->price)}}BDT</small>
              </div>
            </div>
          </div>
        </div>
       @endforeach
       {{$products->links('pagination::bootstrap-4')}}
        </div>
        </div>
       </div>

@endsection