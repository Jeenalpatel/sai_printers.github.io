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
    
    <!-- Core Stylesheet -->
    
    <link rel="stylesheet" href="{{asset('c_asset/css/bootstrap.min.css')}}">
   
    <!-- <link rel="stylesheet" href="{{asset('c_asset/css/my.css')}}">
    
    <link rel="stylesheet" href="{{asset('c_asset/css/service.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/work.css')}}">
    <link rel="stylesheet" href="{{asset('c_asset/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('c_asset/css/work.css')}}">
 -->



        <!-- jumka css -->
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/main_hedfut.css')}}">
 <!--  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/slider.css')}}">
  --> <!-- <link rel="stylesheet" type="text/css" href="{{asset('c_asset/css/jj_about.css')}}"> -->
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/contact_us.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/pop_up.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/about_us.css')}}">


  <!-- <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/bootstrap.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('c_asset/jj_css/bootstrap.min.css')}}"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
  font-awesome.min.css">
   --><!-- modal123 lonk bootstarp -->
  <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
   --><!-- about slider client review start -->
  <!-- <link rel="stylesheet" href="{{asset('c_asset/jj_css/bootstrap-datepicker.css')}}">
   --><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{asset('c_asset/js/jquery/jquery-2.2.4.min.js')}}"></script>

  <!-- about slider client review end -->


    
    <style type="text/css">
        

    
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
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

              
            </li>
            <li><a href="{{URL::route('portfolio_layout')}}">work</a></li>
            <li><a href="{{URL::route('contact')}}">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6">

          @if(@Auth::guard('web')->user()->name)
        <div class="user_detail">
            <div class="row">
              <div class="col-lg-4">
                  <div class="user_image"><img src="{{asset('c_asset/img1/7.jpg')}}" class="user_profile"></div>
              </div>
              <div class="col-lg-8">
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
          <div class="service">
  @forelse($data as $d)
  <div class="top_service">
    <div class="service_shap_wp"></div>
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6">
        <div class="ser_img_show">
        <div class="row">
          <div class="col-lg-12">
            <img id="0" class="preview" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}"><br>
          </div>
          <div class="col-lg-12">
            <div class="thum_main">
              <img id="1" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
              <img id="2" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="visi_form_start">
        <div class="heading">{{$d->categoryname}}</div>
        <div class="visi_form">
          <form method="post" action="">
            
            <div class="row ">

              <div class="col-lg-4">
              <lable>Paper quality</lable>
            </div>
              <div class="col-lg-8">

                <select id="type" name="quality" >
                      <option selected disabled hidden > mam select option</option>
                      @forelse($quality as $q)
                        <option value="{{$q->id}}" >{{$q->q_name}}
                        </option>
                      @empty
                      @endforelse
                </select>
              </div>
            </div>
            <br>

            <div class="row ">

              <div class="col-lg-4">
              <lable>Paper quality</lable>
            </div>
              <div class="col-lg-8">

                <select >
                      <option selected disabled hidden >select option</option>
                      @forelse($quantity as $q)
                        <option value="{{$q->id}}" >{{$q->q_value}}
                        </option>
                      @empty
                      @endforelse
                </select>
              </div>
            </div>
            <br>
            <div class="row ">

              <div class="col-lg-4">
              <lable>Paper quality</lable>
            </div>
              <div class="col-lg-8">

                <select  >
                      <option selected disabled hidden >select option</option>
                      @forelse($quality as $q)
                        <option value="{{$q->id}}" >{{$q->q_name}}
                        </option>
                      @empty
                      @endforelse
                </select>
              </div>
            </div>
            
          </form>
        

        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@empty
@endforelse
</div>


<!-- <label>Paper quality</label>
  <select id="type" name="quality" >
        <option selected disabled hidden >mam select option</option>
        @forelse($quality as $q)
        <option value="{{$q->id}}" >{{$q->q_name}}
        </option>
        @empty
        @endforelse
  </select>
 -->
  <label>Paper quality</label>
  <select id="type1" name="quality" >
        <option selected disabled hidden >mam select option</option>
        @forelse($quality as $q)
        <option value="{{$q->id}}" >{{$q->q_name}}
        </option>
        @empty
        @endforelse
  </select>
</div>
<br><br>



