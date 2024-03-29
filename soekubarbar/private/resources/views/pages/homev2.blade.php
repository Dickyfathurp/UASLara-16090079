<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/utsv1/css/bootstrap.min.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/utsv1/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/utsv1/css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/utsv1/css/style.css') }}">

</head>

<body>
  <!--header-->
  <header class="main-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.html" class="navbar-brand"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
               <li class="active"><a href="#header">Home</a></li>
                <li class="active"><a href="#header">Jadwal</a></li>
                	<li class="active"><a href="#header">Pembayaran</a></li>
                		<li class="active"><a href="#">Pemesanan</a></li>
                			<li class="active"><a href="#header">Login</a></li>
                				<li class="active"><a href="#header">About</a></li>
							<li><a href="#contact">Contact</a></li>
                		<form class="form-inline" action="/action_page.php">
    				<input class="form-control mr-sm-2" type="text" placeholder="Cari">
    			<button class="btn btn-success" type="submit">Search</button>
 				</form>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Selamat Datang di</h2>
          <h3 class="title">Blackhunter Travel</h3>
          <h4 class="sub-title">We Create amazing designs</h4>
        </div>
      </div>
    </div>
  </header>
  
  
  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            <hr class="botm-line">
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title">Email Us</h3>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="contact-info">
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit" class="btn btn-send">Send</button>
              </form>
            </div>

          </div>
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title">Visit Us</h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Via: Sumurpanggang 2, Tegal</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 0039 333 12 68 347</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">hi@yourdomain.com</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
              <span aria-hidden="true" class="fa fa-envelope-o"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © Bethany Theme - All rights reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
 
  <script src="js/jquery.min.js"></script>
  	<script src="{{ asset('public/css/utsv1/js/jquery.easing.min.js') }}"></script>
  	<script src="{{ asset('public/css/utsv1/js/bootstrap.min.js') }}"></script>
  	<script src="{{ asset('public/css/utsv1/js/wow.js') }}"></script>
  	<script src="{{ asset('public/css/utsv1/js/custom.js') }}"></script>
  <script src="{{ asset('public/css/utsv1/contactform/contactform.js') }}"></script>
</body>
</html>