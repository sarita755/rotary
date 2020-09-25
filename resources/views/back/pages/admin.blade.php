@extends('back.layouts.main')
@section('content')

<div class="row">


    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">

               <h1> {{$countorganization}} </h1>
                <p>Total Organization</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-home"></i>

            </div>
            <a href="http://rotary.org.np/manageorganization" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">

                <h1> {{$countnews}} </h1>
                <p text-red>Total News </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="http://rotary.org.np/viewnews" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                 <h1> {{$countmembers}} </h1>
                <p>Total Members</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="http://rotary.org.np/managemember" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h1> {{$countbod}} </h1>
                <p>Total Bod Members</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <a href="http://rotary.org.np/managebod" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
 
 
  <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">

               <h1> {{$countmedias}} </h1>
                <p>Total Media</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-paper"></i>

            </div>
            <a href="http://rotary.org.np/managemedia" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    
    








</div>
@endsection
