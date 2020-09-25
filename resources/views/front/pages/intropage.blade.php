@extends('front.layouts.sub')


    @section('content')
     <!-- <div class="container">
           <a href="http://rotary.org.np" style="color:blue;">Home</a>   > Introduction  <br> <br><br> <br>
           

<h1 align="center" style="color:black;"> Introduction </h1> <br>
                 
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
	<!-- //covers -->
	<!-- w3l-content-23 block -->
	<!--<div class="row">
	<div class="w3l-content-with-photo-15">
		 @foreach($abouts as $about)
	
		<div class="content-photo">
			<div class="wrapper ">
       
				<div class="d-grid ">
					<div class="content-left-sec thumb">
						<a href="single.html"><img src="{{asset('image/about/'.$about->image)}}"  class="img img-responsive img-fluid"
                alt=""></a>
                <h4><a href="#">{{$about->title}}</a></h4>					
              </div>
					<div class="content-photo-left">
						<h4>Who we are</h4>
        </p>{{$about->Description}}</p>
						
					</div>
        </div>
        @endforeach
			</div>
		</div>
		
  </div>
  
  <section class="w3l-content-23">
		<div id="content23-block">
			<div class="wrapper">
				
				<div class="d-grid content23-col-2 text-center">
					<div class="content23-grid back-cont-1">
						<div class="content-texts">
							<h4><a href="book.html">CLUB SUMMARY</a></h4>
							<p>Charter Date: 10th Feb 2010.<br>
                 Charter President: Rtn.Sunil Shrestha.<br>
                 Charter Member: 26 Members.<br>
                 District: Rotary International District 32905, Nepal.<br>
                 Current Members: 31 Members
              </p>
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
					<div class="grids-speci">
						<h3 class="title-spe">36</h3>
						<p>Countries</p>
					</div>
					<div class="grids-speci midd-eff-spe">
						<h3 class="title-spe">15 Years</h3>
						<p>of Experience</p>
					</div>
					<div class="grids-speci">
						<h3 class="title-spe">950</h3>
						<p>Airlines</p>
					</div>
				</div>
			</div>
		</div>
		
  </section>
  <br>
  
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
		<!--<div class="header">
		<h2 class ="one"><center>Know More About Us</center></h2>

		<div class="row">
		@foreach($abouts as $about)
			<div class="service-header">
				<div class="col-md-12">
					<div class="col-md-4">
						<a href="#"><img src="{{asset('image/about/'.$about->image)}}"  width="350px" height="351px"></img>
						<h4><a href="#">{{$about->title}}</a></h4>
					</div>
					<div class="col-md-6">
						<p class="intr"><p>{{  html_entity_decode(strip_tags(($about->Description))) }}</p>
					</div>
				</div>
			</div>


		</div>
		@endforeach
		</div>
	</div>-->

	

	<section class="w3l-text-14">
        <div id="text14-block">
            <div class="wrapper">
                <div class="text14-max-align">
                    <h5 class="text14-heading">{{$about->title}}</h5>
                    <div class="align-text14-cols">
					@foreach($abouts as $about)
                        <div class="text14-right">
                            <img src="{{asset('image/about/'.$about->image)}}" alt="" class=" img-responsive img-thumbnail img-fluid" />
							<h4><center><a href="#">{{$about->name}}</a></center></h4>
                        </div>
                        <div class="text14-left">
                            <p>{{  html_entity_decode(strip_tags(($about->Description))) }}</p>
                            
                        </div>
						@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="w3l-text-15">
        <div id="text15-block">
            <div class="wrapper">
                <div class="text15-max-align">
                    <h5 class="text15-heading">Club Roaster</h5>
                    <p class="text15-para">With the motto of service above self, Rotary club of Kakarvitta was chartered in the year 2010. Club now have 31 members & is 100% PHF Club. Rotary Club of Kakarvitta has served the community and people in the different aspects. Also Rotary club of Kakarvitta is the first to welcome all the Rotarian from the globe who enters Nepal from its Eastern gate.</p>
                    <div class="align-text15-cols">
                        <div class="text15-left">
                           
                            <div class="text15-list">
                                <li>Charter Date: 10th Feb 2010</li>
                                <li>Charter President:  Rtn Sunil Shrestha</li>
                                <li>Charter Member: 100 Members</li>
                                <li>District: Rotary International District 32905, Nepal & Bhutan</li>
                                <li>Current Members: 100 Members</li>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!--<section class="w3l-text-14">
        <div id="text14-block">
            <div class="wrapper">
                <div class="text14-max-align">
                    <h5 class="text14-heading">{{$article->title}}</h5>
                    <div class="align-text14-cols">
					@foreach($articles as $article)
                        <div class="text14-right">
                            <img src="{{asset('image/article/'.$article->image)}}" alt="" class=" img-responsive img-thumbnail img-fluid" />
							<h4><center><a href="#">{{$article->title}}</a></center></h4>
                        </div>
                        <div class="text14-left">
                            <p>{{  html_entity_decode(strip_tags(($article->Description))) }}</p>
                            
                        </div>
						@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>-->

	<!--<section class="w3l-specifications-9">
		<div class="main-w4">
			<div class="wrapper">
				<div class="d-flex main-cont-wthree-fea">
        <a href="single.html"><img src="{{asset('image/media/Rotary6.png')}}" class="img img-responsive img-fluid"
                alt=""></a>
				</div>
			</div>
		</div>
		
	</section>-->
	
      @endsection



