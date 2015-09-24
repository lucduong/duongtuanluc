@extends('layouts.default')
@section('content')
<section id="ccr-left-section" class="col-md-8">
	<div class="current-page">
		<a href="/"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <a href="/articles">Article
		<?php if (isset($subArt)): ?>
			<i class="fa fa-angle-double-right"></i> {{$subArt}}
		<?php endif ?>
		</a>
	</div>

	<section id="ccr-blog-s2">
		<ul>
			@foreach ($articles as $article)
			<li>
				<article>
					<figure class="blog-thumbnails">
						<img src="{{asset($article->image_url)}}" style="height: 380px;" alt="{{$article->title}} ">
					</figure>
					<div class="blog-text">
						<h4 style="width:100%"><a href="/article/{{$article->slug}}">{{$article->title}}</a></h4>
						
						<div class="meta-data">				
							<a href="#" class="like"><i class="fa fa-eye"></i> {{$article->view}}</a>
						</div>
					</div>
				</article>
			</li>
			@endforeach
		</ul>
		
		<div class="clearfix"></div>
		<!-- nav class="nav-paging">
			<ul>
				<li><a href="#pre"><i class="fa fa-chevron-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><span class="current">3</span></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#next"><i class="fa fa-chevron-right"></i></a></li>
			</ul>
		</nav> -->
	</section>
</section>

<aside id="ccr-right-section" class="col-md-4 ccr-home">
	@include('elements.right')
</aside>
@stop