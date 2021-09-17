@extends('layouts.frontend')
@section('main')
<div class="col-6" style="margin-left:200px">
<h2 class="text-center">Cart</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
    @php
    $key=0;
    $total_qty=0;
    $total_price=0;
    @endphp
    @foreach($cart as $item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['price']}}<span style="font-size:20px; front-weight:bold"></span></td>
      <td>{{$item['quantity']}}</td>
      <td>{{$item['quantity']* $item['price']}}<span style="font-size:20px; front-weight:bold"></span></td>
    </tr>
    @php
    $key +=1;
    $total_qty += $item['quantity'];
    $total_price += ($item['quantity'] * $item['price']);
    @endphp
    @endforeach
      <tr>
      <th scope="row"></th>
      <td></td>
      <td><span style="font-size:20px; front-weight:bold">Total</span></td>
      <td>{{$total_qty}}</td>
      <td>{{$total_price}}<span style="font-size:20px; front-weight:bold"></span></td>
   
    </tr>
  </tbody>
</table>
@if($total_qty>0)
<form action="{{route('do.order')}}" method="post" >
  @csrf
<div class="row">
  <p>
  <a href="" class="btn btn-primary my-2">Order Pament </a>
</p>
  <div class="col-md-4" >

    <label for="method" class="form-label">Payment Method</label>
    <select name="method" id="method" class="form-control">
      <option value="bkash">Bkash</option>
      <option value="rocket">Rocket</option>
      <option value="nogod">Nogod</option>
    </select>
</div>
<div class="col-md-4">
 <label for="txn_id" class="form-label">Txn ID</label> 
 <input type="text" class="form-control" name="txn_id" id="txn_id" required>
</div>
<input type="hidden" name="price" value="{{$total_price}}">
<input type="hidden" name="qty" value="{{$total_qty}}">
<div class="col-md-4">
<button type="submit" class="btn btn-primary mt-4">Place Order</button>
</div>
</div>
</form>
<p>
  <a href="{{route('stripe.post')}}" class="btn btn-primary my-2 mt-4">Order Pament Method</a>
</p>
@else
<h2 class="text-center text-warning">plese add product to cart!</h2>
@endif
</div>
@endsection

