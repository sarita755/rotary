<!DOCTYPE html>
<html lang="en">
<head>
  @include('front.includes.styles')
</head>
<body>


@include('front.includes.header')

<br><br><br>
<section class="content">
            @yield('content')
        </section>

<br><br><br>


   @include('front.includes.footer')
