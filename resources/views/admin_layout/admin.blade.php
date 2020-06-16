<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>p_admin </title>

    <!-- Bootstrap -->
    <link href="{{asset('a_asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('a_asset/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('a_asset/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('a_asset/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('a_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('a_asset/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('a_asset/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('a_asset/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{URL::route('c_layout')}}" class="site_title"> <span>SAI PRINTERS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{@Auth::guard('admin')->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                   <li><a href="{{route('dashboard')}}"><i class="fa fa-users"></i>Dashboard</a></li>
                  <li><a href="{{route('user_detail')}}"><i class="fa fa-users"></i>User Managment</a></li>
                  <li><a href="{{route('admin_detail')}}"><i class="fa fa-user"></i>Admin Managment</a></li>



                  <li><a><i class="fa fa-table"></i> category Managment<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('category')}}"><i class="fa fa-home"></i> Category Insert</a></li>
                      <li><a><i class="fa fa-table"></i> name_insert<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('cate_name')}}">MainCategory</a></li>
                      <li><a href="{{route('subcate_name')}}">Sub Category</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-table"></i>Add Qualification <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a><i class="fa fa-table"></i>visiting card <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="{{route('add_quality')}}">Add Quality</a></li>
                      <li><a href="{{route('add_quantity')}}">Add Quantity</a></li>
                      <li><a href="{{route('add_side')}}">side</a></li>
                      <li><a href="{{route('price_list')}}">price_list</a></li>
                      
                    </ul></li>


                    <li><a><i class="fa fa-table"></i>Bill Book <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="{{route('bill_book_size')}}">Add Size</a></li>
                      <li><a href="{{route('bill_book_quantity')}}">Add Quantity</a></li>
                      <li><a href="{{route('bill_book_pricelist')}}">Add Price</a></li>
                      
                    </ul></li>
                      
                    </ul>
                  </li>
                      
                    </ul>
                  </li>

                   <li><a><i class="fa fa-table"></i> Extra page<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('banner')}}"><i class="fa fa-file-image-o"></i> Slider</a></li>
                      <li><a href="{{route('works')}}"><i class="fa fa-home"></i> works</a></li>
                      <li><a href="{{route('portfolio_start')}}"><i class="fa fa-home"></i>Portfolio</a></li>
                      <li><a href="{{route('logo')}}"><i class="fa fa-home"></i> logo</a></li>
                      <li><a href="{{route('b_image')}}"><i class="fa fa-home"></i>Banner for each page</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i>About Page <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('about_content')}}">Content</a></li>
                      <li><a href="{{route('subcate_name')}}">User Detail</a></li>
                      <li><a href="{{route('subcate_name')}}">Review</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('order')}}"><i class="fa fa-user"></i>Order Managment</a></li>

                  

                    
                    
                    
                  
                    
                    
                  
                   

                  
                    
                    
                    
                  
                  


                  
                  
                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{@Auth::guard('admin')->user()->name}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{ route('admin_logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                                                     {{ __('Logout') }}
                                                     <i class="fa fa-sign-out pull-right"></i>
                    <a href="{{ route('admin_logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    
                     <form id="logout-form" action="{{ route('admin_logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>                    
                                   
                  </div>
                </li>

               <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    
                    <span class="badge bg-green">

                    <?php  
                      $count = @$mails ? count(@$mails) : 0;
                    ?>
                      {{$count}}
                    </span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1" style="overflow-x: hidden;height: auto;max-height: 300px;" >

                    @if(@$mails)
                    @forelse($mails as $m)
                    
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{route('show_contact_mails_display',['id'=>encrypt($m->id)])}}">
                       
                        <span>
                          <span><b>Message From :</b> {{$m->f_name}}</span><br>
                          <span><b>Email-Id :</b> {{$m->email}}</span><br>
                          <span><b>Phone No :</b> {{$m->phone_no}}</span><br>
                          <span class="message"><b>Message :</b>{{$m->msg}}</span>
                        </span>
                          <span class="time">
                            <?php  $dt=Carbon\Carbon::Parse(config('local_time.time'));
                                   $dt1=Carbon\Carbon::Parse($m->created_at); ?>
                                   <?php echo $dt1->diffForHumans($dt); ?>           
                          </span>
                      </a>
                    </li>
                    @empty
                    @endforelse
                    @endif
                    
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @yield('content')
          
          
                  
                           </div>
          <!-- /top tiles -->
          
         
          
        <!-- footer content -->
       

    <!-- jQuery -->
    <script src="{{asset('a_asset/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('a_asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src=".{{asset('a_asset/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('a_asset/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('a_asset/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('a_asset/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('a_asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('a_asset/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('a_asset/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('a_asset/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('a_asset/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('a_asset/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('a_asset/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('a_asset/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('a_asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('a_asset/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('a_asset/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('a_asset/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('a_asset/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('a_asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('a_asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('a_asset/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('a_asset/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('a_asset/build/js/custom.min.js')}}
     "></script>
	
  </body>
</html>
