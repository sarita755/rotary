@extends('front.layouts.sub')


    @section('content')

    <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="{{route('index')}}">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Project</li>
				</ul>
			</div>
		</div>
  </section><br>
    <div class="container">
    <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Project Name<span class="ion-minus"></span></h2>
            </div> 
        </div>
  <!-- <div class="container">
      <div class=wrapper>
      
        <div class="col-md-10">
         <center><img src="{{asset('image/project/'.$project->image)}}" alt="" style="height:400px;"  class="img-fluid"></center>
      </div><br>
        <div class="col-md-8">
        <p>{{$project->date}}</p>
        <p>{{  html_entity_decode(strip_tags($project->Description)) }}</td></p>
        <div class="three-grids-columns">
                        <p class="spacing-none">{{  html_entity_decode(strip_tags($project->Description)) }}</p>
                    </div>
        </div>
      </div>
    </div>
    </div>-->
    <div class="container">
      <div class="row">
         <div class="col-md-8">
         <center><img src="{{asset('image/project/'.$project->image)}}" alt="" style="height:400px;"  class="img-fluid"></center>
          </div>
          </div><br><br>
          <div class="row">
          <div class="middle-section">
          <div class="col-md-4">
          <p>{{$project->date}}</p>
          <p class="spacing-none">{{  html_entity_decode(strip_tags($project->Description)) }}</p>

          </div>
          <div class="two-columns">
                        <div class="three-grids-columns">
                        <p class="spacing-none">{{  html_entity_decode(strip_tags($project->Description)) }}</p>

                        </div>
                        <div class="three-grids-columns">
                        <p class="spacing-none">{{  html_entity_decode(strip_tags($project->Description)) }}</p>

                        </div>
                    </div>
          
          </div>
      </div>
    </div>
  @endsection