@extends('client_layout.main_category')

@section('content1')
					<div class="row" id="jinal">
						@forelse($category as $d)
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<a href="{{route('modal1',['id'=>encrypt($d->id)])}}"><img class="img-fluid" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}" alt=""></a>
								<div class="product-details">
									<h5><b>{{$d->categoryname}}</b></h5>
									<h6>price:={{$d->price}}</h6>
									<!-- <div class="price">
										<h6>price:={{$d->price}}</h6>
										
									</div>
									 --><div class="prd-bottom">

										
										<a href="" class="social-info">
											<span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
											<p class="hover-text">Wishlist</p>
										</a>
										
										<a href="" class="social-info">
											<span><i class="fa fa-eye" aria-hidden="true"></i></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
													
								</div>

							</div>
											
						</div>
						@empty
					@endforelse
					</div>
					<div class="filter-bar d-flex flex-wrap align-items-center">
          
            <span>{{$category->links()}}</span>
          </div>






<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
						<script>
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
  	data:{_token:_token,page:page},
   url:"{{route('pagination.fetch')}}",
   method:"POST",
   
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
 }
 
});
</script>

 -->
				

	
	


	
@endsection
