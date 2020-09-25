@extends('front.layouts.sub')


    @section('content')

    <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Committee</li>
				</ul>
			</div>
		</div>
  </section> 
  <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Committee<span class="ion-minus"></span></h2>
            </div> 
        </div>
  </section>
  <br>  

  <div class="container">
   <table class="table table-hover" style="width:100%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Title</th>
        <th>Chair/Director</th>
        <th>Image</th>
        <th>Responsibility</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($committes as $committe)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$committe->title}}</td>
        <td>{{$committe->chairperson}}</td>
        <td><img  src="{{asset('image/committe/'.$committe->image)}}"  width="100px" height="100px;"> </td>
        <td>{{  html_entity_decode(strip_tags($committe->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>


    @endsection