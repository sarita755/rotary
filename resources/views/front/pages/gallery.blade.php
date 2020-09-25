@extends('front.layouts.sub')


    @section('content')

    
     

            <br><br><br>


 <style>
        .modal-dialog{
       
        margin-right:auto;
        padding-left:0;
        float:none;
        }

        a.img{
          margin-top:5px;
          margin-bottom:5px;
          padding:2px;
          width:100%;
        }

        
       
        
    </style>
    

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="w3l-inner-banner-main">
		<div class="about-inner">
			<div class="wrapper">
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
					<li class="active">Gallery</li>
				</ul>
			</div>
		</div>
  </section>
  <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2 class="one"><span class="ion-minus"></span>Our Portfolio<span class="ion-minus"></span></h2>
            </div> 
        </div><br>


<div class="container">
    <div class="row">
        @foreach ($photos as $photo)
          <div class="col-md-4">
             <div class="single-img">
                <div class="hovereffect">
                    <img src="{{asset('image/media/'.$photo->image)}}" height="200px;" alt="">
                        <div class="overlay">
                         <h4></h4>
                        <p><a href="">{{$photo->title}}</a></p>
                </div>
            </div>
    </div>
</div>
@endforeach
<!--<div class="col-md-4">
<div class="single-img">
<div class="hovereffect">
<img src="{{asset('image/child.jpg')}}" height="200px" width="400px;" alt="">
<div class="overlay">
<h4>Child</h4>
<p><a href="">hdjhfjdhsfjshfjs</a></p>
 </div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-img">
<div class="hovereffect">
<img src="{{asset('image/child.jpg')}}" height="200px" width="400px;" alt="">
<div class="overlay">
<h4>Child</h4>
<p><a href="">hdjhfjdhsfjshfjs</a></p>
 </div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-img">
<div class="hovereffect">
<img src="{{asset('image/child.jpg')}}" height="200px" width="400px;" alt="">
<div class="overlay">
<h4>Child</h4>
<p><a href="">hdjhfjdhsfjshfjs</a></p>
 </div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-img">
<div class="hovereffect">
<img src="{{asset('image/child.jpg')}}" height="200px" width="400px;" alt="">
<div class="overlay">
<h4>Child</h4>
<p><a href="">hdjhfjdhsfjshfjs</a></p>
 </div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-img">
<div class="hovereffect">
<img src="{{asset('image/child.jpg')}}" height="200px" width="400px;" alt="">
<div class="overlay">
<h4>Child</h4>
<p><a href="">hdjhfjdhsfjshfjs</a></p>
 </div>
</div>
</div>-->
</div>

<div>

<style>
    .wrapper h1{
        text-align: center;
        font-size: 30px;
        font-family: Audiowide;
    }

    .img-area{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    .single-img{
        padding:0 20px 20px;
        margin:20px;
    }
    .single-img .hovereffect {
  width: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: pointer;
  background: #2a7d2e;
  border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  -mox-border-radius: 4px;
}

.single-img .hovereffect .overlay {
  width: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 70px 20px;
}
.single-img .hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  transition: opacity 0.35s, transform 0.35s;
  transform: translate3d(-10px, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.single-img .hovereffect:hover img {
  opacity: 0.2;
  filter: alpha(opacity=40);
  transform: translate3d(0, 0, 0);
}
.sinlge-img .hovereffect h4 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 18px;
  overflow: hidden;
  padding: 1em 0;
  background-color: transparent;
  margin-bottom: 15px;
}

.single-img .hovereffect h4:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  transition: transform 0.35s;
  transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
}

.single-img .hovereffect:hover h4:after {
  transform: translate3d(0, 0, 0);
}
.single-img .hovereffect a,
.single-img .hovereffect p {
  color: #FFF;
  filter: alpha(opacity=0);
  transition: opacity 0.35s, transform 0.35s;
  transform: translate3d(100%, 0, 0);
}

.single-img .hovereffect:hover a,
.single-img .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  transform: translate3d(0, 0, 0);
}


    img:hover{
        opacity: .5;
        transition: .9s;
    }
    </style>



    
    
    


      @endsection






