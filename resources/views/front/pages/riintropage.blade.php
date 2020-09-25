@extends('front.layouts.sub')


    @section('content')
      <!--<div class="container">
           <a href="http://rotary.org.np" style="color:blue;">Home</a> >   Introduction <br>
           

    <h1 align="center" style="color:black;">Rotary International </h1> <br>
     
         @foreach ($articles as $article)
                                {{  html_entity_decode(strip_tags($article->Description)) }}
                            @endforeach
       
      </div>-->
      

  
	<!-- inner banner -->
	<section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Introduction</li>
				</ul>
			</div>
		</div>
	</section>
	
	<!--<div class="w3l-content-with-photo-15">
		
		<div class="content-photo">
			<div class="wrapper">
				<div class="d-grid">
					<div class="content-left-sec">
						<a href="single.html"><img src="assets/images/about3.jpg" class="img img-responsive img-fluid"
								alt=""></a>
					</div>
					<div class="content-photo-left">
						<h4>We are Explore</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.</p>
						<div class="content-photo-grid">
							<div class="content-photo-bot1">
								<h5><a href="single.html"><span class="fa fa-check-circle-o"
											aria-hidden="true"></span>First
										Class Flights</a></h5>
							</div>
							<div class="content-photo-bot1 content-photo-gap">
								<h5><a href="single.html"><span class="fa fa-check-circle-o"
											aria-hidden="true"></span>Inclusive Packages</a></h5>
							</div>
							<div class="content-photo-bot1">
								<h5><a href="single.html"><span class="fa fa-check-circle-o"
											aria-hidden="true"></span>+120
										Premium city tours</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
  </div>
  
  <section class="w3l-content-23">
		<div id="content23-block">
			<div class="wrapper">
			
				<div class="d-grid content23-col-2 text-center">
					<div class="content23-grid back-cont-1">
						<div class="content-texts">
							<h4><a href="book.html">You plan, we help</a></h4>
							<p>Travel means more than just getting there. You might need a hotel room and ect., Sleep
								easy,
								we'll work everything out together.</p>
						</div>
					</div>
					<div class="content23-grid back-cont-2">
						<div class="content-texts">
							<h4><a href="book.html">We care about you</a></h4>
							<p>No matter where you are, no matter what goes wrong, we're here to support you with our
								experience. We're only a phone call away. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="w3l-specifications-9">
		<div class="main-w3">
			<div class="wrapper">
				<div class="d-flex main-cont-wthree-fea">
        <a href="single.html"><img src="{{asset('image/media/Rotary6.png')}}" class="img img-responsive img-fluid"
                alt=""></a>
				</div>
			</div>
		</div>
		
	</section>-->
	<div class="container">
		<div class="header">
		<h2 class ="one"><center>Rotary International</center></h2>
		<div class="row">
		@foreach($articles as $article)
			<div class="col-md-12">
			
				<div class="col-md-8">
					<p class="intr">{{  html_entity_decode(strip_tags(($article->Description))) }}</p>
				</div>
				<div class="col-md-4">
				<img src="{{asset('image/article/'.$article->image)}}" width="350px" height="150px"></img>
				</div>
			</div>
			@endforeach
		</div>
		</div>
	</div>
	<div class="container">
		<div class="header">
			<div class="row">
				<div class="service">
					<div class="col-md-12">
						<div class="part">
						  <h2>The Object Of Rotary</h2>
							<div class="col-md-6">
								<p>The object of Rotary is to encourage and foster the ideal of service as a basis of worthy enterprise and, in particular, to encourage and foster:</p>
								<h4>First</h4>
								<p>The development of acquaintance as an opportunity for service;</p>
								<h4>Second</h4>
								<p>High ethical standards in business and professions; the recognition of worthiness of all useful occupations; and the dignifying by each Rotarian of his occupation as an opportunity to serve society;</p>
								<h4>Third</h4>
								<p>The application of the ideal of service by every Rotarian to his personal, business, and community life;</p>
								<h4>Fourth</h4>
								<p>The advancement of international understanding, goodwill, and peace through a world fellowship of business and professional persons united in the ideal of service.
									<span>The Fourth Object of Rotary has a connection to Prince Edward Island. It was Denned by Donald MacRae. He was born in 1872 in Canoe Cove right here on Prince Edward Island. He went to Dalhousie University on a scholarship, graduating with high honours in classics and the University Medal. He then spent six years at Cornell University, teaching Greek and earning his PhD. After a position at Princeton, he returned to Canada to study law at Osgoode Hall in Toronto and was called to the bar in 1913. Just one year later he accepted an appointment as Dean of the Law School at Dalhousie University, a position he held until 1924, when he returned to Osgoode Hall as a full-ume lecturer. He retired in 1944 and died in 1957.</span>
									As an active Rotarian, in June 1918, he proposed that Rotary become an agent for the promotion of goodwill and peace among nations – the first time that this vision of Rotary was expressed publicly. In 1921, as chair of Rotary’s Constitution and By-laws Committee, MacRae had an opportunity to incorporate this vision into the constitution of Rotary. He presented a resolution to the International Convention in Edinburgh, Scotland, that amended the constitution by adding the Fourth Object of Rotary. The Fourth Object became the engine that drives Rotary’s international service; indeed, it has become the watchword of the Rotary Foundation.
								</p>
							</div>
							<div class="col-md-6">
							<div class="part1">
							<h2>Objectives of Rotary</h2>
							<p>The object of Rotary is to encourage and foster the ideal of service as a basis of worthy enterprise and, in particular, to encourage and foster:</p>
								<h4>First</h4>
								<p>The development of acquaintance as an opportunity for service;</p>
								<h4>Second</h4>
								<p>High ethical standards in business and professions; the recognition of worthiness of all useful occupations; and the dignifying by each Rotarian of his occupation as an opportunity to serve society;</p>
								<h4>Third</h4>
								<p>The application of the ideal of service by every Rotarian to his personal, business, and community life;</p>
								<h4>Fourth</h4>
								<p>The advancement of international understanding, goodwill, and peace through a world fellowship of business and professional persons united in the ideal of service.
									<span>The Fourth Object of Rotary has a connection to Prince Edward Island. It was Denned by Donald MacRae. He was born in 1872 in Canoe Cove right here on Prince Edward Island. He went to Dalhousie University on a scholarship, graduating with high honours in classics and the University Medal. He then spent six years at Cornell University, teaching Greek and earning his PhD. After a position at Princeton, he returned to Canada to study law at Osgoode Hall in Toronto and was called to the bar in 1913. Just one year later he accepted an appointment as Dean of the Law School at Dalhousie University, a position he held until 1924, when he returned to Osgoode Hall as a full-ume lecturer. He retired in 1944 and died in 1957.</span>
									As an active Rotarian, in June 1918, he proposed that Rotary become an agent for the promotion of goodwill and peace among nations – the first time that this vision of Rotary was expressed publicly. In 1921, as chair of Rotary’s Constitution and By-laws Committee, MacRae had an opportunity to incorporate this vision into the constitution of Rotary. He presented a resolution to the International Convention in Edinburgh, Scotland, that amended the constitution by adding the Fourth Object of Rotary. The Fourth Object became the engine that drives Rotary’s international service; indeed, it has become the watchword of the Rotary Foundation.
								</p>

						</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<br>
	<section class="w3l-specifications-9">
		<div class="main-w4">
			<div class="wrapper">
				<div class="d-flex main-cont-wthree-fea">
        <a href="single.html"><img src="{{asset('image/media/Rotary6.png')}}" class="img img-responsive img-fluid"
                alt=""></a>
				</div>
			</div>
		</div>
		
	</section>
		
	
      @endsection



