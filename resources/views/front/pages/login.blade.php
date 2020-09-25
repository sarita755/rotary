@extends('front.layouts.main')


   @section('content')

   <?php include 'header.php'; ?>
    <!-- inner banner -->
    <section class="w3l-inner-banner-main">
        <div class="banner-9 sec-img">
            <div class="wrapper">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                    <li><a href="#pages">Pages <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //covers -->
    <!-- form 34 -->
    <section class="w3l-form-34-main">
        <div class="form34-sub">
            <div class="form34">
                <h4 class="form-head">Welcome</h4>
                <p class="form-para">Sign in </p>
                <div class="main-div">
                    <a href="#facebook">
                        <div class="signin">
                            <span class="fa fa-facebook-square" aria-hidden="true"></span>
                            <p class="action">Facebook</p>
                        </div>
                    </a>
                    <a href="#facebook1">
                        <div class="signin">
                            <span class="fa fa-google-plus-square" aria-hidden="true"></span>
                            <p class="action">Google</p>
                        </div>
                    </a>
                </div>
                <div class="form-34or">or</div>
                <form action="#" method="post">
                    <div class="">
                        <p class="text-head">Email</p>
                        <input type="email" class="input" placeholder="Your Email" required />
                    </div>
                    <div class="">
                        <p class="text-head">Password</p>
                        <input type="password" class="input" placeholder="Your Password" required />
                    </div>
                    <label class="container">
                        <input type="checkbox" >
                        <span class="checkmark"></span>Remember me
                    </label>
                    <button type="submit" class="buttonbg signinbutton">Login</button>
                    <p class="signup">Have not an account yet?<a href="signup.php" class="signuplink">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
    <!-- //form 34 -->
    

   @endsection