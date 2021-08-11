@extends('layouts.frontend')
@section('main')
<div class="container">
  <div class="row">
  <div class="col-md-3"></div>
 <div class="col-md-6">
  <h2 class="text-center mt-3">Registration</h2>
  <form action="{{route('registration')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name...">
  </div>
   <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone...">
  </div>
   <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea name="address" class="form-control" id="address" placeholder="Enter Your Address..."></textarea>
  </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email...">
  </div>
    <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="password" placeholder="Enter Your password...">
  </div>
    <div class="mb-3">
    <label for="confirm_password" class="form-label">Confirm Passwodr</label>
    <input type="text" name="password_confirmation" class="form-control" id="confirm_password" placeholder="confirm Your Password...">
  </div>
<button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</div>

@endsection