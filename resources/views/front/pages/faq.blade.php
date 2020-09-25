@extends('front.layouts.sub')


    @section('content')
      <div class="container">
          <h1 align="center" style="color:black;"> Frequently askeed questions (FAQS)</h1> 
      
        @foreach ($faqs as $faq)
                  
                     
                     <h3>   Q.{{$loop->iteration }} {{  html_entity_decode(strip_tags($faq->mgs1)) }} </h3>
                      <h4>-> {{  html_entity_decode(strip_tags($faq->mgs2)) }} </h4>
                      
                    @endforeach
      
      
             
             </div>
                


      @endsection