<div class="price_list">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
        <div class="visi_price_info">
          

          <div class="price_col_title">
            <div class="row" style="border-bottom: 1px solid #fff; padding-bottom: 20px;">
              <div class="col-lg-3"><span style="padding-left: 10px;">Quantity</span></div>
              <div class="col-lg-3"><span>Price per piece</span></div>
              <div class="col-lg-3"><span style="padding-left: 70px;">Total price</span></div>
              <div class="col-lg-3"><span style="padding-left: 90px;">Side</span></div>
            </div>
          </div>

          <div class="visi_rate" id="non_tearable_card" style="display: none;" >
            
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">800</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.80</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">640</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">800</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">1.04</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">832</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.60</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">600</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.80</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">800</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1500</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.90</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1350</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1500</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">1.10</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1650</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">2000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.60</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1200</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">2000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.80</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1600</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">3000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.60</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1800</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">3000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.80</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">2400</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            
          </div>

          <div class="visi_rate" id="tearable_card" style="display: none;" >
            
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">800</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.50</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">400</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">800</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.65</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">520</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.35</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">350</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.50</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">500</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1500</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.50</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">750</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1500</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.70</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1050</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">2000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.35</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">700</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">2000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.50</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1000</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">3000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.35</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1050</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">3000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.50</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1500</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            
          </div>

          <div class="visi_rate" id="Matte_card" style="display: none;"  >
            
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">800</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.80</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">640</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.60</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">600</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1500</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.90</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1350</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">2000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.60</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1200</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">3000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">0.60</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1800</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">One Side</span></div>
            </div>
            
          </div>

          <div class="visi_rate" id="matte_dai_cut_card" style="display: none;" >
            
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">800</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">1.80</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1440</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">1.40</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">1400</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">1500</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">1.90</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">2650</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">2000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">1.40</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">2800</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            <div class="row" style="border-bottom: 1px solid #fff; padding: 10px 0px 10px;">
              <div class="col-lg-3"><span style="padding-left: 30px;">3000</span></div>
              <div class="col-lg-3"><span style="padding-left: 50px;">1.40</span></div>
              <div class="col-lg-3"><span style="padding-left: 100px;">4200</span></div>
              <div class="col-lg-3"><span style="padding-left: 80px;">Two Side</span></div>
            </div>
            
          </div>

          <!-- <div class="rendom_choice">
            <div class="row">
              <div class="col-lg-6"><input type="text" name="" placeholder="Enter Quantity"></div>
              <div class="col-lg-6"><input type="lable" name="" placeholder="Total Price"></div>
            </div>
          </div> -->

        </div>
      </div>

      
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


        <script src="{{asset('c_asset/js/main.js')}}"></script>


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('c_asset/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('c_asset/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('c_asset/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('c_asset/js/active.js')}}"></script>


  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
        $('#type').change(function(){
            var v = $(this).val();
            alert(v);

            if(v == '1')
            {
              alert('non_tearable_card');
              $('#non_tearable_card').css('display','block');
              $('#Matte_card').css('display','none');
              $('#tearable_card').css('display','none');
              $('#matte_dai_cut_card').css('display','none');
            }
            else if(v == '2')
            {
              alert('Matte_card');
              $('#Matte_card').css('display','block');
              $('#non_tearable_card').css('display','none');
              $('#tearable_card').css('display','none');
              $('#matte_dai_cut_card').css('display','none');

            }
            else if(v == '3')
            {
              alert('tearable_card');
              $('#tearable_card').css('display','block');
              $('#non_tearable_card').css('display','none');
              $('#Matte_card').css('display','none');
              $('#matte_dai_cut_card').css('display','none');

            }
            else if(v == '5')
            {
              alert('matte_dai_cut_card');
              $('#matte_dai_cut_card').css('display','block');
              $('#non_tearable_card').css('display','none');
              $('#Matte_card').css('display','none');
              $('#tearable_card').css('display','none');
            }
            else
            {
              alert('else');
              $('#non_tearable_card').css('display','block');
              $('#Matte_card').css('display','none');
              $('#tearable_card').css('display','none');
              $('#matte_dai_cut_card').css('display','none');
            }


          })
      })
  
</script>

<script type="text/javascript">
  var data1 = <?php echo json_encode(@$data1); ?>;
  console.log(data1);

  $(document).ready(function(){
        $('#type').change(function(){
          var token = '{{Session::token()}}';
            var id = $(this).val();
              alert(id);

              var data = {'id':id,'_token':token};

              $.ajax({
               'type':'post',
               'data':data,
               'url':'{{route(change_table_query)}}',
               success:function(ret){
                
                console.log(ret);
                var list = " ";
                
                $('#qty').css('display','block');

                for(var i = 0; i < ret['qualityname'].length; i++)
                {

                  list += '<div id="qty" style="display: none;"><tr><td>'+ret[i]['quantity']+'</div></td><td>'+ret[i]['price_per_card']+'</div></td><td>'+ret[i]['sideofcard']+'</div></td><td>'+ret[i]['qualityname']+'</div></td><br><br></tr></div>';
                  
                  $('#qty').html(list);
                  
                }   
              }
          })
      })
    })
</script>



</body>
</html>


</body>
</html>