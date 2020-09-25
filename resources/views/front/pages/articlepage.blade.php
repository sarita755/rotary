
      
      
      @extends('front.layouts.sub')


    @section('content')
      <div class="container">
           <a href="http://rotary.org.np" style="color:blue;">Home</a>   >   Article <br> <br>
      <br>
      <br>
        <h1 align="center"> {{$articles->title}}</h1><br> <br>


      <center>  <img  class="center" src="{{asset('image/article/'.$articles->image )}}"  alt="Smiley face" height="150" width="160"  border="5">   </center> <br>
      <p>  {{$articles->date}} | Butwal</p>
            <p>  {{  strip_tags(html_entity_decode($articles->Description))  }}</p> 
      </div>  <br> <br> <br>
      @endsection




      
      
      
      
      
      
      
      
      
      
      

