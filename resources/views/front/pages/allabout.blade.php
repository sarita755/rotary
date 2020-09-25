@extends('front.layouts.sub')


    @section('content')
     <a href="http://rotary.org.np" style="color:blue;">Home</a>   >   About <br> <br>
      <div class="container">
      <br>
      <br> <br> <br>


            <h1 align="center"> {{$about->title}}</h1><br> <br>


          <center>  <img  class="center" src="{{asset('image/about/'.$about->image )}}"  alt="Smiley face" height="150" width="160"  border="5">   </center>

              
            <p> {{  html_entity_decode(strip_tags($about->Description)) }}</p>
                


      @endsection



