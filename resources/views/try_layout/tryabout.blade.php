<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- about slider client review start -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- about slider client review end -->

	<!-- page animation -->
	<!-- page animation -->
    <link rel="stylesheet" href="{{asset('c_asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/slider.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/contact_us.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/pop_up.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/about_us.css')}}">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />





	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
		body
{
	padding: 0;
	margin: 0;
	overflow-x: hidden;
}

.ab_slider
{
	padding: 200px 0px 150px;
	width: 100%;
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	text-align: center;
	align-items: center;
	position: relative;
}
.ab_slider:before {
	content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: black;
    opacity: 0.7;
    top: 0;
    left: 0;
}
.ab_slider_btn
{
	height: 80px;
	width: 300px;
	position: relative;
	color: #f9f3ed;
	font-weight: 600;
	display: flex;
	justify-content: center;
	text-align: center;
	align-items: center;
	font-size: 40px;
}

/slider over/

/about us detail start/

.about_us_main
{
	width: 100%;
	height: auto;	
}
.about_sub_shap
{
	padding: 100px 0 100px;
	position: relative;
	background: #f9f3ed;
	z-index: 1;
	overflow: hidden;
}
.about-shape-wp {
    width: 1100px;
    height: 100%;
    position: absolute;
    top: 0;
    left: -230px;
    transform: skewX(30deg);
    overflow: hidden;
    z-index: 0;
}
.about-shape-wp:after {
    content: "";
    display: block;
    position: absolute;
    background: #10455b;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    /opacity: .9;/
}

.abt_img_section
{
	width: 110%;
	height: 120%;
	transform: skewX(-10deg);
	left: 200px;
	top: -150px;
	background-size: cover;
	background-position: center;
	object-position: center;
	object-fit: cover;
	background-repeat: no-repeat;
	background-image: url(../img1/roller.png);
	z-index: 10;
	position: absolute;
}
.about_containt
{
	position: relative;
	width: 100%;
}
.about_containt h1
{
	font-size: 45px;
	text-align: left;
	color: #f9f3ed;
}
.overflow_text p
{
	font-size: 17px;
	line-height: 2;
	color: #f9f3ed;
	overflow: hidden;
}
.promice
{
	padding-top: 10px;
}
.promice i
{
	width: 34px;
	padding: 10px 10px 10px;
	border-radius: 40px;
	font-size: 15px;
	background-color: #f9f3ed;
	color: #10455b;
	text-align: center;
}
.promice span
{
	padding-left: 10px;
	color: #f9f3ed;
}
.abt_btn
{
	padding: 40px 0px 50px;
}
.abt_btn a
{
	padding: 12px 25px 12px;
	text-transform: capitalize;
	color: #fff;
	font-weight: 600;
	border: 2px solid #f9f3ed;
}
.abt_btn a:hover
{
	background-color: #fff;
	transition: 0.5s;
	text-decoration: none;
	color: #000;
}

/about us detail end/

	/work done start/

.work_done
{
	background-color: #f9f3ed;
}
.work_done_shap
{
	padding: 100px 0px 150px;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(../img1/ban6.jpg);
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
}
.w_title
{
	display: flex;
	justify-content: center;
	text-align: center;
	align-items: center;
	color: #f9f3ed;
	font-size: 50px;
}
.w_pera 
{
	text-align: center;
	color: #fff;
	line-height: 2;
	padding: 30px 0px 90px;
	font-size: 20px;
}
.work_show_box
{
	padding: 10px 0px 10px;
	position: relative;
	top: -140px; 
	z-index: 2;
}
.w_info
{
	width: 100%;
	padding: 30px 20px 30px;
	background-color: #10455b;
	transform: skewX(-10deg);
}
.w_i_i,.w_i_t,.w_i_c
{
	color: #f9f3ed;
	height: 100%;
	width: 100%;
	font-size: 35px;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: center;
	padding: 5px;
	transform: skewx(10deg);
}
.w_i_t
{
	font-size: 60px;
}
.w_i_c
{
	font-size: 20px;
}

