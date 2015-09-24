<!-- Slider (S) -->
<section id="ccr-slide-main" class="carousel slide" data-ride="carousel">				
	<!-- Carousel items (S) -->
	<div class="carousel-inner">
		@foreach ($sliders as $slider)
		<div class="item">
			<div class="container slide-element">
				<img src="{{asset($slider->image_url)}}" alt="{{$slider->description}}">
				<p><a href="#">{{$slider->description}}</a></p>
			</div>
		</div>
		@endforeach
	</div>
	<!-- Carousel items (E) -->

	<a class="carousel-control left" href="#ccr-slide-main" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
	<a class="carousel-control right" href="#ccr-slide-main" data-slide="next"><i class="fa fa-arrow-right"></i></a>

	<!-- Carousel indicators (S) -->
	<ol class="carousel-indicators">
		<?php $cnt = $sliders->count(); ?>
		@for ($i=0; $i < $cnt; $i++)
		<li data-target="#ccr-slide-main" data-slide-to="{{$i}}"></li>
		@endfor
	</ol>
	<!-- Carousel indicators (E) -->
</section>
<!-- Slider (E) -->