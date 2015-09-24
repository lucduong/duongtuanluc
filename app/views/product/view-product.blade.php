@extends('layouts.default')
@section('content')

<section id="ccr-left-section" class="col-md-8">
	<div class="current-page">
		<a href="/"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <a href="/product.html">Products <i class="fa fa-angle-double-right"></i></a> {{$product->title}}
	</div>

	<article id="ccr-article">
		<h1>{{$product->title}}</h1>
		<div style="margin-top:10px;" class="fb-like" data-href="function(){return window.location.top.href;}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>	

		<img src="{{asset($product->image_url)}}" alt="{{$product->title}}">

		{{$product->content}}

	</article>

	<section id="ccr-commnet">
		<div class="ccr-gallery-ttile">
			<span class="bottom"></span>
			<p>Comment</p>
		</div>

		<ol class="commentlist">
			<div class="fb-comments" data-href="function(){return window.location.top.href;}" data-width="100%" data-numposts="20" data-colorscheme="light"></div>
		</ol>
	</section>


	<section class="bottom-border"></section>
</section>

<aside id="ccr-right-section" class="col-md-4 ccr-home">
	@include('elements.right')
</aside>
@stop