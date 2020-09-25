@extends('front.layouts.main')


   @section('content')

    <!-- covers -->

    <section class="w3l-covers-9-main">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
      <div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <ol class="carousel-indicators">
    @foreach ($sliders as $key => $slider)
      <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key ===0?'active':'' }}"></li>
  @endforeach
      <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    
    <div class="carousel-inner">
    @foreach ($sliders as $key => $slider)
      <div class="item {{ $key === 0 ? 'active' : '' }}">
        <img src="{{asset('image/media/'.$slider->image )}}"  alt="Chicago" style="width:100%;">
      </div>
  @endforeach
     
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
   

  </div>
</div>

    </section>
    
    
    <!-- //covers -->
		
    <section class="w3l-grids-6">
        <!-- grids -->
		<div class="container">
        <div class="grids-layout">
            <div class="wrapper">
                <h3 class="title-main">Theme For Year</h3></br>
               
               <div class="row">
                   @foreach($themes as $theme)
                   <div class="col-md-3">
                    <div class="gd-innf">
                        <a href="single.html"><img class="img-responsive" src="{{asset('image/theme/'.$theme->image1)}}"  alt="image"></a>
                        <center><h4><a href="single.html" class="vv-link">{{$theme->title}}</a></h4></center>
                    </div>
                    </div>
                    @endforeach
                    </div>
                
                
            </div>
        </div>
        </div>
        <!-- //grids -->
    </section>
	
    
    <!-- Call to action 29 block -->
    <section class="w3l-call-to-action-29">
	<div class="container">
        <div class="cal-action-29">
            <div class="wrapper">
                <div class="action-main-29 align-center">
                    <h4 class="cal-action-text-29">
                        <a href="book.html">About Rotary Club Of Butwal </a>
                    </h4>
                    <p class="sub-paragraph actioncall-29"> Solving real problems takes real commitment and vision. For more than 110 years, Rotary's people of action have used their passion, energy, and intelligence to take action on sustainable projects. From literacy and peace to water and health, we are always working to better our world, and we stay committed to the end.</p>
                    <a href="{{route('getintro')}}" class="buttonbg"> Read More </a>
                </div>
            </div>
        </div>
		</div>
    </section>
    <!-- //Call to action 29 block -->
    <!-- call to action 19 -->
	
			<section class="w3l-grids-6">
			<div class="container">
       
        <div class="grids-layout">
            <div class="wrapper">
                <h3 class="title-main">Message from Leaders</h3></br>
                <div class="d-grid grid-column-3">
				@foreach($leadermessages as $leadermessage)
                <div class="nail">
                <div class="gd-innf">
                        <a href="{{route('singlemessage', $leadermessage->id)}}"><img class="img-responsive img-fluid" src="{{asset('image/leadermessage/'.$leadermessage->image)}}"   alt="image"></a>
                        <h3><center><a href="{{route('singlemessage', $leadermessage->id)}}" class="vv-link">{{$leadermessage->post}}</a></center></h3>
                        <p class=><center>{{$leadermessage->name}}</center> </p>
                        <p><center>{{  html_entity_decode(strip_tags(str_limit($leadermessage->Message,40))) }}</center></td></p>
                        <a href="{{route('singlemessage', $leadermessage->id)}}" class="read">Read More</a>
                    </div>
                    </div>
               @endforeach 
                   
                
            </div>
        </div>
        </div>
		
        
    </section>

    <section class="w3l-products-1">
        <div class="products1">
            <div class="wrapper">
			<h3 class="title-main">Rotary six area focus</h3></br>
                
				
				<div class="row">
                @foreach ($articles as $article)
				  <div class="column col-sm-2">
				  <div class="thumbnail">
                        <a href="#"><img src="{{asset('image/article/'.$article->image)}}"  alt=""
                                class=" img-fluid" /></a>
                                
                        <span>{{$article->title}}</span>
                        
                    </div>
					</div>
                    @endforeach
					 
					</div>
				
				
            </div>
        </div>
        
    </section>

    

   
	
    <!-- //products1 -->
    <!-- specifications -->
    <section class="w3l-specifications-9">
        <div class="main-w3">
            <div class="wrapper">
                <div class="d-flex main-cont-wthree-fea">
                    
					
                    <div class="grids-speci midd-eff-spe">
                        <h3 class="title-spe">26 Years</h3>
                        <p>of Service</p>
                    </div>
                    <div class="grids-speci">
                        <h3 class="title-spe">110</h3>
                        <p>Members</p>
                    </div>
					 <div class="grids-speci">
                        <h3 class="title-spe">17</h3>
                        <p>Project</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //specifications -->
    </section>
	
	
					<script>

					(function(){
					  // setup your carousels as you normally would using JS
					  // or via data attributes according to the documentation
					  // https://getbootstrap.com/javascript/#carousel
					  $('#carousel123').carousel({ interval: 2000 });
					  $('#carouselABC').carousel({ interval: 3600 });
					}());

					(function(){
					  $('.carousel-showmanymoveone .item').each(function(){
						var itemToClone = $(this);

						for (var i=1;i<4;i++) {
						  itemToClone = itemToClone.next();

						  // wrap around if at end of item collection
						  if (!itemToClone.length) {
							itemToClone = $(this).siblings(':first');
						  }

						  // grab item, clone, add marker class, add to collection
						  itemToClone.children(':first-child').clone()
							.addClass("cloneditem-"+(i))
							.appendTo($(this));
						}
					  });
					}());




					</script>
						
	
			<!--  Member Clock -->
			<section class="w3l-teams-32-main">
				<div class="teams-32">
					<div class="wrapper">
						<h3 class="title-main">Our Wonderful Team</h3>
							 <div class="row">
									<div class="col-sm-12">
									  <div class="carousel carousel-showmanymoveone slide" id="carousel123">
										<div class="carousel-inner">
										  @foreach($members->chunk(3) as $collectionkey => $memberscollection)
										  <div class="item {{ $collectionkey === 0 ? 'active' : '' }}">
										      @foreach($memberscollection as $key => $member)
    											<div class="col-sm-4" style="min-height: 400px; max-height: 400px; background: #004085; color: #fff; padding: 20px; {{ $key > 0 ? 'border-left: 1px solid #fff' : '' }}">
   											        <center>
											            <img src="{{asset('image/member/'.$member->image)}}" height="150px">
											           <div style="min-height: 80px; max-height: 80px;">
    										            <a href="#" style="color: #fff; font-size: 25px;">{{ $member->name }}</a>
										                <h5>{{ $member->Degination }}</h5>
										            </div>
											        </center>
										            <hr>
											        <div style="min-height: 120px; max-height: 120px;">
											            <h5>Address   : {{ $member->address }}</h5>
											            <h5>Mobile No.: {{ $member->Mobile }}</h5>
											            <h5>Phone No. : {{ $member->phone }}</h5>
											            <h5>Email     :{{ $member->email }}</h5>
											        </div>
    											 </div>
										      @endforeach
										  </div>
										  @endforeach
										</div>
										<a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
										<a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
									  </div>
									</div>
								  </div>				
					</div>
				</div>
			</section>
			<!-- //teams 32 block -->
	
	
	
	
    <!-- w3l-customers-7 -->
    
    
    <section class="w3l-services-1">
		<div class="services1">
			<div class="wrapper">
            <h3 class="title-main">Project</h3><br><br>
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
					
			</div>
		</div>
	</section>

    @endsection
	
	
   