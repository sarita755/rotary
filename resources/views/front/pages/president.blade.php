@extends('front.layouts.sub')


    @section('content')
   
        <!-- <div class="container">
              <a href="http://rotary.org.np" style="color:blue;">Home</a>   >   Past presidents <br> <br>
             
             <h1 align="center" style="color:black;"> Past Presidents</h1> <br>
             
        @foreach ($pastpres as $pastpre)
                            <h2 class="entry-title">  </h2>
                            <h1 style=" background-color: gray; color: white;font-size:20px;" align="center">
                                Ri Year-{{$pastpre->ri_year}}</h1>
                             <br><br>
                               
                                <div class="row"> 
                                <br>
       
                                   <div class="col-sm-4" align="center">
                                        <img   width="175px"  src="{{asset('image/president/'.$pastpre->image1)}}"  class="img-thumbnail img-responsive">
                                        
                                            <p align="center">
                                              {{$pastpre->pre_name }}<br>
                                            <small align="center">
                                             President
                                            </small> 
                                            </p>
                                       
                                   </div>

                                  <div class="col-sm-4" align="center">
                                         
                                           <img  src="{{asset('image/president/'.$pastpre->image2)}}" width="175px" height="225px"  class="img-thumbnail img-responsive">
                                        
                                            <p align="center">
                                              {{$pastpre->sec_name }}<br>
                                            <small align="center">
                                             Secretary
                                            </small> 
                                            </p>
                                        </div>

                                <div class="col-sm-4" align="center">
                                       <img  src="{{asset('image/president/'.$pastpre->image3)}}" width="275px" height="225px"  class="img-thumbnail img-responsive">
                                        
                                            <p align="center">
                                              
                                            <small align="center">
                                             Theme of Year
                                            </small> 
                                            </p>
                                    
                                    
                                </div>
        
                               </div>
                                <hr>
                               
                               
                               
                                
                                
                            @endforeach
                            </div>-->
                            <br>     <br>    <br>    <br>

  <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Past Presidents</li>
				</ul>
			</div>
		</div>
  </section>

         <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Past Presidents of Rotary Club of Butwal<span class="ion-minus"></span></h2>
            </div> 
        </div>
    
      <div class="container">
        <div class="row">
        @foreach ($pastpres as $pastpre)
				  <div class="column col-sm-3">
				  <div class="past">
                        <a href="#"><img src="{{asset('image/president/'.$pastpre->image1)}}"  alt=""
                                class="img-thumbnail img-fluid" /></a>
                                <h4><a href="#">{{$pastpre->pre_name }}</a></h4>
                        <h5>{{$pastpre->sec_name }} {{$pastpre->ri_year}}</h5><p>
                                <div class="pre">
                                <div class="row">
                                <div class="col-md-6">
                                <a href="#"><img src="{{asset('image/president/'.$pastpre->image2)}}" height="100px" width="100px" alt="" class="img-thumbnail img-fluid" /></a>
                                </div>
                                <div class="col-md-6">
                                <a href="#"><img src="{{asset('image/president/'.$pastpre->image3)}}" height="100px" width="100px" alt="" class="img-thumbnail img-fluid" /></a>
                                </div>
                                </div>
                               </div>
                    </div>
                    </div>
                    @endforeach
					 <!--<div class="column col-sm-3">
					 <div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                        <h4><a href="#">Rtn. SUnil Shrestha</a></h4>
                        <p>President</p>
                    </div>
					</div>
                    <div class="column col-sm-3">
					<div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}"  alt=""
                                class="img-thumbnail img-fluid" /></a>
                                <h4><a href="#">Rtn. SUnil Shrestha</a></h4>
                                <p>President</p>
                    </div>
                    </div>
                    <div class="column col-sm-3">
					           <div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                                <h4><a href="#">Rtn. SUnil Shrestha</a></h4>
                                <p>President</p>
                    </div>
                    </div>-->
					</div>
        </div>



      @endsection






