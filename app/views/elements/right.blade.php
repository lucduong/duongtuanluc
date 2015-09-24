<!-- Popular (S) -->
<section id="sidebar-popular-post">
	<div class="ccr-gallery-ttile">
		<span></span> 
		<p><strong>Popular Post</strong></p>
	</div>
	<ul>
		@foreach ($populars as $popular)
		<li>
			<img src="{{asset($popular->image_url)}}" alt="{{$popular->title}}">
			<?php if (isset($article)): ?>
				<?php if ($article->slug == $popular->slug): ?>
					<!-- <span class="label label-success">Reading...</span> -->
				<?php endif ?>
			<?php endif ?>
			<a href="/article/{{$popular->slug}}">{{$popular->title}}</a>
			<div class="date-like-comment">
				<span class="date"><time datetime="{{$popular->created_at}}">{{$popular->created_at}}</time></span>
				<a class="like" href="#"><i class="fa fa-eye"></i>{{$popular->view}}</a>
			</div>
		</li>
		@endforeach
	</ul>

</section>
<!-- Popular (E) -->

<!-- Newslater (S) -->
<section id="ccr-sidebar-newslater">
	
	<div class="ccr-gallery-ttile">
		<span></span> 
		<p><label for="sb-newslater"><strong>Newslater</strong></label></p>
	</div>
	
	<!-- Subscribe (S) -->
	<div class="sidebar-newslater-form">
		<form class="ccr-gallery-ttile" action="/subscribe" method="post">
			<input  type="email" id="sb-newslater" name="email" placeholder="Enter your email address" required>
			<button type="submit">Subscribe</button>

		</form>
	</div>
	<!-- Subscribe (E) -->
</section>
<!-- Newslater (E) -->

<!-- Facebook (S) -->
<section id="ccr-find-on-fb">
	<div class="find-fb-title">
		<span><i class="fa fa-facebook"></i></span> Find us on Facebook
	</div>
	<div class="find-on-fb-body">

		<div class="fb-like-box" data-href="https://www.facebook.com/pages/DOU-Networks/164003777101877" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>

	</div>
</section>
<!-- Facebook (E) -->