/counter start/
.ftco-animate
{
	opacity: 0;
	visibility: hidden;
}
.ftco-animated
{
	-webkit-animation-duration: .5s;
	animation-duration: .5s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}
@keyframes fadeInUp{
from {
	opacity: 0;
	visibility: hidden;
	-webkit-transform: translate3d(0, 40px, 0);
	transform: translate3d(0, 40px, 0);
}

to {
	visibility: visible;
	opacity: 1;
	-webkit-transform: none;
	transform: none;
}
}

.fadeInUp {
-webkit-animation-name: fadeInUp;
animation-name: fadeInUp;
}

/counter end/

/work done end/

/what client say start/

.abt_client
{
  margin: 0px;
  padding: 0px 0px 200px;
  width: 100%;
  background-color: #f9f3ed;
  position: relative;
}
.abt_sub_p p
{
  color: #10455b;
  font-size: 50px;
  font-weight: 650;
  padding-bottom: 50px;
}
.item
{
	background-color: #10455b;
	padding: 60px 20px 60px;
}
.testi-slider .testi-item 
{
  text-align: center; 
}
.testi-item 
{
  color: #fff; 
}
.testi-item h4 
{
  font-size: 30px;
  font-weight: 700;
  margin-top: 30px;
  color: aqua;
  margin-bottom: 10px;
}
.testi-item p
{
    max-width: 735px;
    margin: auto;
    font-size: 21px;
    color: #fff;
    line-height: 30px;
    font-style: italic;
}
.slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus {
    color: transparent;
    outline: none;
    background: black !important;
    border:1px solid #fff;
}

/what client say end/


@media (max-width: 1199px)
{
	.abt_img_section
	{
	    width: 130%;
	    height: 100%;
	    left: 130px;
	    top: -140px;
	    position: absolute;
	}
}
@media (max-width: 991px)
{
	.work_done_shap
	{
		padding: 100px 0px 50px;
	}
	.work_show_box
	{
		padding: 100px 0px 50px;
	    width: 100%;
	    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(../img1/ban6.jpg);
	    background-size: cover;
	    background-position: center;
	    background-attachment: fixed;
	}
	.w_padding
	{
		padding: 20px 0px 100px;
	}
	
}
@media (max-width: 767px)
{
	button.slick-next ,button.slick-next:hover
	{
		position: absolute;
		top: 450px !important;
	}	
	button.slick-prev, button.slick-prev:hover
	{
		position: absolute;
		top: 450px !important;
	}	
}
@media (max-width: 575px)
{
	.w_info
	{
	    width: 75%;
	    padding: 30px 20px 30px;
	    margin-left: 30px;
	    background-color: black;
	    transform: skewX(-10deg);
	}
	button.slick-next ,button.slick-next:hover
	{
		position: absolute;
		left: 300px !important;
		top: 700px !important;
	}	
	button.slick-prev, button.slick-prev:hover
	{
		position: absolute;
		left: 150px !important;
		top: 700px !important;
	}

}
@media (max-width: 480px)
{
	.about_containt h1
	{
		font-size: 35px;
	}
	.overflow_text p
	{
		font-size: 18px;
	}
	.w_info
	{
		height: 200px;
		width: 160px;
		/margin-left: 25px;/
	}
	.w_i_i,.w_i_t,.w_i_c
	{
		font-size: 25px;
		padding: 5px;
	}
	.w_title
	{
		font-size: 40px;
	}
	.abt_sub_p p
  	{
    	font-size: 40px;
  	}
  	button.slick-next ,button.slick-next:hover
	{
		position: absolute;
		left: 250px !important;
		top: 950px !important;
	}	
	button.slick-prev, button.slick-prev:hover
	{
		position: absolute;
		left: 120px !important;
		top: 950px !important;
	}
  	
  	
}
@media (max-width: 375px)
{
	.about_containt h1
	{
		font-size: 30px;
	}
	.overflow_text p
	{
		font-size: 15px;
	}
	.w_title
	{
		font-size: 30px;
	}
	.w_pera
	{
		font-size: 14px;
	}
	.w_info
	{
		height: 190px;
		width: 140px;
		margin-left: 8px;
	}
	.w_padding
	{
		padding: 50px 0px 0px;
	}
	.abt_sub_p p
  	{
   		font-size: 30px;
  	}
}
@media (max-width: 320px)
{
	.w_info
	{
		margin: 0px;
		width: 100%;
		transform: skewX(0deg);
	}
	.w_i_i,.w_i_t,.w_i_c
	{
		font-size: 20px;
		transform: skewX(0deg);
	}
	.promice span
	{
		font-size: 12px;
	}
}



