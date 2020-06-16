@extends('client_layout.main_page')
@section('content')
    <!-- slider start -->
    
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
                                <h2 data-animation="fadeInUp" data-delay="500ms">{{$d->title}}</h2>
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

    <!-- slider over -->
    

    
    <!-- about us start -->
    <section class="about_us_main">
        <div class="about_sub_shap">
            <div class="about-shape-wp"></div>
                <div class="container">
                    <div class="row">
                    @if(@acontent)
                        <div class="col-lg-6 col-12">
                            <div class="about_containt">
                                <h1>About Us</h1>
                                <div class="overflow_text">
                                    <p>{{$acontent->content}}</p>
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
                            <div class="abt_img_section" style="background-image: url({{url('/c_asset/img1/roller.png')}});"></div>
                        </div>
                    </div>
                    @endif
                </div>
        </div>
    </section>
    <!-- about us over -->


<!--Services Section start-->


  <div class="home_servise" style="background-image: url({{asset('c_asset/img1/servise.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="service_heading">SERVICES</div>
          <div class="service_heading_pera">We specialize in a big variety of services</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="servise_slider">
            <div class="service-box">
              <div class="service_img">
                <div class="service_img_icon">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                </div>
              </div>
              <div class="service-box_title">Banner</div>
              <div class="service_pera">
                <p>A professional way to promote your brand at trade shows, outdoor events and more.try it now.your satisfaction is our first priority</p>
              </div>
            </div>
            <div class="service-box">
              <div class="service_img">
                <div class="service_img_icon">
                  <i class="fa fa-credit-card" aria-hidden="true"></i>
                </div>
              </div>
              <div class="service-box_title">Visiting card</div>
              <div class="service_pera">
                <p>we provide a Standard Visiting Cards, Classic Visiting Cards, Rounded Corner Visiting Cards, Square Visiting Cards.</p>
              </div>
            </div>
            <div class="service-box">
              <div class="service_img">
                <div class="service_img_icon">
                  <i class="fa fa-map-o" aria-hidden="true"></i>
                </div>
              </div>
              <div class="service-box_title">Invitation card</div>
              <div class="service_pera">
                <p>Personalised invites for weddings, birthdays & all of life's special occasions.let'smake your occasion more greatful with us.</p>
              </div>
            </div>
            <div class="service-box">
              <div class="service_img">
                <div class="service_img_icon">
                  <i class="fa fa-book" aria-hidden="true"></i>
                </div>
              </div>
              <div class="service-box_title">Bill book</div>
              <div class="service_pera">
                <p>we print biil book for your business as per your requriment.give us one chance to make your business more easier with sai printers.</p>
              </div>
            </div>
            <div class="service-box">
              <div class="service_img">
                <div class="service_img_icon">
                  <i class="fa fa-book" aria-hidden="true"></i>
                </div>
              </div>
              <div class="service-box_title">Book binding</div>
              <div class="service_pera">
                <p>we print college assignment,college exam pepar,one of the trustable place for any kind of document printing.</p>
              </div>
            </div>
            <div class="service-box">
              <div class="service_img">
                <div class="service_img_icon">
                  <i class="fa fa-clone" aria-hidden="true"></i>
                </div>
              </div>
              <div class="service-box_title">sticure sheet</div>
              <div class="service_pera">
                <p>we provide Mailing Labels, Product and Packaging Labels, Return Address Labels, Visiting Card Stickers, Custom Stickers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- #services end-->

    

    
    

<div class="home_work">
       <div class="container">

        <div class="work_start">

            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="work_title">OUR WORKS</div>
                    <div class="work_sub_title">We will help you look professional</div>
                </div>
            </div>
        </div>
        <div class="work_start1">
            <div class="row">
              @forelse($works as $d)
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="work_img">
                        <img src="{{url('storage/app/works')}}{{'/'}}{{$d->image}}">
                        <div class="work_info">
                          <div class="work_info_det">
                            <h1>{{$d->title}}</h1>
                            <div class="view_more"><a href="">view More</a></div>
                          </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
              </div>
              <div class="pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <span class="pagination">{{$works->links()}}</span>
                        <!-- <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>

                            </ul>
                        </nav> -->
                    </div>
    </div>
    
</div>

<!--portfolio end-->

</div>
</div>
</div>
   

     
@endsection