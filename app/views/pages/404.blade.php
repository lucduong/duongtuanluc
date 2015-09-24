<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oops! Page not found</title>
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/404.css')}}">
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="error-template">
	                <h1>
	                    Oops!</h1>
	                <h2>
	                    404 Not Found</h2>
	                <div class="error-details">
	                    Sorry, an error has occured, Requested page not found!
	                </div>
	                <div class="error-actions">
	                    <a href="/" class="btn btn-primary btn-lg"><span class="fa fa-home"></span>
	                        Take Me Home </a>
	                    <a href="/contact.html" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<script src="{{asset('assets/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('templates/default/js/bootstrap.min.js')}}"></script>
</body>
</html>