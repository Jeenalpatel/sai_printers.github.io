@extends('client_layout.main_layout')
@section('content')


 <!-- slider image -->
    @if(@bimage)
	<div class="ab_slider" style="background-image: url({{url('storage/app/b_image')}}{{'/'}}{{$bimage->s_image}});">
		<div class="ab_slider_btn">SERVICES </div>
	</div>
    @endif


    <div class="container ">
		<div class="row mt-5">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
								<li class="main-nav-list"><a data-toggle="collapse" href="{{route('cate_layout')}}" aria-expanded= "false"></span>all</a></li>

								

						@forelse($cate as $d)
							<ul class="main-categories">
								
								<li class="main-nav-list"><a data-toggle="collapse" href="{{route('par_category',['id'=>$d->id])}}" aria-expanded= "false" aria-controls=""></span>{{$d->name}}</a>

								<!-- @forelse($subcate as $s)
									<ul class="collapse" id="{{$d->id}}" data-toggle="collapse" aria-expanded="false" aria-controls="">

									<li class="main-nav-list child"><a href="">{{$s->sub_name}}</a></li>
								
									</ul>
								@empty
								@endforelse -->
								</li>

						
							</ul>
						@empty
						@endforelse

					</div>
				
				</div>
			
			<div class="col-xl-9 col-lg-8 col-md-7 " id="table_data">
   
				<section class="lattest-product-area pb-40 category-list " >
					
					
						@yield('content1')


						
						<!-- jinal laljibhai patel -->
												
				</div>
									
				</section> 
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>
 <!-- <script>
$(document).ready(function(){

 $(document).on('click', '.page-link', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
 });

 function fetch_data(page)
 {
  var _token = $("input[name=_token]").val();
  $.ajax({
   url:"{{route('pagination.fetch')}}",
   method:"POST",
   data:{_token:_token,page:page},
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
 }
 
});
</script>
 -->
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				

@endsection

