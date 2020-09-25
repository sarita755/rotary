@extends('front.layouts.sub')


    @section('content')

<!--<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid 
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:
  padding: 20px;
}
</style>
</head>
<body>
    
    
    
    
<div class="container">
     <a href="http://rotary.org.np" style="color:blue;">Home</a>   >   Contact<br> <br>
     
    
    <div class="row">
        
         <div class="col-sm-3">
     
    </div>
    <div class="col-sm-6">
        
<h3 align="center">Contact Form</h3>

  <form action="http://rotary.org.np">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
      <option value="australia">Nepal</option>
      <option value="canada">Australia</option>
      <option value="usa">USA</option>
      <option value="Other">Other</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <center> <input align="center" type="submit" value="Submit"> </center>
  </form>
</div>
<br> <br>


                 
    </div>
    
    
    
    
         <div class="col-sm-3">
     
    </div>
    
  </div>-->
 
    <!-- inner banner -->
    <section class="w3l-inner-banner-main">
        <div class="banner-9">
            <div class="wrapper">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                    <li><a href="#pages">Pages <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //covers -->
    <section class="w3l-contact-hny-6">
        <!-- contact -->
        <div class="contact-section">
            <div class="map-fo">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d883.0628739858328!2d83.4652807!3d27.7095202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6f7ac6fa1155463!2sRotary%20Club%20of%20Butwal!5e0!3m2!1sen!2snp!4v1595494686772!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="resp-cont">
                    <form action="{{route('storecontact')}}" method="post" class="contact-form">
                    @csrf
                        <h5>Contacts</h5>
                        <p>We want to hear from you</p>
                        <input type="text" placeholder="Name" name="name" id="name" required="">
                        <input type="email" name="email" placeholder="Email" name="w3lSender" id="w3lSender"
                            required="">
                        <textarea placeholder="Message" name="Message" id="Message" required=""></textarea>
                        <button type="submit" class="btn buttonbg">Send Now</button>
                    </form>
                </div>
            </div>
            <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

                    <!---728x90--->

                    
                    </div>
            <div class="contact-info-ad">
                <div class="wrapper">
                    <div class="grid">
                        <div class="adress-lavi-info">
                            <h3>Visit Us</h3>
                            <p><br>Rotary Club of Butwal ,South building <br>Butwal, Nepal. </p>
                        </div>
                        <div class="adress-lavi-info">
                            <h3>Contact Us</h3>
                            <p><a href="tel:977-071-11234">977-071-11234</a></p>
                            <p><a href="tel:977-071-11234">977-071-11234</a></p>
                            <p><a href="mailto:Rotary@gmail.com" class="mail">Rotary@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

            
            </div>
   
    
    

      @endsection






