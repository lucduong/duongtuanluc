@extends('layouts.default')
@section('content')
<section id="ccr-left-section" class="col-md-8">	
	<div class="current-page">
		<a href="/"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a><a href="/recruiting.html">Recruitings</a>
	</div>
	<section id="ccr-blog">
		@foreach ($jobs as $job)
		<article>
			<figure class="blog-thumbnails">
			<img src="#" alt="Article Image ">
			</figure> <!-- /.blog-thumbnails -->
			<div class="blog-text">
				<span class="read-more" style="font-size: 13px;color: #fff;background-color: #2dc3e8;display:inlin-block;padding: 0px 5px;">{{$job->name}}</span>
				<h1><a href="/recruiting/{{$job->slug}}">{{$job->title}}</a></h1>
				<p>{{$job->description}}</p>
				<div class="meta-data">			
					<a class="like" href="#"><i class="fa fa-eye"></i>{{$job->view}}</a>
					<span class="date"><time datetime="{{$job->created_at}}">Creat Date <label style="color:#2dc3e8;font-weight: normal;">{{substr( $job->created_at, 0, 10 );}}</label></time>&nbsp;&nbsp;&nbsp;</span>
					<span class="date"><time datetime="{{$job->created_at}}">Due Date <label style="color:#2dc3e8;font-weight: normal;">{{$job->due_date}}</label></time></span>	
					<span class="read-more"><a href="/recruiting/{{$job->slug}}">View more</a></span>
				</div>
			</div> <!-- /.blog-text -->
			
		</article>
		@endforeach
	</section>
</section>

<aside id="ccr-right-section" class="col-md-4 ccr-home">
	@include('elements.right')
</aside>
@stop