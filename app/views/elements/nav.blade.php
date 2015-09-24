<!-- Navigation (S) -->
<section id="ccr-nav-main">
	<nav class="main-menu">
		<div class="container">

			<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-main">
			            <i class="fa fa-bars"></i>
		          	</button>
			</div>

			<div class="collapse navbar-collapse ccr-nav-main">
				<ul class="nav navbar-nav">
					@foreach ($menus as $menu)
						<?php $childs = $menu->childs(); ?>
						@if ($childs->count())
							<li class="dropdown">
								<a href="{{$menu->url}}">{{$menu->name}} <i class="fa fa-caret-down"></i></a>
								<ul class="sub-menu">
						          	@foreach ($childs as $item)
						          		<li><a href="{{$item->url}}">{{$item->name}}</a></li>
						          	@endforeach
						        </ul>
							</li>
						@else
							<li><a class="active" href="{{$menu->url}}">{{$menu->name}}</a></li>
						@endif
					@endforeach
				</ul>
			</div>

		</div>
	</nav>
</section>
<!-- Navigation (E) -->