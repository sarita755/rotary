@extends('front.layouts.sub')


    @section('content')
    
   <!-- <br> <br>
    <h1 align="center" style="color:blue;"> President Councils</h1> <br>
    

<h1 align="center" style="color:black;"> President Councils</h1> <br>

         <div class="container">
        @foreach ($councils as $council)
                           
                                 <div class="row"> 
                                <br>
       
                                   <div class="col-sm-4" align="center">
                                        <img   width="175px"  src="{{asset('image/council/'.$council->image)}}"  class="img-thumbnail img-responsive">
                                        
                                            <p align="center">
                                               {{$council->name}}<br>
                                            <small align="center">
                                              {{$council->title}}
                                            </small> 
                                            </p>
                                       
                                   </div>
                                   
                                   
                           
                            @endforeach
                            </div>
                           
                            
                            
                             <br> <br>-->
                            
                            
  <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Past Presidential Council</li>
				</ul>
			</div>
		</div>
  </section>                      

  <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span> Presidential Council of Rotary Club of Butwal<span class="ion-minus"></span></h2>
            </div> 
        </div>                       

  <div class="container">
      <div class="row">
      @foreach ($councils as $council)
      <div class="column col-sm-3">
					 <div class="pastpre">
                        <a href="#"><img src="{{asset('image/council/'.$council->image)}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                        <h4><a href="#"><center>{{$council->name}}</center></a></h4>
                        <h5><center>({{$council->Designation}} {{$council->year}})</center></h5><p><center>{{$council->post}}</center></p>
                    </div>
          </div>
          @endforeach
         <!-- <div class="column col-sm-3">
					 <div class="pastpre">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                        <h4><a href="#"><center>Rtn. SUnil Shrestha</center></a></h4>
                        <h5><center>(President 1994-95)</center></h5><p><center>Member</center></p>
                    </div>
					</div>
          <div class="column col-sm-3">
					 <div class="pastpre">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                        <h4><a href="#"><center>Rtn. SUnil Shrestha</center></a></h4>
                        <h5><center>(President 1994-95)</center></h5><p><center>Member</center></p>
                    </div>
					</div>
          <div class="column col-sm-3">
					 <div class="pastpre">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                        <h4><a href="#"><center>Rtn. SUnil Shrestha</center></a></h4>
                        <h5><center>(President 1994-95)</center></h5><p><center>Member</center></p>
                    </div>
					</div>-->
      </div>
      
  </div>               
                            
                            
      @endsection