.slider
{
	max-width: 1400px;
	margin: 0 auto;
}
.slick-slide
{
	margin: 0 50px;
}

button.slick-next ,button.slick-next:hover
{
	position: absolute;
	top: 350px;
	left: 200px;
	width: 80px;
	height: 80px;
	transform: skewX(-20deg);
	background-image: url(../img1/btn_n.svg);
	background-size: cover;
	background-position: center;
	object-fit: cover;
}
button.slick-prev, button.slick-prev:hover
{
	position: absolute;
	top: 350px;
	left: 100px;
	width: 80px;
	height: 80px;
	transform: skewX(-20deg);
	background-image: url(../img1/btn_p.svg);
	background-size: cover;
	background-position: center;
	object-fit: cover;
}

.slick-prev:before,
.slick-next:before
{
	display: none;
}

	</style>
</head>
<body>

	<!-- review popup start -->
	<div id="popup_review" style="display: none;">
		<div id="pop_r_box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12"><span class="close">&times;</span></div>
				</div>
				<div class="row">
					<div class="col-lg-12"><h1 id="r_heading">Review</h1></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="review_form">
						<form>
							<table>
								<tr>
									<td><h6 style="padding-left: 10px; color: #fff; font-weight: normal; padding-top: 10px;">Profile Picture:</h6><input type="file" name=""></td>
								</tr>
								<tr style="width: 200px; border-bottom: 1px solid #fff;">
									<td><input type="text" name="" placeholder="Name"></td>
								</tr>
								<tr style="width: 200px; border-bottom: 1px solid #fff;">
									<td><textarea placeholder="Review ...."></textarea></td>									
								</tr>
								<center>
								<tr>
									<td><input type="submit" name="" class="review_sub"></td>
								</tr>
								</center>
							</table>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- review popup end -->

	<!-- login start -->
	<div id="popup_login" style="display:none;">
		<div id="popup">
			<div class="container">
				<div class="row">
					<div class="col-lg-12"><span class="close">&times;</span></div>
				</div>
				<div class="row">
					<div class="col-lg-12"><h1 id="newsheading">Login</h1></div>
				</div>
				<div class="row">
					<div class="col-lg-12 login_form">
						<form>
							<center>
							<table>
								<tr style="border-bottom: 1px solid #fff;">
									<td><input type="text" name="" id="emailid" placeholder="Email"></td>
								</tr>
								<tr style="border-bottom: 1px solid #fff;">
									<td><input type="password" name="" id="password" placeholder="Password"></td>
								</tr>
								<tr class="log_btn">
									<td><input type="submit" name="" value="Log In" id="login_sub"></td>
								</tr>
							</table>
							</center>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="forgot"><a href=""> Forgot password ?</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="reg_link">Don't have an account?<a href="">Register Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- login over -->
	<!-- start header -->
	<header class="main_hed">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 logo">
					<img src="img1/logo_blue.svg" class="logo1">
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
					<a class="menu-btn" style="text-decoration-style: none;color:#fff;" id="login_click">Login</a>
					<div class="row">
						<div class="col-lg-12">
							<div class="user_detail">
								<div class="user_image"><img src="img1/2.jpg" class="user_profile"></div>
								<div class="user_name">
									<ul>
										<li><a href="#">Anjali<i class="fa fa-caret-down" aria-hidden="true" style="padding-left: 10px; padding-top: 3px;"></i></a>
											<div class="user_dropdown">
												<ul> 
													<li><a href="">Profile</a></li>
													<li><a href="">Forget Password</a></li>
													<li><a href="">Logout</a></li>
												</ul>
											</div>
											
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<!-- mobile view menu start -->
					<div id="hamburg" onclick="onclickmenu()">
						<div class="ham" id="ham1"></div>
						<div class="ham" id="ham2"></div>
						<div class="ham" id="ham3"></div>
					
							<div class="mb_menu">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div id="cross_ico">
												<div class="bar1"></div>	
												<div class="bar2"></div>
											</div>	
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="mb_containt">
											<ul>
												<li class="active"><a href="#">Home</a></li>
												<li><a href="#">About us</a></li>
												<li>Services
													<i class="fa fa-angle-down" aria-hidden="true" style="color: #fff; margin-left: 5px;"></i>
													<div class="sub_menu_open">
													<ul>
														<li>abt</li>
														<li>abt</li>
														<li>abt</li>
													</ul>
													</div>
												</li>
												<li><a href="try_visi.html">work</a></li>
												<li><a href="#">Contact Us</a></li>
											</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="mb_inq_main">
												<div class="mb_inq"><a>Login</a></div>
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



	<!-- slider image -->
	<div class="ab_slider" style="background-image: url(img1/5.jpg);">
		<div class="ab_slider_btn">About Us</div>
	</div>
	<!-- slider image over -->

	

    <!-- about us start -->
    <section class="about_us_main">
    	<div class="about_sub_shap">
    	<div class="about-shape-wp"></div>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-12">
    				<div class="about_containt">
    					<h1>About Us</h1>
    					<div class="overflow_text">
    						<p>We're So Much More Than What We Print. Sai printers is shop for printing Visting card, invitation card, banner, biil book, strickers, letterhead, envelopes. We're not just enthusiastic printers of business forms and sales and marketing materials, we're dedicated graphic arts professionals who seek to use our creative skills to improve the results of your printed documents and sales and marketing materials.</p>
    					</div>
    				</div>
    				<div class="abt_extra">
	    				<div class="promice">
	    					<i class="fa fa-check" aria-hidden="true"></i><span>promise of perfection.</span>
	    				</div>
	    				<div class="promice">
	    					<i class="fa fa-check" aria-hidden="true"></i><span>your satisfaction is our first priority</span>
	    				</div>
	    				<div class="abt_btn"><a href="#">read more</a></div>
    				</div>
    			</div>
    			<div class="col-lg-6 col-12">
    				<div class="abt_img_section">
    				</div>
    			</div>
    			
    		</div>
    	</div>
    	</div>
    </section>
    <!-- about us over -->

   

    <!-- work done start-->
    <section class="ftco-section ftco-counter work_done" id="section-counter">
    	<div class="work_done_shap">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 w_title">Our Milestones</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="w_pera">
    					Our abdhbg hdbghdbg dfhgbdhgb hdhghjf hfsbsfh fh hfbhjf hjfbhjfbvhjfb df ghdfgh dfdfhgbhj jdfhdf dfghjdgfhdfhdf gfghjdbf fhgbhdfbd hjdbfhd ff hjdfhdgfhj dhjdg hdfh fhjd ghjdbfhdbfg dhhgbdhfbd Milestones
    				</div>
    			</div>
    		</div>
    	</div>
    	</div>
	   	<div class="work_show_box">
	    	<div class="container">
	    		<div class="row">
					<div class="col-lg-3 col-6 w_padding ftco-animate">
						<div class="w_info">
							<div class="row">
								<div class="col-lg-12 w_i_i">
									<i class="fa fa-paint-brush" aria-hidden="true"></i>
								</div>
								<div class="col-lg-12 w_i_t">
									<div class="number" data-number="125">0</div>
								</div>

								<div class="col-lg-12 w_i_c">Design</div>
							</div>
							
							
						</div>
					</div>
					<div class="col-lg-3 col-6 w_padding ftco-animate">
						<div class="w_info">
							<div class="row">
								<div class="col-lg-12 w_i_i">
									<i class="fa fa-check-square-o" aria-hidden="true"></i>
								</div>
							
								<div class="col-lg-12 w_i_t">
									<div class="number" data-number="1000">0</div>
								</div>
							
								<div class="col-lg-12 w_i_c">works done</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 w_padding ftco-animate">
						<div class="w_info">
							<div class="row">
								<div class="col-lg-12 w_i_i">
									<i class="fa fa-users" aria-hidden="true"></i>
								</div>
							
								<div class="col-lg-12 w_i_t">
									<div class="number" data-number="79">0</div>
								</div>
							
								<div class="col-lg-12 w_i_c">client</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 w_padding ftco-animate">
						<div class="w_info">
							<div class="row">
								<div class="col-lg-12 w_i_i">
									<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
								</div>
							
								<div class="col-lg-12 w_i_t">
									<div class="number" data-number="12">0</div>
								</div>
							
								<div class="col-lg-12 w_i_c">panding work</div>
							</div>
						</div>
					</div>
	    		</div>
	    	</div>
	    </div>
    </section>		
    <!-- work done over-->

    <!-- what client say start -->
    
