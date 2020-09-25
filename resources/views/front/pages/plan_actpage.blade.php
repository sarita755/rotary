@extends('front.layouts.sub')


    @section('content')
      <!--<div class="container">
           <a href="http://rotary.org.np" style="color:blue;">Home</a>   > Plan Of Act <br>
           

<h1 align="center" style="color:black;"> Plan Of Act</h1> <br>
                    
         @foreach ($plans as $plan)
                                {{  html_entity_decode(strip_tags($plan->planname)) }}
                            @endforeach
       
      </div>-->

      <section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Plan of Action</li>
				</ul>
			</div>
		</div>
    <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Plan of Action<span class="ion-minus"></span></h2>
            </div> 
        </div>
  </section>
  <br>

 
   <!--<div class="container">
   <table class="table table-hover" style="width:100%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
        <th>Month</th>
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($plans as $plan)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$plan->name}}</td>
        <td>{{$plan->month}}</td>
        <td>{{$plan->category}}</td>
        <td>{{  html_entity_decode(strip_tags($plan->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>-->

  <!-- Button trigger modal -->



    <div class="container">
    <div class="row">
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">July</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($juls as $jul)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$jul->name}}</td>
        
        <td>{{$jul->category}}</td>
        <td>{{  html_entity_decode(strip_tags($jul->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">August</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($augusts as $august)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$august->name}}</td>
        
        <td>{{$august->category}}</td>
        <td>{{  html_entity_decode(strip_tags($august->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">September</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($septembers as $september)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$september->name}}</td>
        
        <td>{{$september->category}}</td>
        <td>{{  html_entity_decode(strip_tags($september->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>



    </div>
    <br><br>
    <div class="row">
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">October</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($octobers as $october)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$october->name}}</td>
        
        <td>{{$october->category}}</td>
        <td>{{  html_entity_decode(strip_tags($october->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">November</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($novembers as $november)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$november->name}}</td>
        
        <td>{{$november->category}}</td>
        <td>{{  html_entity_decode(strip_tags($november->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">December</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($decembers as $december)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$december->name}}</td>
        
        <td>{{$december->category}}</td>
        <td>{{  html_entity_decode(strip_tags($december->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>



    </div>

    <div class="row">
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">January</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($jans as $jan)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$jan->name}}</td>
        
        <td>{{$jan->category}}</td>
        <td>{{  html_entity_decode(strip_tags($jan->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">Feburary</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($febs as $feb)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$feb->name}}</td>
        
        <td>{{$feb->category}}</td>
        <td>{{  html_entity_decode(strip_tags($feb->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">March</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($marchs as $march)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$march->name}}</td>
        
        <td>{{$march->category}}</td>
        <td>{{  html_entity_decode(strip_tags($march->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>



    </div>

    <div class="row">
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">April</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($aprils as $april)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$april->name}}</td>
        
        <td>{{$april->category}}</td>
        <td>{{  html_entity_decode(strip_tags($april->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">May</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($mays as $may)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$may->name}}</td>
        
        <td>{{$may->category}}</td>
        <td>{{  html_entity_decode(strip_tags($may->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
      <div class="col-md-3">
         <button type="button" class="btn btn-success btn-lg btn-block actionbg">June</button>
         <div class="col-md-3">
         <table class="table table-hover" style="width:50%">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Plan Name</th>
       
        <th>Category</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($junes as $june)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$june->name}}</td>
        
        <td>{{$june->category}}</td>
        <td>{{  html_entity_decode(strip_tags($june->Description)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      </div>



    </div>
   
  </div>

 
      
    

  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left:110px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

	
   
      @endsection  



