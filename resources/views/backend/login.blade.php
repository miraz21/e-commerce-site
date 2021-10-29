<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>{{config('app.name')}} login form</title>
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<h2 class="text-center">Admin Login Form</h2>
			<form action="{{route('admin.login')}}" method="post">
				@csrf
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>	
			</div>
		</div>
	</div>
</body>
</html>

