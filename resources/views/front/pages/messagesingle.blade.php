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
		{{$message->name}}<br>
        
	</div>
	
</div>
<section class="w3l-text-14">
        <div id="text14-block">
            <div class="wrapper">
                <div class="text14-max-align">
                    <h5 class="text14-heading"></h5>
                 <div class="align-text14-cols">
                      <div class="row">
                      <div class="col-md-4">
                        <div class="text14-right">
                            <img src="{{asset('image/message/'.$message->image)}}" alt=""  class="img-responsive img-thumbnail img-fluid" style="height:380px width:100%;" />
                            <p class=><center>{{$message->name}}</center> </p>

                        </div>
                        </div>
                        <div class="col-md-8">
                        <div class="text14-left">
                        <p>{{  html_entity_decode(strip_tags($message->message)) }}</td></p>

                        </div>
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    @endsection