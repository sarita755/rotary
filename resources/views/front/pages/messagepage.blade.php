@extends('front.layouts.sub')


    @section('content')
     
      <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Messages</li>
				</ul>
			</div>
		</div>
	</section>
  <section class="w3l-grids-6">
			<div class="container">
        <!-- grids -->
        <div class="grids-layout">
            <div class="wrapper">
                <h3 class="title-main">Messages</h3></br>
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
                   <!-- <div class="gd-innf">
                        <a href="single.html"><img class="img-responsive" src="assets/images/subashgupta.jpg"  alt="image"></a>
                        <h3><a href="single.html" class="vv-link">District Governer</a></h3>
						<p> </p>
                    </div>
                    <div class="gd-innf">
                        <a href="single.html"><img class="img-responsive" src="assets/images/SunilShrestha.jpg"  alt="image"></a>
                        <h3><a href="single.html" class="vv-link">Greece</a></h3>
						<p>Rtn.Sunil Sherestha </p>
                    </div>-->
					
                </div>
                
            </div>
        </div>
        </div>
		
        <!-- //grids -->
    </section>
      @endsection



