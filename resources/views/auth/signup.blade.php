<!doctype html>
<html lang="en">

<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('/login_assets/css/style.css')}}">

</head>
<style>
	body {
		height: 100vh;
		background-image: url('/images/bg10.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>

<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 col-lg-5">
					<div class="login-wrap p-3 p-md-3">
						<div class="text-center mb-1">Are You Already Looged in? <a href="/login"><b class="text-dark">Login</b></a></div>
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-user-o"></span>
						</div>
						<h3 class="text-center mb-1" style="color: black;">Signup Page</h3>
						<form action="{{url('/post_signup')}}" class="login-form" method="post">
							@csrf

							<div class="form-group">
								<label class="form-label" style="color: ;">Name</label>
								<input type="text" class="form-control rounded-left" placeholder="John Doe" name="name">
							</div>

							@error('email')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<div class="form-group">
								<label class="form-label" style="color: ;">Email</label>
								<input type="email" class="form-control rounded-left" placeholder="john@gmail.com" name="email" required>
							</div>

							@error('password')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<div class="form-group">
							<label class="form-label">Password</label>
								<input type="password" class="form-control rounded-left" placeholder="Enter Password" name="password" required>
							</div>

							
							@error('role')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<div class="form-group">
								<label class="form-label" style="color: ;">Role</label>
								<input type="text" class="form-control rounded-left" placeholder="Admin or any user" name="role">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Signup</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('/login_assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('/login_assets/js/popper.js')}}"></script>
	<script src="{{asset('/login_assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/login_assets/js/main.js')}}"></script>

</body>

</html>