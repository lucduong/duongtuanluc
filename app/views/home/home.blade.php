@extends('layouts.default')
@section('content')
<section id="ccr-left-section" class="col-md-8">
	<div class="ccr-last-update">
		<div class="update-ribon">Last Update</div>
		<span class="update-ribon-right"></span>
		<div class="update-news-text" id="update-news-text">
				<ul id="latestUpdate">
				    <li><a href="/article/{{$articles[0]->slug}}">{{$articles[0]->title}}</a></li>
				</ul>
		</div>

		<div class="update-right-border"></div>
	</div>

	@include('elements.slider')

	<section id="ccr-latest-post-gallery">
			<div class="ccr-gallery-ttile">
				<span></span>
				<p>Latest articles</p>
			</div><!-- .ccr-gallery-ttile -->


				<ul class="ccr-latest-post">
					@foreach ($articles as $article)
					<li>
						<div class="ccr-thumbnail">
							<img src="{{asset($article->image_url)}}" alt="{{$article->title}}" style="height:160px">
							<p><a href="article/{{$article->slug}}">Read More</a></p>
						</div>
						<h4><a href="article/{{$article->slug}}">{{$article->summary}}</a></h4>
					</li>
					@endforeach
				</ul>

		</section> <!--  /#ccr-latest-post-gallery  -->

		<section class="bottom-border">
		</section> <!-- /#bottom-border -->
</section>

<aside id="ccr-right-section" class="col-md-4 ccr-home">
	@include('elements.right')
</aside>
@stop