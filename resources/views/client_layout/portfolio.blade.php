@extends('client_layout.main_page')
@section('content')
<!-- slider image -->
    @if(@bimage)
    <div class="ab_slider" style="background-image: url({{url('storage/app/b_image')}}{{'/'}}{{$bimage->w_image}});">
        <div class="ab_slider_btn">Our Works</div>
    </div>
    @endif
    <!-- slider image over -->

   
 		  <section class="rooms-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center pt-3">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center pt-3">
                        <div class="line-"></div>
                        <h2>Portfolio</h2>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="row">

               @forelse($portfolio as $d)
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-work-area wow fadeInUp" data-wow-delay="200ms">
                        <a href="{{url('storage/app/portfolio')}}{{'/'}}{{$d->image}}" class="item-wrap" data-fancybox="gallery" >
                            <span class="">{{$d->c_name}}</span>
                            <!-- <p class="price-from">start from ${{$d->price}}</p> -->
                            <img class="images" src="{{url('storage/app/portfolio')}}{{'/'}}{{$d->image}}">
                            
                        
                        <!-- Price -->
                        
                        <!-- Rooms Text -->
                        <!-- <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Deluxe Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div>
                         --><!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">start from ${{$d->price}}</a>
                        <!-- <p class="price-from">start from ${{$d->price}}</p> -->
                    </div>
                </div>
                @empty
              @endforelse
    

                
            
    

                
                <div class="col-12">
                    <!-- Pagination -->
                    <div class="pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <span class="pagination">{{$portfolio->links()}}</span>
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
        </div>
    </section>
  

@endsection