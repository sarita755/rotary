@extends('front.layouts.main')


   @section('content')
   
<div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="image/hero.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    
                                    <h4>Rotary Club </h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                  </div>

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                      <a href="http://rotary.org.np/getintro" class="btn gradient-bg mr-2">Learn More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->


                   @foreach ($sliders as $slider)

            <div class="swiper-slide hero-content-wrap">
                <img   src="{{asset('image/media/'.$slider->image )}}"  alt="Smiley face" height="50%">
            
                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h3>Welcome</h3>
                                    <h4>{{  html_entity_decode(strip_tags(str_limit($slider->Description,55))) }}</h4>
                                </header><!-- .entry-header -->
                                      
                                <div class="entry-content mt-4">
                                    <p> {{str_limit($slider->title, 150) }}</p>
                                </div><!-- .entry-content -->
                      
                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="http://rotary.org.np/getintro" class="btn gradient-bg mr-2">Learn More</a>
                                   
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
                @endforeach

            
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

<div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                              @foreach ($messages as $message)
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box active">
                        <figure class="d-flex justify-content-center">
                            <img src="{{$message->image }}" alt="Smiley face" height="120" width="120"  border="5">
                          <img   src="{{asset('image/message/'.$message->image )}}"  alt="Smiley face" height="190" width="170"  border="5">
                        </figure>

                        <header class="entry-header">
                            <p style="font-size:18px;">{{html_entity_decode(strip_tags(str_limit($message->name, 30))) }} </p>  <p style="font-size:15px;">{{str_limit($message->title, 40) }}  </p>
                        </header>
                        
               

                        <div class="entry-content">
                             <p style="font-size:13px;">  {{html_entity_decode(strip_tags(str_limit($message->message, 150))) }}</p>
                        </div>
                        <a href="{{route('view-message',$message->id)}}">
                            <button class="btn btn-primary">
                                        Read More
                              </button></a>
                    </div>
                </div>
    @endforeach


            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->


    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                         @foreach ($abouts as $about)
                            <h2 class="entry-title">  {{$about->title}}</h2>
                            @endforeach
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                      
                         
                          <p> {{  html_entity_decode(strip_tags(str_limit($about->Description,500))) }} </p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="{{route('view-about',$about->id)}}" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img  src="{{asset('image/about/'.$about->image)}}"  width="100px" height="400px;">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">

                        <div class="section-heading">
                            <h2 class="entry-title">Latest News</h2>
                        </div><!-- .section-heading -->
                        @foreach($news as $new)

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <td><img  src="{{asset('image/news/'.$new->image)}}"  width="70px" height="70px;"> </td>
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">

                                    <h3 class="entry-title w-100 m-0"><a href="#">{{$new->title}}</a></h3>


                                    <div class="posted-date">
                                        <a href="#">{{$new->title}}</a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">{{$new->location}}</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">  {{  strip_tags(html_entity_decode(str_limit($new->Description, 60)))  }}</p>    
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="{{route('view-news',$new->id)}}">Read More</a>


                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap --> @endforeach

                    </div><!-- .upcoming-events -->
                </div><!-- .col -->









              @foreach ($articles as $article)
                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Featured News</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                  <td><img  src="{{asset('image/article/'.$article->image)}}"  width="30px" height="200px;"> </td>
                                
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">{{str_limit($article->title, 30) }} </a></h3>

                                  <div class="posted-date">
                                        <a href="#">{{str_limit($article->date, 10) }} </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Butwal</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">  {{  strip_tags(html_entity_decode(str_limit($article->Description, 60)))  }}</p>    
                                </div><!-- .entry-content --> 
                                <br>

                                  <div class="entry-footer">
                                    <a href="{{route('view-article',$article->id)}}">Read More</a>


                                </div><!-- .entry-footer -->
                                
                                
                                

                                </header><!-- .entry-header -->

                                


                            </div><!-- .cause-content-wrap -->



                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">

                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">

                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

@endforeach

<div class="home-page-limestone">
        <div class="container">
            <div class="row align-items-end">
                <div class="coL-12 col-lg-6">
                    <div class="section-heading">
                        <h2 class="entry-title">We love to help all the peoples that have problems in the world. After 114 years we have many goals achieved.</h2>

                       
                    </div><!-- .section-heading -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="milestones d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="image/teamwork.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="120" data-speed="2000"></div>
                                    <div class="counter-k">K</div>
                                </div>

                                <h3 class="entry-title">Total people helped</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="image/donation.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="79" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Water wells</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="image/dove.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="253" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Volunteeres</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div><!-- .milestones -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Notice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          @foreach ($Notifications as $Notification)
          <h2 id="title" align="center">{{   str_limit($Notification->title) }}</h2>
          <br>
             <p align="center"> 
             <img align="center" src="{{asset('image/notification/'.$Notification->image)}}"  width="350px" height="200px;"> </p>
             <p align="center" id="Description">{{  html_entity_decode(strip_tags($Notification->Description)) }}</p>
          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
<script>
$(document).ready(function(){
    let title = $('#title').text();
    if(title != ''){
        $("#myModal").modal();
    }
});
</script>


@endsection
