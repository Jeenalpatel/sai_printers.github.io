<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/slider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/about_us.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- about slider client review start -->
	<link rel="stylesheet" href="{{asset('c_asset/jj_css/bootstrap-datepicker.css')}}">
	<!-- about slider client review end -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

	<!-- start header -->
	<header class="main_hed">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 logo">
					<img src="img1/logo.svg" class="logo1">
				</div>
				<div class="col-lg-7 menu">
					<ul>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Services
							<i class="fa fa-angle-down" aria-hidden="true" style="color: #fff; margin-left: 5px;"></i></a>

							<ul class="dropdown" >
								<li><a href="#">About us</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">About us</a></li>
							</ul>
						</li>
						<li><a href="#">work</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6">
					<a href="" class="menu-btn" style="text-decoration-style: none;">GET INQUERY</a>
					
					<!-- mobile view menu start -->
					<div id="hamburg" onclick="onclickmenu()">
						<div class="ham" id="ham1"></div>
						<div class="ham" id="ham2"></div>
						<div class="ham" id="ham3"></div>
					
							<div class="mb_menu">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div id="cross_ico" onclick="onclickmenu()">
												<div class="bar1"></div>	
												<div class="bar2"></div>
											</div>	
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<ul class="mb_containt">
												<li class="active"><a href="#">Home</a></li>
												<li><a href="#">About us</a></li>
												<li><a href="#">Services
													<i class="fa fa-angle-down" aria-hidden="true" style="color: #fff; margin-left: 5px;"></i></a>
												</li>
												<li><a href="#">work</a></li>
												<li><a href="#">Contact Us</a></li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="mb_inq">
												<a href="">GET INQUERY</a>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					<!-- mobile view menu over -->

				</div>
			</div>
		</div>
	</header>
	<!-- header over -->
	<!-- slider start -->
	<section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img1/s1.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">SAI PRINTRES</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Better responce,Best service,the Promice of perfection.Better responce,Best service,Promice of perfection.Better responce,Best service,Promice of perfection.</p>
                                <a href="#" class=" palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img1/s2.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">A place to remember</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <a href="#" class=" palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img1/s3.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your life</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <a href="#" class=" palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img1/s4.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your life</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <a href="#" class=" palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- slider over -->


				<div class="main">
            @yield('content')

        </div>

	
    <!-- footer start -->
    <footer>
    	<div class="container">
    		<div class="row f_containt_main">
    			<div class="col-lg-3 col-md-6 col-12">
    				<div class="f_containt_one">
	    				<h2>About Us</h2>
	    				<div class="f_abt_pera">
	    					<p>hdghsgdfmmmmmmm mmmmm mm ghdf fyugdf bfvbfv fjvf vfhv bf vhv v f v f vf  f  g  bgb gb gbgbg bgb gb gb gb g g bgbghnhnhnh n h h g g g t g g g bhgs dfygysf</p>
	    				</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6 col-12">
    				<div class="f_containt_two">
    					<h2>Questions</h2>
    					<div class="f_menu">
    						<ul>
    							<li><a href="">Home</a></li>
    							<li><a href="">About Us</a></li>
    							<li><a href="">Services</a></li>
    							<li><a href="">Work</a></li>
    							<li><a href="">Contact Us</a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6 col-12">
    				<div class="f_containt_three">
    					<h2>Questions</h2>
    					<div class="f_info">
    						<ul>
    							<li><a href="">ESW-640, C-569, G.H. Board, Nr. Saraswati School, Pandesara, Surat.</a></li>
    							<li><a href="">+91 740 546 3588</a></li>
    							<li><a href="">kantawalarupesh195@gmail.com</a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6 col-12">
    				<div class="f_containt_four">
    					<h2>Follow On Social</h2>
    					<div class="f_follow">
    						<ul>
    							<li class="f_i_1"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    							<li class="f_i_2"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    							<li class="f_i_3"><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row f_develop">
    			<div class="col-lg-12">
    				<div class="f_d">Created By Anjali Kantawala And Jinal Patel.</div>
    			</div>
    			
    		</div>
    	</div>
    </footer>
    <!-- footer end -->

    <!-- scrool to top start-->
    <a id="s_top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <!-- scrool to top over-->

   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="{{asset('c_asset/jj_js/slider.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/menu.js')}}"></script>

	<!-- about slider start-->

	<script src="{{asset('c_asset/jj_js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/jquery.nice-select.min.')}}"></script>
	<script src="{{asset('c_asset/jj_js/jquery.magnific-popup.min.')}}"></script>
	<script src="{{asset('c_asset/jj_js/main.')}}"></script>
	
	<!-- about slider end-->

	<!-- counter start -->

	<script src="{{asset('c_asset/jj_js/counter-js/jquery-migrate-3.0.1.min.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/counter-js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/counter-js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/counter-js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/counter-js/aos.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/counter-js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/counter-js/scrollax.min.js')}}"></script>
	<script src="{{asset('c_asset/jj_js/counter-js/main.js')}}"></script> 

	<!-- counter end -->

</body>
</html>