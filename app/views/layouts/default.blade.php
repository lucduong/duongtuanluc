<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="" >
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DOU Networks</title>
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('templates/default/css/style.css')}}">
	<script src="{{asset('assets/js/jquery-1.9.1.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="{{asset('templates/default/js/html5shiv.js')}}"></script>
	<![endif]-->
</head>

<body onload="loadPage();">

<script>
  // window.fbAsyncInit = function() {
  //   FB.init({
  //     appId      : '1485174978429615',
  //     xfbml      : true,
  //     version    : 'v2.1'
  //   });
  // };

  // (function(d, s, id){
  //    var js, fjs = d.getElementsByTagName(s)[0];
  //    if (d.getElementById(id)) {return;}
  //    js = d.createElement(s); js.id = id;
  //    // js.src = "//connect.facebook.net/en_US/sdk.js";
  //    js.src = "//connect.facebook.net/en_US/all.js";
  //    fjs.parentNode.insertBefore(js, fjs);
  //  }(document, 'script', 'facebook-jssdk'));
</script>

<header id="ccr-header">
	<!-- Company title (S) -->
	<section id="ccr-site-title">
		<div class="container">
			<div class="site-logo">
				<a href="{{URL::to('/')}}" class="navbar-brand">
					<h1>DOU <span>Networks</span></h1>
					<h3>Dream of Us</h3>
				</a>
			</div>
			<!-- <div class="add-space">
				728 x 90 px Banner
			</div> -->
		</div>
	</section>
	<!-- Company title (E) -->

	<!-- Navigation (S) -->
	@include('elements.nav')
	<!-- Navigation (E) -->
	
</header>

<!-- Content (S) -->
<section id="ccr-main-section">	
	<div class="container" id="mainCntr">
		@yield('content')
	</div>
</section>
<!-- Content (E) -->

<!-- Footer (S) -->
@include('elements.footer')
<!-- Footer (E) -->


<script src="{{asset('templates/default/js/bootstrap.min.js')}}"></script>
<script src="{{asset('templates/default/js/custom.js')}}"></script>
<script src="{{asset('templates/default/js/app.js')}}"></script>

</body>
</html>