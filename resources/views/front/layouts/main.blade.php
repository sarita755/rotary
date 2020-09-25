<!DOCTYPE html>
<html lang="en">
<head>
  @include('front.includes.styles')
</head>
<body>


@include('front.includes.header')


<section class="content">
            @yield('content')
        </section>

 


   @include('front.includes.footer')
