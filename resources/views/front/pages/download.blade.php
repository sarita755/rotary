@extends('front.layouts.sub')


    @section('content')
      <!--<div class="container">
      <br>
      <br> <br> <br>


            @foreach($resources as $resource)
           <a href="{{$resource->file}}"> hh </a>  
            
             @endforeach-->
  <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Downloads</li>
				</ul>
			</div>
		</div>
  </section>                      

  <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span> Downloads resource<span class="ion-minus"></span></h2>
            </div> 
        </div>     
       
<!--<div class="container">
      <br>
      <br> <br> <br>
         <div class="row">
         @foreach($resources as $resource)
          <div class="col-md-4">
            <h3><a href=#>{{$resource->title}}</h3>
            <p><J>Codrops is a blog that shares tutorials and blueprints on how to create unique templates and elements with HTML and CSS. The great thing about this blog is that in addition to letting you download the templates and plugins for free, it will also describe in detail how each template was created and how you can customize them to your preference.

Codrops includes resources, blueprints, templates, and plugins you can integrate with Bootstrap to create trendy portfolio sections, slideshows, video backgrounds, animations, and a lot more.</J></p>
<button type="button" class="btn btn-default btn-block"><a href="{{$resource->file}}">Rotary Book<i class="fa fa-download"></i></a></button>
           
           
</div>
@endforeach
</div>
</div>-->
<div class="container">
<table class="table table-bordered">

  <thead>
    <tr>
      
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach($resources as $resource)
  <tbody>
    <tr>
     
      <td><h4><a href="#">{{$resource->title}}</a></h4></td>
      <td>dfkjkdjfkj</td>
      <td><button type="button" class="btn"><a href="/file/download/{{$resource->file}}">Downloads<i class="fa fa-download"></i></a></button>
</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>



      @endsection



