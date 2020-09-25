@extends('front.layouts.sub')


    @section('content')






                                              <div class="container">
                                              <a href="http://rotary.org.np" style="color:blue;">Home</a>   >   News <br> <br>
                                              




<h1 align="center" style="color:black;"> News</h1> <br>

<div class="row">
     @foreach($news as $new)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
       <img  src="{{asset('image/news/'.$new->image)}}"  style=" height:350px;" >
      <div class="caption">
        <h3>{{$new->title}} </h3>
        <p>...</p>
        <a href="{{route('view-news',$new->id)}}">
                            <button class="btn btn-primary">
                                        Read More
                              </button></a>
      </div>
    </div>
  </div>
    @endforeach
</div>



                                               
                                              </div>
                                              <br> <br>


      @endsection






