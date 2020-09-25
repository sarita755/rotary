@extends('front.layouts.sub')


@section('content')






   <!-- <div class="container">
        <a href="http://rotary.org.np" style="color:blue;">Home</a>   >   BOD <br> <br>
        <h1 align="center" style="color:black;">  BOD Members</h1> <br>





    <div class="row">
        @foreach($Presidents as $President)
        <div class="col-sm-4"></div>

        <div class="col-sm-5" align="center"> 
                    <img  src="{{asset('image'.$President->image)}}"  width="70px" height="70px;"> 
        
            <h5 align="center">{{ $President->name }}<br>


            <small align="center">
                         {{ $President->title }}
                  </small>
        </div>

        <div class="col-sm-3"></div>
        @endforeach
    </div>




            <div class="row" align="center">
                @foreach($bods as $bod)
                <div class="col-sm-3"> <img  src="{{asset('image/'.$bod->image)}}"  width="160px" height="180px;" class="img-thumbnail" border-color="red";>
                   


                    <p> </ p>
                    
                    <h5 align="center">
                         {{ $bod->name }} <br>
                           <small align="center">
                             {{ $bod->title }}
                            </small> 
                           </h5>
                    
                    
                </div>
                @endforeach

            </div>-->
            <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">BOD</li>
				</ul>
			</div>
		</div>
  </section>
  <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Board of Directories<span class="ion-minus"></span></h2>
            </div> 
        </div>

    <div class="container">
        <div class=row>
        
                       <div class="imagecontainer">
                       @foreach($Presidents as $President)
                       <div class=" column col-sm-8">
                       
                        <a href="#"><img src="{{asset('image/'.$President->image)}}" height="50px" alt="" 
                                class="img-thumbnail img-responsible" /></a>
                                <h4><a href="#"><center>{{$President->name}}</center></a></h4>
                                <p> <center> {{$President->title}}</center></p>
                         
                        </div>
                        @endforeach
                        </div>  
                   
        </div>
    
      <div class="row">
      @foreach($bods as $bod)
				  <div class="column col-sm-3">
				  <div class="bod">
                        <a href="#"><img src="{{asset('image/'.$bod->image)}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                                <h4><a href="#"><center>{{$bod->name}}</center></a></h4>
                                <p><center>{{$bod->title}}</center></p>
                                
                    </div>
					</div>
                    @endforeach
					<!-- <div class="column col-sm-3">
					 <div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
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
                    </div>
                    <div class="column col-sm-3">
					           <div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                                <h4><a href="#">Rtn. SUnil Shrestha</a></h4>
                                <p>President</p>
                    </div>
                    </div>
					</div>

          <div class="row">
				  <div class="column col-sm-3">
				  <div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
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
					</div>
                    <div class="column col-sm-3">
					<div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
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
                    </div>
					</div>

          <div class="row">
				  <div class="column col-sm-3">
				  <div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
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
					</div>
                    <div class="column col-sm-3">
					<div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
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
                    </div>
					</div>

          <div class="row">
				  <div class="column col-sm-3">
				  <div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
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
					</div>
                    <div class="column col-sm-3">
					<div class="member">
                        <a href="#"><img src="{{asset('image/media/SunilShrestha.jpg')}}" alt=""
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
                    </div>
					</div>-->
      

  
  
</div>






        <br>
     <br>
    <br>


@endsection














