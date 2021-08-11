@extends('layouts.frontend')
@section('main')
<div class="container">
  <div class="row">
  <div class="col-md-3"></div>
 <div class="col-md-6">
  <h2 class="text-center mt-3">Login</h2>
  <form action="{{route('login')}}" method="post">
    @csrf

    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email...">
  </div>
    <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="password" placeholder="Enter Your password...">
  </div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>
</div>

@endsection