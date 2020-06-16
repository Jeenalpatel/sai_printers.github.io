<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->

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
    <link rel="stylesheet" href="{{asset('c_asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/font-awesome.min.css')}}">
    
    
    <link rel="stylesheet" href="{{asset('c_asset/css/travel-icon.css')}}">

    <!-- Core Stylesheet -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--category page css-->
    <link rel="stylesheet" href="{{asset('c_asset/css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('c_asset/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('c_asset/css/themify-icons.css')}}">
  
  <!-- <link rel="stylesheet" href="{{asset('c_asset/css/bootstrap.min.css')}}"> -->
  
  <!-- end -->

    <link rel="stylesheet" href="{{asset('c_asset/css/my.css')}}">
    
    <link rel="stylesheet" href="{{asset('c_asset/css/service.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('c_asset/css/work.css')}}"> -->
    <link rel="stylesheet" href="{{asset('c_asset/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('c_asset/css/work.css')}}">




        <!-- jumka css -->
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/main_hedfut.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/slider.css')}}">
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('c_asset/css/jj_about.css')}}"> -->
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/contact_us.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/pop_up.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/about_us.css')}}">


  <!-- <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/bootstrap.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/bootstrap.min.css')}}"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
  font-awesome.min.css">
  <!-- modal123 lonk bootstarp -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <!-- about slider client review start -->
  <link rel="stylesheet" href="{{asset('c_asset/jj_css/bootstrap-datepicker.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{asset('c_asset/js/jquery/jquery-2.2.4.min.js')}}"></script>

  <!-- about slider client review end -->


    
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

    .visi_form
    {
      padding: 30px 10px 15px;
      width: 100%; 
    }
    form tr td
    {
      padding: 10px 20px 10px;
    }
    input
    {
      padding: 5px 20px 5px;
      font-size: 15px;
      border-radius: 20px;
      border: 1px solid #cb8670;
      background-color: #fff;
      transition: 0.3s; 
      color: #000;
    }
    input:hover
    {
      background-color: #cb8670;
      color: #fff;
    }
    select
    {
      padding: 5px 100px 5px;
      border-radius: 3px;
    }
    .sub_btn
    {
      padding: 30px 50px 0px;
    }
   
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="{{asset('c_asset/js/jquery/jquery-2.2.4.min.js')}}"></script> -->

</head>

<body>
     <!-- start header -->
     <!-- login start -->
  <div id="popup_login" style="display: none;">
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
            <form method="POST" action="{{ route('login') }}" >
              @csrf
              <center>
              <table>
                <tr style="border-bottom: 1px solid #fff;">
                  <td>
                    <!-- <input type="text" name="" id="emailid" placeholder="Email"> -->
                    <input id="email" type="email"placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </td>
                </tr>
                <tr style="border-bottom: 1px solid #fff;">
                  <!-- <td><input type="password" name="" id="password" placeholder="Password"></td> -->
                  <td>
                    <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </td>
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
            <div class="reg_link">Don't have an account?<a href="{{route('register')}}">Register Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- login over -->
  <header class="main_hed">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 logo">
          <a href="{{URL::route('c_layout')}}"><img src="{{url('storage/app/image_pic')}}{{'/'}}{{$logo[0]->image}}" class="logo1"></a>
        </div>
        <div class="col-lg-7 menu">
          <ul>
            <li class="active"><a href="{{URL::route('c_layout')}}">Home</a></li>
            <li><a href="{{URL::route('about')}}">About us</a></li>
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
            <li><a href="{{URL::route('portfolio_layout')}}">work</a></li>
            <li><a href="{{URL::route('contact')}}">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2">

          @if(@Auth::guard('web')->user()->name)
        <div class="user_detail">

            
                  <div class="user_name">{{@Auth::guard('web')->user()->name}}<i class="fa fa-caret-down" aria-hidden="true" style="padding-left: 10px; padding-top: 3px;"></i>
                    <div class="user_dropdown">
                      <ul>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Forget Password</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                      </ul>
                    </div>
                  </div>
             

          </div>
          
          @else

          <a  class="menu-btn" id="login_click" style="text-decoration-style: none;">Login</a>
            @endif
            </div>
                   <!--  <a  class="menu-btn" id="login_click" style="text-decoration-style: none; ">{{@Auth::guard('web')->user()->name}}</a>

                    <div >
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
 -->
          
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
                        <li class="active"><a href="{{URL::route('c_layout')}}">Home</a></li>
                        <li><a href="{{URL::route('about')}}">About us</a></li>
                        <li><a href="#">Services
                          <i class="fa fa-angle-down" aria-hidden="true" style="color: #fff; margin-left: 5px;"></i></a>
                        </li>
                        <li><a href="{{URL::route('portfolio_layout')}}">work</a></li>
                        <li><a href="{{URL::route('contact')}}">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb_inq">
                        <a href="">Login</a>
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
<script type="text/javascript">
    var setimg = 1;
    document.getElementById(0).src = document.getElementById(setimg).src;
    document.getElementById(setimg).className = "thum selector";
    function preview(img)
    {
      document.getElementById(setimg).className = "thum normal";
      img.className = "thum selector";
      document.getElementById(0).src = img.src;
      setimg = img.id;
    } 
  </script>

<script>
      // $(document).ready(function(){
      //  setTimeout(function(){
      //    $('#popup_login').css('display','block');
      //  }, 2000);
      // });
      $('.close').click(function(event){
        $('#popup_login').css('display','none');
      });
      $('.menu-btn').click(function(event){
        $('#popup_login').css('display','block');
      });
      $('.mb_inq').click(function(event){
        $('#popup_login').css('display','block');
      });
    </script>
    yeild('js')
    <script src="{{asset('c_asset/js/main.js')}}"></script>


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <!-- <script src="{{asset('c_asset/js/jquery/jquery-2.2.4.min.js')}}"></script> -->
    
    <!-- jQuery-2.2.4 js -->
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
    <script src="{{asset('c_asset/js/jquery.fancybox.min.js')}}"></script>

    <!-- jumka js -->
     <script src="{{asset('c_asset/jj_js/slider.js')}}"></script>
  <script src="{{asset('c_asset/jj_js/menu.js')}}"></script>

  <!-- about slider start-->

  <script src="{{asset('c_asset/jj_js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('c_asset/jj_js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('c_asset/jj_js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('c_asset/jj_js/main.js')}}"></script>
  
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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  

  


  <!-- counter end -->
</body>

</html>