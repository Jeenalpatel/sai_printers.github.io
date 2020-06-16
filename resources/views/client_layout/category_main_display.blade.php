 <!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SAI PRINTERS</title>

    
    <!-- Core Stylesheet -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--category page css-->
    <link rel="stylesheet" href="{{asset('c_asset/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('c_asset/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('c_asset/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('c_asset/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('c_asset/css/bootstrap.min.css')}}">
	
	<!-- end -->

    <link rel="stylesheet" href="{{asset('c_asset/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/animate.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{asset('c_asset/css/travel-icon.css')}}">
   
	<!-- Core Stylesheet -->
   <link rel="stylesheet" href="{{asset('c_asset/my.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/service.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/style.css')}}">




    
</head>
<body>
	 <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">
                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand " ><img src="{{url('storage/app/image_pic')}}{{'/'}}{{$logo[0]->image}}" alt=""  ></a>
                        
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">service</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="rooms.html">Rooms</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">work</a>
                                        
                                    </li>
                                    
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="#" class="btn1 palatin-btn">GET INQUERY</a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

   
	
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" 
    style="background-image:url({{asset('c_asset/img1/ban1.jpg')}}" >
        <div class="bradcumbContent">
            <h2>our service</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

   
	<div class="container ">
		<div class="row mt-5">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					@foreach($categorymain as $c)		
					<?php 
						
					 ?>			
							
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#v" aria-expanded="false" aria-controls="v"></span>{{$c['cname']}}</a>
						

							<ul class="collapse" id="v" data-toggle="collapse" aria-expanded="false" aria-controls="v">
								<li class="main-nav-list child"><a href="#">{{$c['sub']['sname']}}</a></li>
							</ul>
						
							
						</li>
						
					</ul>
					@endforeach

				</div>
				
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>


	
	


	
	<script src="{{asset('c_asset/js/main.js')}}"></script>


	<!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('c_asset/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('c_asset/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('c_asset/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('c_asset/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('c_asset/js/active.js')}}"></script>


    <!--portfolio js-->

    <script src="{{asset('c_asset/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('c_asset/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('c_asset/js/main.js')}}"></script>
</body>

</html>