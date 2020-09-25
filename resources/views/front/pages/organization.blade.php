@extends('front.layouts.sub')


    @section('content')

    
    
   <!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
</head>
<body>
    <!--<div class="container"> 
     <a href="http://rotary.org.np" style="color:blue;">Home</a>   >   Organization<br> <br>
   

<h2 align="center">Sponsored Club</h2>-->

<section class="w3l-inner-banner-main">
        <div class="banner-9">
            <div class="wrapper">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                    <li><a href="#pages">Pages <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                    <li class="active">Organization</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Our Organization<span class="ion-minus"></span></h2>
            </div> 
        </div>

<br> <br><br>

<div class="container">
  <h3 class="one"> Rotaract</h3>
<table style="width:100%">
    
  <tr>
    <th><p align="center">Established Year</p></th>
    <th> <p align="center">Organization</p></th>
    <th> <p align="center">President</p> </th>
    
      <th> <p align="center">Secratary</p></th>
    

  </tr>
  @foreach ($Rotract_organizations as $Rotract_organization)
  <tr>
   
                   <td width="5%">
                         <p align="center">{{$Rotract_organization->established_year}}</td></p>
                       
                  
                      <td width="15%" >
                           <p align="center">{{   str_limit($Rotract_organization->org_name, 40) }} </p>
                           </td>
                       
                       <td width="15%">
                           
                           
                           
                       <P align="center"><img  src="{{asset('image/organization/'.$Rotract_organization->image)}}"  width="100px" height="100px;"> </P>
                       <P align="center"> Name:{{   str_limit($Rotract_organization->pre_name, 30) }} </P>
                       
                       <P align="center"> Contact:{{   str_limit($Rotract_organization->pre_contact, 13) }}</P>
                       </td>
                      
                      <td width="15%" align="center">
                          
                         
                            <P align="center">  Name:{{   str_limit($Rotract_organization->sec_name, 25) }}</P>
                      
                      <P align="center">Contact:{{   str_limit($Rotract_organization->sec_contact, 13) }}</P>
                       <P align="center"><img  src="{{asset('image/organization/'.$Rotract_organization->image1)}}"  width="70px" height="70px;"> </P> </td>
         
  </tr>
   @endforeach
 </table>
 
<br> <br><br>

  <h3 class="one"> Rotary</h3>
<table style="width:100%">
    
  
  <tr>
    <th><p align="center">Established Year</p></th>
    <th> <p align="center">Organization</p></th>
    <th> <p align="center">President</p> </th>
    
      <th> <p align="center">Secratary</p></th>
    
  
  </tr>
  @foreach ($Rotary_organizations as $Rotary_organization)
  <tr>
   
                   <td width="5%">
                         <p align="center">
                       {{$Rotary_organization->established_year}} </p></td>
                  
                      <td width="15%" >
                          <p align="center"> {{   str_limit($Rotary_organization->org_name, 7) }} </p>
                          </td>
                       
                       <td width="15%">
                           
                           
                           <P align="center"> Name:{{   str_limit($Rotary_organization->pre_name, 50) }} </P>
                       
                       <P align="center"> Contact:{{   str_limit($Rotary_organization->pre_contact, 13) }}</P>
                       <P align="center"><img  src="{{asset('image/organization/'.$Rotary_organization->image)}}"  width="70px" height="70px;"> </P></td>
                      
                      <td width="15%" align="center">
                          
                         
                            <P align="center">  Name:{{   str_limit($Rotary_organization->sec_name, 25) }}</P>
                      
                      <P align="center">Contact:{{   str_limit($Rotary_organization->sec_contact, 13) }}</P>
                       <P align="center"><img  src="{{asset('image/organization/'.$Rotary_organization->image1)}}"  width="70px" height="70px;"> </P> </td>
         
  </tr>
   @endforeach
 
 
 
 
 
</table>

<br> <br><br>

  <h3 class="one"> RCC</h3>
<table style="width:100%">
    
  
  <tr>
    <th><p align="center">Established Year</p></th>
    <th> <p align="center">Organization</p></th>
    <th> <p align="center">President</p> </th>
    
      <th> <p align="center">Secratary</p></th>
    
  
  </tr>
  @foreach ($RDC_organizations as $RDC_organization)
  <tr>
   
                   <td width="5%">
                       <p align="center">
                       {{$RDC_organization->established_year}} </p></td>
                  
                      <td width="15%" align="center">
                          <p align="center">
                          {{   str_limit($RDC_organization->org_name, 50) }} </p></td>
                       
                       <td width="15%">
                           
                           
                           <P align="center"> Name:{{   str_limit($RDC_organization->pre_name, 25) }} </P>
                       
                       <P align="center"> Contact:{{   str_limit($RDC_organization->pre_contact, 13) }}</P>
                       <P align="center"><img  src="{{asset('image/organization/'.$RDC_organization->image)}}"  width="70px" height="70px;"> </P></td>
                      
                      <td width="15%" align="center">
                          
                         
                            <P align="center">  Name:{{   str_limit($Rotract_organization->sec_name, 25) }}</P>
                      
                      <P align="center">Contact:{{   str_limit($RDC_organization->sec_contact, 13) }}</P>
                       <P align="center"><img  src="{{asset('image/organization/'.$RDC_organization->image1)}}"  width="70px" height="70px;"> </P> </td>
         
  </tr>
   @endforeach
 </table>
 
<br> <br><br>

  <h3 class="one"> Interact</h3>
<table style="width:100%">
    
  
  <tr>
    <th><p align="center">Established Year</p></th>
    <th> <p align="center">Organization</p></th>
    <th> <p align="center">President</p> </th>
    
      <th> <p align="center">Secratary</p></th>
    
  
  </tr>
  @foreach ($Intract_organizations as $Intract_organization)
  <tr>
   
                   <td width="5%">
                       <p  align="center">  {{$Intract_organization->established_year}}</p>
                       
                      </td>
                  
                      <td width="15%">
                          <p  align="center">{{   str_limit($Intract_organization->org_name, 50) }} </p>
                          </td>
                       
                       <td width="15%">
                           
                           
                           <P align="center"> Name:{{   str_limit($Intract_organization->pre_name, 25) }} </P>
                       
                       <P align="center"> Contact:{{   str_limit($Intract_organization->pre_contact, 13) }}</P>
                       <P align="center"><img  src="{{asset('image/organization/'.$Intract_organization->image)}}"  width="70px" height="70px;"> </P></td>
                      
                      <td width="15%" align="center">
                          
                         
                            <P align="center">  Name:{{   str_limit($Intract_organization->sec_name,25) }}</P>
                      
                      <P align="center">Contact:{{   str_limit($Intract_organization->sec_contact, 13) }}</P>
                       <P align="center"><img  src="{{asset('image/organization/'.$Intract_organization->image1)}}"  width="70px" height="70px;"> </P> </td>
         
  </tr>
   @endforeach
 
 
 
 
 
</table>

 </div>

</body>
</html>

                            
<br> <br><br>
<br> <br><br>
            
                            
                            
                            
                            
      @endsection






