@extends('front.layouts.sub')


    @section('content')

         <!-- <div class="container">
             <a href="http://rotary.org.np/" style="color:blue;">Home</a>> Members <br> <br>
               <h1 align="center" style="color:black;"> Rotary Members</h1> <br><br><br>
                 <!--<div class="row">
                       @foreach($members as $member)
                    <div class="col-sm-3">
                       <div class="thumbnail" style="height="150px; ">
                           <table>
                           <tr>
                               <td><img  src="{{asset('image/member/'.$member->image)}}"  width="120px" height="150px;">
                               <img  src="{{asset('image/member/'.$member->image1)}}"  width="120px" height="150px;"> </td> </tr> </table>
                        <div class="caption text-center">
                           

                          <h4>   {{str_limit($member->name)}}</td> </h4>
                            <p> Member ID:   {{str_limit($member->Ri_id, 20)}}</td> </p>
                            <p> Degination:   {{str_limit($member->Degination, 20)}}</td> </p>
                          <p> Address:   {{str_limit($member->address, 20)}}</td> </p>
                          <p> Email: {{str_limit($member->email, 20)}}</td></p>
                          <p> Phone:  {{str_limit($member->phone, 12)}}</td></p>
                            <p> Mobile:  {{str_limit($member->Mobile, 12)}}</td></p>
                            <p> Spouse:  {{str_limit($member->Spouse, 12)}}</td></p>

                          <br>


                         </div>
                    </div>
               </div>
                  @endforeach
                 <br> <br> <br> <br>
            </div>
          </div>-->
          <br> <br>

   
   <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Members</li>
				</ul>
			</div>
		</div>
  </section>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Members<span class="ion-minus"></span></h2>
            </div> 
        </div>
      <div class="container">
    
             <div class="row">
             @foreach($members as $member)
             <div class="column col-sm-3">
					 <div class="member">
                        <a href="{{route('singlemember', $member->id)}}"><img src="{{asset('image/member/'.$member->image)}}" alt=""
                                class="img-thumbnail img-fluid" /></a>
                        <h4><center><a href="{{route('singlemember', $member->id)}}">{{$member->name}}</a></center></h4>
                        <p><center>{{$member->Degination}}</center>
                        <a href="{{route('singlemember', $member->id)}}" class="btn btn-danger btn-xs">Read More</a>
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

  
  <br><br>
@endsection
