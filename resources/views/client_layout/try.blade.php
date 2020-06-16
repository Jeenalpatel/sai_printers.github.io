<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SAI PRINTERS</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('c_asset/img/core-img/favicon.ico')}}">
    <link href="{{asset('c_asset/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('c_asset/lib/animate/animate.min.css')}}" rel="stylesheet">
<!-- fancybox css -->
    <link href="{{asset('c_asset/css/jquery.fancybox.min.css')}}" rel="stylesheet">

    <!-- Core Stylesheet -->
    
    <link rel="stylesheet" href="{{asset('c_asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/font-awesome.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('c_asset/css/nice-select.css')}}">
    
    <link rel="stylesheet" href="{{asset('c_asset/css/travel-icon.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/my.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset123/style.css')}}">
    <style type="text/css">
        .item .images
        {
            height: 300px;
            width: 550px;
            background-color: black;
            background-size: cover;
            position: relative;
            display: block;
        }
    </style>
    

</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div> -->

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
                                    <li><a href="#">services</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">visiting card</a></li>
                                            <li><a href="about-us.html">invitation card</a></li>
                                            <li><a href="services.html">banner</a></li>
                                            <li><a href="rooms.html">bill book</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="#">work</a>

                                        
                                    </li>
                                    <li><a href="services.html">contact us</a></li>
                                    
                                    
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            @forelse($banner as $d)
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{url('storage/app/banner')}}{{'/'}}{{$d->image}});"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms" >{{$d->title}}</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">{{$d->info}}</p>
                                <a href="#" class=" palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse

          

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg service">
        <div class="container-fluid">
  
          <div class="section-header">
            <h3>Services</h3>
            <p>We specialize in a big variety of services
</p>
          </div>
        </div>
        <div class="container">
  
          <div class="row">
  
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Banner Making</a></h4>
                <p class="description">A professional way to promote your brand at trade shows, outdoor events and more.try it now.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #fff0da;"><i class="ion-card" style="color: #e98e06;"></i></div>
                <h4 class="title"><a href="">Visiting card</a></h4>
                <p class="description">we provide a Standard Visiting Cards,
Classic Visiting Cards,
Rounded Corner Visiting Cards,
Square Visiting Cards.</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">Invitation card</a></h4>
                <p class="description">Personalised invites for weddings, birthdays & all of life's special occasions.let'smake your occasion more greatful with us.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #eafde7;"><i class="ion-clipboard" style="color:#41cf2e;"></i></div>
                <h4 class="title"><a href="">Bill book</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #e1eeff;"><i class="ion-ios-bookmarks" style="color: #2282ff;"></i></div>
                <h4 class="title"><a href="">Book binding</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #ecebff;"><i class="ion-ios-browsers-outline" style="color: #8660fe;"></i></div>
                <h4 class="title"><a href="">sticure sheet</a></h4>
                <p class="description">we provide Mailing Labels,
Product and Packaging Labels,
Return Address Labels,
Visiting Card Stickers,
Custom Stickers.v</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #services -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed bg-overlay" style="background-image: url({{asset('c_asset/img1/ban4.jpg')}});">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>ABOUT US</h2>
                            <p>LoremLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sc ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-cocktail-1"></i>
                                    <p>Pool Beachbar</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Infinity Pool</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-beach"></i>
                                    <p>Sunbeds</p>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class=" palatin-btn mt-50">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->
<!--porfolio section-->
<div class="container-fluid" >
    <div id="myBtnContainer ">
      <div class="section-header">
          <h3>OUR WORKS</h3>
          <p>We will help you look
professional
</p>
        </div>

        <div class="site-section">
          <div class="container">
    
            <div class="row mb-5">
              <div class="col-md-7 mx-auto text-center">
                <h2 class="heading-29190"></h2>
              </div>
            </div>
    
            <div class="row">
            @forelse($works as $d)
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="item">
                  <a href="{{url('storage/app/works')}}{{'/'}}{{$d->image}}"" class="item-wrap" data-fancybox="gallery">
                    <span class="">{{$d->title}}</span>
                    <img class="images" src="{{url('storage/app/works')}}{{'/'}}{{$d->image}}"   >
                  </a>
                </div>           
              </div>
              @empty
              @endforelse
    
              <!-- <div class="col-md-6 col-lg-4 mb-4">
                <div class="item web">
                  <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                    <span class="icon-add"></span>
                    <img class="img-fluid" src="{{asset('c_asset/img1/v1.jpg')}} " height="500" width="500">
                  </a>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="item web">
                  <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                    <span class="icon-add"></span>
                    <img class="img-fluid" src="{{asset('c_asset/img1/v1.jpg')}}">
                  </a>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="item web">
                  <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                    <span class="icon-add"></span>
                    <img class="img-fluid" src="{{asset('c_asset/img1/v1.jpg')}}">
                  </a>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="item web">
                  <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                    <span class="icon-add">jinal</span>
                    <img class="img-fluid" src="{{asset('c_asset/img1/v1.jpg')}}">
                  </a>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="item web">
                  <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                    <span class="icon-add"></span>
                    <img class="img-fluid" src="{{asset('c_asset/img1/v1.jpg')}}">
                  </a>
                </div>
              </div>
    
            </div>
    
            
          </div>
        </div> <!-- END .site-section -->
        

  </div>
  </div>
<!--portfolio end-->

   

       <!-- Footer section -->
  <section class="footer-section">
    <div class="container ">
      <div class="footer-logo text-center">
        <a href="index.html"><img src="./img/logo-light.png" alt=""></a>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>About</h2>
            <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
            <img src="img/cards.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Questions</h2>
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Track Orders</a></li>
              <li><a href="">Returns</a></li>
              <li><a href="">Jobs</a></li>
              <li><a href="">Shipping</a></li>
              <li><a href="">Blog</a></li>
            </ul>
            <ul>
              <li><a href="">Partners</a></li>
              <li><a href="">Bloggers</a></li>
              <li><a href="">Support</a></li>
              <li><a href="">Terms of Use</a></li>
              <li><a href="">Press</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Questions</h2>
            <div class="fw-latest-post-widget">
              <div class="lp-item">
                <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
                <div class="lp-content">
                  <h6>what shoes to wear</h6>
                  <span>Oct 21, 2018</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
              <div class="lp-item">
                <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
                <div class="lp-content">
                  <h6>trends this year</h6>
                  <span>Oct 21, 2018</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget contact-widget">
            <h2>Questions</h2>
            <div class="con-info">
              <span>C.</span>
              <p>Your Company Ltd </p>
            </div>
            <div class="con-info">
              <span>B.</span>
              <p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
            </div>
            <div class="con-info">
              <span>T.</span>
              <p>+53 345 7953 32453</p>
            </div>
            <div class="con-info">
              <span>E.</span>
              <p>office@youremail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
          <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
          <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
          <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
          <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
          <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
        </div>


      </div>
    </div>
      

    
  </section>
  <!-- Footer section end -->

  
    
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
    <script src="{{asset('c_asset/js/jquery.fancybox.min.js')}}"></script>
</body>

</html> 