<div class="abt_client">
<div class="container-fluid">

	<div class="row">
		<div class="col-lg-12">
			<div class="text-center abt_sub_p">
				<p>What Clients Say</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="slider">

	  			<div class="item">
					<div class="testi-item">
						<div>
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
								you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
						<h4>Fanny Spencer</h4>
					</div>
				</div>
				<div class="item">
					<div class="testi-item">
						<div>
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
								you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
						<h4>Fanny Spencer</h4>
					</div>
				</div>
				<div class="item ">
					<div class="testi-item">
						<div>
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
								you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
						<h4>Fanny Spencer</h4>
					</div>
				</div>
	  		</div>
		</div>
	</div>


</div>
</div>


    <!-- what client say end -->

	

    <!-- footer start -->
    <footer>
    	<div class="container">
    		<div class="row f_containt_main">
    			<div class="col-lg-3 col-md-6 col-12">
    				<div class="f_containt_one">
	    				<h2>Review</h2>
	    				<div class="f_review">
	    					<a href="#"><p><i class="fa fa-thumbs-up" aria-hidden="true"></i>
								To Provide a Review, Click here...</p></a>
	    				</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6 col-12">
    				<div class="f_containt_two">
    					<h2>Links</h2>
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
    					<h2>Contact Us</h2>
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
    					<div class="f_map">
    						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.131308262558!2d72.82694841493465!3d21.147172085934322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDA4JzQ5LjgiTiA3MsKwNDknNDQuOSJF!5e0!3m2!1sen!2sin!4v1583313829919!5m2!1sen!2sin" width="200" height="80" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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

   <script src="js/wow.min.js"></script>
	<script>
        new WOW().init();
    </script>
    <script>
    	// login start

    	// $(document).ready(function(){
    	// 	setTimeout(function(){
    	// 		$('#popup_login').css('display','block');
    	// 	}, 2000);
    	// });
    	$('.close').click(function(event){
    		$('#popup_login').css('display','none');
    	});
    	$('.close').click(function(event){
    		$('#popup_review').css('display','none');
    	}); 
    	$('.menu-btn').click(function(event){
    		$('#popup_login').css('display','block');
    	});
    	$('.mb_inq').click(function(event){
    		$('#popup_login').css('display','block');
    	});

    	// login end

    	// review start

    	$('.f_review').click(function(event){
    		$('#popup_review').css('display','block');
    	});

    	// review end
    </script>
    
    <script>
    	jQuery(document).ready(function($) {
      $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
       
        }]
    });
});
</script>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="slider.js"></script>
	<script src="js/menu.js"></script>
 -->
	<!-- about slider start-->

	<!-- <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	 -->
	<!-- about slider end-->

	<!-- counter start -->

	<!-- <script src="js/counter-js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/counter-js/jquery.waypoints.min.js"></script>
	<script src="js/counter-js/jquery.stellar.min.js"></script>
	<script src="js/counter-js/owl.carousel.min.js"></script>
	<script src="js/counter-js/aos.js"></script>
	<script src="js/counter-js/jquery.animateNumber.min.js"></script>
	<script src="js/counter-js/scrollax.min.js"></script>
	<script src="js/counter-js/main.js"></script> 
 -->
	<!-- counter end -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</body>
</html>