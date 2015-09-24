@extends('layouts.default')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
	//$('.fb-comments').attr('data-href', window.top.location.href);
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1485174978429615&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<section id="ccr-left-section" class="col-md-8">
	<div class="current-page">
		<a href="/"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <a href="/articles">Article <i class="fa fa-angle-double-right"></i></a> {{$article->category}}
	</div>

	<article id="ccr-article">
		<h1>{{$article->title}}</h1>

		<div class="article-like-comment-date">	
			Posted by <a href="#">{{$article->user}}</a> on <time datetime="{{$article->created_at}}">{{$article->created_at}}</time> in <a href="#{{$article->category}}">{{$article->category}}</a>	
		</div>
		<div style="margin-top:10px;" class="fb-like" data-href="function(){return window.location.top.href;}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>	

		<img src="{{asset($article->image_url)}}" alt="{{$article->title}}">

		{{$article->content}}

		<!-- <div class="article-tags">
			Tag: <a href="#tag1">Entertainment</a>, <a href="#tag2">Holiwood</a>, <a href="#tag3">Movie</a>
		</div> -->

	</article>

	<section id="ccr-commnet">
		<div class="ccr-gallery-ttile">
			<span class="bottom"></span>
			<p>Comment</p>
		</div>

		<ol class="commentlist">
			<!-- <div class="fb-comments" data-href="function(){return window.top.location.href;}" data-width="100%" data-numposts="20" data-colorscheme="light"></div> -->
			<?php    
				$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				echo "<div class='fb-comments' data-href='" . $url . "' data-num-posts='10' data-width='100%' data-colorscheme='light'></div>";
			?>
		</ol>
	</section>


	<section class="bottom-border"></section>
</section>

<aside id="ccr-right-section" class="col-md-4 ccr-home">
	@include('elements.right')
</aside>
@stop