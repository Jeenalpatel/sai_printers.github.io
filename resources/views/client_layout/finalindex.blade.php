@extends('client_layout.main_layout')
@section('content')

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
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
              

@endsection