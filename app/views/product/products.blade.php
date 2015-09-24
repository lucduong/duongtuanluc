@extends('layouts.default')
@section('content')
<section id="ccr-left-section" class="col-md-8">	
	<div class="current-page">
		<a href="/"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a><a href="/product.html">Products</a>
	</div>
	<section id="ccr-blog-s2">
		<ul>
			@foreach ($products as $product)
			<li>
				<article>
					<figure class="blog-thumbnails">
						<img src="{{asset($product->image_url)}}" alt="{{$product->title}}" style="max-height: 252px;
min-height: 252px;">
					</figure>
					<div class="blog-text">
						<h4 style="width: 100%"><a href="/product/{{$product->slug}}">{{$product->title}}</a></h4>
						<div class="meta-data">				
							<a href="#" class="like"><i class="fa fa-eye"></i> {{$product->view}}</a>
						</div>
					</div>
				</article>
			</li>
			@endforeach
		</ul>
		
		<div class="clearfix"></div>
	</section>
</section>

<aside id="ccr-right-section" class="col-md-4 ccr-home">
	@include('elements.right')
</aside>
@stop