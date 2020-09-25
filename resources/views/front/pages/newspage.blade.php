
    
      
      
      
      
      @extends('front.layouts.sub')


    @section('content')
      <div class="container">
      <br>
      <br>
         <h1 align="center"> {{$news->title}}</h1><br> <br>


      <center>  <img  class="center" src="{{asset('image/news/'.$news->image)}}"  alt="Smiley face" height="150" width="160"  border="5">   </center> <br>
       {{$news->date}} | {{$news->location}}</p>
            <p>  {{  strip_tags(html_entity_decode($news->Description))  }}</p> 
      </div>  <br> <br> <br>
      @endsection




      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
      
      
      
      
      
      
      
      
      

