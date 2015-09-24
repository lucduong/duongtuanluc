<section id="ccr-nav-top" class="fullwidth">
	<div class="">
		<div class="container">
			<nav class="top-menu">
				<ul class="left-top-menu">
					<li><a href="{{URL::to('/')}}">Home</a></li>
					<li><a href="{{URL::to('about.html')}}">About Us</a></li>
					<li><a href="{{URL::to('contact.html')}}">Contact</a></li>
				</ul><!-- /.left-top-menu -->

				<ul class="right-top-menu pull-right">
					@if (!Auth::user())
						<li><a href="{{URL::to('login')}}">Login</a></li>
						<li><a href="{{URL::to('register')}}">Register</a></li>
					@elseif (Auth::user()->isAdmin())
						<li><a href="{{URL::to('admin')}}">{{Auth::user()->username}}</a></li>
					@else
						<li><a href="{{URL::to('profile')}}/{{Auth::user()->username}}">{{Auth::user()->firstname}}</a></li>
					@endif
					@if (!Auth::user() || !Auth::user()->subscribe)
						<li><a href="/subscribe">Subscribe</a></li>
					@endif
					@if (Auth::user())
						<li><a href="/logout" title="Sign out"><i class="fa fa-sign-out"></i></a></li>
					@endif
					<li>
						<form class="form-inline" role="form" action="#">
							<input type="search" placeholder="Search here..." required>
							  <button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</li>
				</ul> <!--  /.right-top-menu -->
			</nav> <!-- /.top-menu -->
		</div>
	</div>	
</section>