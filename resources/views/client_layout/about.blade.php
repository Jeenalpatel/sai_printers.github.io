@extends('try_layout.trymain_layout')

@section('content')
 <!-- slider image -->
    @if(@bimage)
    <div class="ab_slider" style="background-image: url({{url('storage/app/b_image')}}{{'/'}}{{$bimage->a_image}});">
        <div class="ab_slider_btn">ABOUT US</div>
    </div>
    @endif
    <!-- slider image over -->

    

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
                        @forelse($review as $r)
                        
                        <div class="item">
                            <div class="testi-item">
                                <div>
                                    <p>
                                        {{$r->review}}
                                    </p>
                                </div>
                                <h4>{{$r->name}}</h4>
                            </div>
                        </div>
                        @empty
                        @endforelse
                        <!-- <div class="item">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- what client say end -->
    
@endsection
