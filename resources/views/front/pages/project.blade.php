@extends('front.layouts.sub')


    @section('content')

    <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Project</li>
				</ul>
			</div>
		</div>
	</section>

    <section class="w3l-services-1">
		<div class="services1">
			<div class="wrapper">
					
				<h3 class="title-main">Project</h3>
				<p class="sub-title">The different project which is related to Rotary Club .</p>
					
				<div class="services1-content">
                   @foreach($projects as $project)
					<div class="column">
						<a href="{{route('singleproject', $project->id)}}">
							<img src="{{asset('image/project/'.$project->image)}}" alt="" class="img-responsive" />
							<div class="service-info">
								<span>{{$project->date}}</span>
								<h4>{{$project->name}}</h4>
								<p>{{  html_entity_decode(strip_tags(str_limit($project->Description,50))) }}</td></p>

								<a href="{{route('singleproject', $project->id)}}" class="button">Read More</a>
							</div>
						</a>
					</div>
					@endforeach
					<!--<div class="column">
						<a href="blog-single.html">
							<img src="{{asset('image/water.jpg')}}" alt="" class="img-responsive" />
							<div class="service-info">
								<span>Aug 15, 2019</span>
								<h4>Ut labore et dolore</h4>
								<p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt
									ut.</p>
								<a href="blog-single.html" class="button">Read More</a>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="blog-single.html">
							<img src="{{asset('image/water.jpg')}}" alt="" class="img-responsive" />
							<div class="service-info">
								<span>Aug 20, 2019</span>
								<h4>Duis aute irure dolor</h4>
								<p>Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
									commodo.</p>
								<a href="blog-single.html" class="button">Read More</a>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="blog-single.html">
							<img src="{{asset('image/water.jpg')}}" alt="" class="img-responsive" />
							<div class="service-info">
								<span>Aug 28, 2019</span>
								<h4>In voluptate velites</h4>
								<p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt
									ut.</p>
								<a href="blog-single.html" class="button">Read More</a>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="blog-single.html">
							<img src="{{asset('image/water.jpg')}}" alt="" class="img-responsive" />
							<div class="service-info">
								<span>Sep 03, 2019</span>
								<h4> Excepteur sint occaecat</h4>
								<p>Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
									commodo.</p>
								<a href="blog-single.html" class="button">Read More</a>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="blog-single.html">
							<img src="{{asset('image/water.jpg')}}" alt="" class="img-responsive" />
							<div class="service-info">
								<span>Sep 06, 2019</span>
								<h4>mollit anim id laborum</h4>
								<p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt
									ut.</p>
								<a href="blog-single.html" class="button">Read More</a>
							</div>
						</a>
					</div>-->
				</div>
			</div>
		</div>
	</section>
     
    @endsection