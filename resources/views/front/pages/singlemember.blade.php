@extends('front.layouts.sub')


    @section('content')

    <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="{{route('index')}}">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Members</li>
				</ul>
			</div>
		</div>
  </section><br>
  <div class="header-most-top hidden-md">
		<div class="container">
		{{$member->name}}<br>
        {{$member->Degination}}
	</div>
	
</div>

  <section class="w3l-teams-single-9">
        <!-- team single--> 
        <div class="team-single">
            <div class="wrapper">
                   
                <div class="main-grid d-grid">
                    <div class="team-grids-single">
                    <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('image/member/'.$member->image)}}" class="img-responsive img-thumbnail img-fluid" style="height:250px;" alt="">
                        <h4><center><a href="#">{{$member->name}}</center></h4>
                        <p><center>{{$member->Degination}}</center></p>
                    </div>
                    <div class="col-md-5">
                    <img src="{{asset('image/member/'.$member->image1)}}" class="img-responsive img-thumbnail img-fluid" style="height:250px;" alt="">
                    <p><center>Spoush</center></p>
                    </div>
                    </div>
                    </div>
                    <h3 class="title-wthree-tem">Member Details</h3><br>
                    <div class="team-grids-single">
                        
                      
                       <!-- <table style="width:100%">
                        
                            <h4>   {{str_limit($member->name)}}</td> </h4>
                            <p class="para"> Member ID:   {{str_limit($member->Ri_id, 20)}}</td> </p>
                            <p class="para"> Degination:   {{str_limit($member->Degination, 20)}}</td> </p>
                            <p class="para"> Address:   {{str_limit($member->address, 20)}}</td> </p>
                            <p class="para"> Email: {{str_limit($member->email, 20)}}</td></p>
                            <p class="para"> Phone:  {{str_limit($member->phone, 12)}}</td></p>
                            <p class="para"> Mobile:  {{str_limit($member->Mobile, 12)}}</td></p>
                            <p class="para"> Spouse:  {{str_limit($member->Spouse, 12)}}</td></p>
                            <p class="para"><img  src="{{asset('image/member/'.$member->image1)}}"  width="120px" height="150px;"> </td></p>


                          <br>
                            </table>-->

                            
                        <table class="table table-bordered" style="width:500px;">
                           <tr>
                               <th>Member ID:</th>
                               <td>{{$member->Ri_id}}</td>
                           </tr>
                           <tr>
                               <th>Professional:</th>
                               <td>{{$member->Work}}</td>
                           </tr>
                           <tr>
                                <th>Address:</th>
                                <td>{{$member->address}}</td>
                           </tr>
                           <tr>
                                <th>Email:</th>
                                <td>{{$member->email}}</td>
                           </tr>
                           <tr>
                                 <th>Date Of Birth:</th>
                                <td>{{$member->date}}</td>
                            </tr>
                            <tr>
                                  <th>Spouse:</th>
                                  <td>{{$member->Spouse}}</td>
                            </tr>
                            
                             <tr>
                                   <th>Wedding Anniversary:</th>
                                   <td>{{$member->anniversary}}</td>
                            </tr>
                            <tr>
                                   <th>Phone Number:</th>
                                   <td>{{$member->Mobile}}</td>
                           </tr>
                      </table>
 
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h4>Related Staff</h4>
            </div> 
        </div>
        <hr>
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
</div>
<br>


    @endsection
   
