@extends('layouts.frontend')
@section('main')
<div class="row">
	<div class="container">
		<div class="col-md-2"></div>
		  <div class="col-md-6">
<style>
span.b {
  display: inline;
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 1px solid blue;    
  background-color: yellow; 
  left: 5px;
}
</style>
<body>

<h2>Product Check and Inform</h2>
<div>
ডেলিভারি ম্যান এর কাছ থেকে পণ্য গ্রহণ করে পণ্য যথাযথভাবে চেক করে, কোন প্রবলেম আছে কিনা সেটা ডেলিভারি ম্যান এর কাছে অবহিত করবেন. <span class="b">Chacked</span> and <span class="b">Inform</span>অন্য কোনো ত্রুটি বিচ্যুতি আছে কিনা সেটা আপনার জন্য 24 ঘন্টা বরাদ্দ থাকবো তার ভেতরে অবহিত করতে হবে কর্তৃপক্ষকে.অন্যথায় আপনার এপলিকেশন বাতিল বলে গণ্য হবে. </div>

<div class="container mt-4">
<div style="text-align: left;">
<form action="{{route('data.store')}}" method="post" >
  @csrf
  <div class="mb-3">
    <label for="problem" class="form-label">Problem</label>
    <textarea name="problem" class="form-control" id="problem" placeholder="Enter your problem"></textarea>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
@endsection