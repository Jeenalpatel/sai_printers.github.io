@extends('client_layout.main_page')

@section('content')
 <!-- contact slider start-->
    @if(@bimage)
    <div class="c_slider" style="background-image: url({{url('storage/app/b_image')}}{{'/'}}{{$bimage->c_image}});">
        <div class="c_slider_btn">Contact Us</div>
    </div>
    @endif
    <!-- contact slider over -->

    <!-- free space start-->
        <div class="free_space"></div>
    <!-- free space end-->

    <div class="main_contact">
    <div class="top_contact">
      <div class="contact-shape-wp ">
        <div class="contact-shape" style="background-image: url(img1/reg_up1.webp); object-fit: cover; object-position: center;"></div>
      </div>
      <div class="container">
        <div class="row">


          <div class="col-lg-5 col-12">
            <div class="contact-left">
              <div class="contact-left-content">
                <a><img src="{{url('/c_asset/img1/logo_blue.svg')}}"></a>
              </div>
              <div class="contact-web-links">
                <div class="contact-link-box contact-no">
                  <span class="contact-link-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                  <a href="tel:7405463588"><span>+91 740 546 3588</span></a>
                </div>
                <div class="contact-link-box">
                  <span class="contact-link-icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                  <a href="mailto:kantawalarupesh195@gmail.com">  <span class="c_mail">kantawalarupesh195@gmail.com</span></a>
                </div>
                <div class="contact-link-box">
                  <span class="contact-link-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                  <a> <span>ESW-640, C-569, G.H. Board, Pandesara, Surat.</span></a>
                </div>
              </div>
            </div>
          </div>


          
          <div class="col-lg-6 offset-lg-1 col-12">
            <div class="contactus-form">
              <h2 class="h2-title">Contact Us</h2>
              @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif              <div class="contact-form">
                
                <form action="{{route('contactus_save')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-12"><span class="wpcf7-form-control-wrap"><input type="text" class=" form-input " name="f_name" placeholder="First Name*" value="{{old('f_name')}}">
                      <p style="color: red;">@error('f_name'){{$message}} @enderror</p>
                    </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12"><span class="wpcf7-form-control-wrap"><input type="email" class="form-input" name="email" placeholder="Email*" value="{{old('email')}}"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12"><span class="wpcf7-form-control-wrap"><input type="text" class="form-input" name="phone_no" placeholder="Phone Number*" value="{{old('phone_no')}}">
                      <p style="color: red;">@error('phone_no'){{$message}}* @enderror</p>
                    </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12"><span style="color: black" class="wpcf7-form-control-wrap"><textarea cols="40" rows="10" class="form-input" name="msg"  placeholder="Message" value="{{old('msg')}}"></textarea>
                      <p style="color: red;">@error('msg'){{$message}}* @enderror</p>
                    </span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="contact_submit-btn">
                        <button type="submit" class="sec-btn sm-btn"><span class="btn-icons"><i class="fa fa-envelope" aria-hidden="true"></i><span>submit</span></span></button>
                      </div>
                    </div>
                  </div>
                </form>
                
                 
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
@endsection
