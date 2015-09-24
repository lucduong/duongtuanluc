<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	            <h1 class="text-center login-title">Sign in</h1>
	            <div class="account-wall">
	                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
	                    alt="">
	                <form class="form-signin" method="POST">
		                <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
		                <input name="password" type="password" class="form-control" placeholder="Password" required>
		                <button class="btn btn-lg btn-primary btn-block" type="submit">
		                    Sign in</button>
		                <label class="checkbox pull-left">
		                    <input type="checkbox" value="">
		                    Remember me
		                </label>
		                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
	                </form>
	            </div>
	            <a href="register" class="text-center new-account">Create an account </a>
	        </div>
	    </div>
	</div>
	<script src="{{asset('assets/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('templates/default/js/bootstrap.min.js')}}"></script>
</body>
</html>