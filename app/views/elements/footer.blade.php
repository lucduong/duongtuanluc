<!-- Footer (S) -->
<footer id="ccr-footer">
	<div class="container">
		<!-- Copyrights (S) -->
	 	<div class="copyright">
	 		&copy; 2014, Copyrights <a href="http://dounets.com">DOU Networks</a>. All Rights Reserved
	 	</div>		
		<!-- Copyrights (E) -->

		<!-- Social (S) -->		
	 	<div class="footer-social-icons">
	 		<ul>
	 			@if (!Auth::user())
	 			<li><a href="/login">Admin Login</a></li>
	 			@elseif (Auth::user()->isAdmin())
	 			<li><a href="/admin">Administration</a></li>
	 			@else
	 			<li><a href="/">{{Auth::user()->firstname}}</a></li>
	 			@endif
	 			@if (Auth::user())
					<li><a href="/logout" title="Sign out"><i class="fa fa-sign-out"></i></a></li>
				@endif
	 		</ul>
	 	</div>
	 	<!-- Social (E) -->
	</div>
</footer>
<!-- Footer (E) -->