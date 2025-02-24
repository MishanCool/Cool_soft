<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cool Soft Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{ URL::to('/') }}" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="{{ URL::to('/about') }}" class="nav-link">About Us</a></li>
	        	{{--<li class="nav-item"><a href="{{ URL::to('/events') }}" class="nav-link">Events</a></li>
	        	<li class="nav-item"><a href="{{ URL::to('/staf') }}" class="nav-link">Staff</a></li>
	        	<li class="nav-item"><a href="{{ URL::to('/blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sign Up</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    <section class="ftco-section ftco-team img" style="background-image:url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">

    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Team Squad</span>
            <h2 class="mb-4">Our Team <span>Squad</span></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        {{-- Not valied yet --}}
    		{{-- <div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-team owl-carousel">
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url(images/about.jpg);"></div>
		    				<div class="text">
		    					<h3 class="mb-0">David Scott</h3>
		    					<span class="position">Wide Receiver</span>
		    				</div>
	    				</div>
    				</div>
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url(images/staff-2.jpg);"></div>
		    				<div class="text">
		    					<h3 class="mb-0">David Scott</h3>
		    					<span class="position">Tight End</span>
		    				</div>
	    				</div>
    				</div>
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url(images/staff-3.jpg);"></div>
		    				<div class="text">
		    					<h3 class="mb-0">David Scott</h3>
		    					<span class="position">Defensive</span>
		    				</div>
	    				</div>
    				</div>
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url(images/staff-4.jpg);"></div>
		    				<div class="text">
		    					<h3 class="mb-0">David Scott</h3>
		    					<span class="position">Quarterback</span>
		    				</div>
	    				</div>
    				</div>
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url(images/staff-5.jpg);"></div>
		    				<div class="text">
		    					<h3 class="mb-0">David Scott</h3>
		    					<span class="position">Runing Back</span>
		    				</div>
	    				</div>
    				</div>
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url(images/staff-6.jpg);"></div>
		    				<div class="text">
		    					<h3 class="mb-0">David Scott</h3>
		    					<span class="position">Center</span>
		    				</div>
	    				</div>
    				</div>
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url(images/staff-7.jpg);"></div>
		    				<div class="text">
		    					<h3 class="mb-0">David Scott</h3>
		    					<span class="position">Offensive Guard</span>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div> --}}
    </section>


          <section class="ftco-section bg-light">
              <div class="container">
                  <div class="row">
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
                                  <div class="meta-date text-center p-2">
                    <span class="day">26</span>
                    <span class="mos">June</span>
                    <span class="yr">2019</span>
                  </div>
                </a>
                <div class="text bg-white p-4">
                  <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center mt-4">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
                                  <div class="meta-date text-center p-2">
                    <span class="day">26</span>
                    <span class="mos">June</span>
                    <span class="yr">2019</span>
                  </div>
                </a>
                <div class="text bg-white p-4">
                  <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center mt-4">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
                                  <div class="meta-date text-center p-2">
                    <span class="day">26</span>
                    <span class="mos">June</span>
                    <span class="yr">2019</span>
                  </div>
                </a>
                <div class="text bg-white p-4">
                  <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center mt-4">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_4.jpg');">
                                  <div class="meta-date text-center p-2">
                    <span class="day">26</span>
                    <span class="mos">June</span>
                    <span class="yr">2019</span>
                  </div>
                </a>
                <div class="text bg-white p-4">
                  <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center mt-4">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_5.jpg');">
                                  <div class="meta-date text-center p-2">
                    <span class="day">26</span>
                    <span class="mos">June</span>
                    <span class="yr">2019</span>
                  </div>
                </a>
                <div class="text bg-white p-4">
                  <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center mt-4">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_6.jpg');">
                                  <div class="meta-date text-center p-2">
                    <span class="day">26</span>
                    <span class="mos">June</span>
                    <span class="yr">2019</span>
                  </div>
                </a>
                <div class="text bg-white p-4">
                  <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center mt-4">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
              </div>
          </section>






    <footer class="ftco-footer ftco-footer-2 ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">DARK COOL</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://darkcool.com" target="_blank">DarkCool</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer> <!-- END footer -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
