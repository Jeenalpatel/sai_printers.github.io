@extends('client_layout.main_page')

@section('content')
<style type="text/css">
	.b_b_get_service
{
  width: 100%;
  height: auto;
}
.b_b_get_top_service
{
  padding: 170px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.bb_get_shap_wp
{
  width: 900px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -300px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.bb_get_shap_wp:after
{
  content: "";
  display: block;
  position: absolute;
  background: #f9f3ed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  opacity: .9;
}
.bb_img_show
{
  padding-left: 30px;
}
.bb_img_show .preview
{
  height: 500px;
  width: 50%;
}
.thum_main
{
  padding: 20px 0px 20px;
  padding-left: 50px;
}
.thum
{
  height: 70px;
  width: 100px;
  cursor: pointer;
}
.selector
{
  border: 5px solid #10455b;
}
.bb_get_form_size
{
	left: -30px;
	position: relative;
}
.info_heading
{
	text-transform: capitalize;
	color: #f9f3ed;
	font-size: 40px;
	text-align:left;
	padding-bottom: 10px;
	font-weight: 600;
}
.bb_get_info_form input,textarea
{
	height: 35px;
	margin: 15px 0px 15px;
	border: 2px solid #f9f3ed;
	width: 100%;
	color: #f9f3ed !important;
	background-color: transparent;
}
.bb_get_info_form textarea
{
	height: 120px;
	resize: none;
}
.bb_get_info_form input::placeholder , textarea::placeholder
{
	color: #f9f3ed !important;
	opacity: .5;
}
.sub_btn:hover
{
	background-color: #f9f3ed;
	color: #10455b !important;
	font-weight: 500;
}
.fainal_detail_show
{
	color: #10455b;
	font-weight: 500;
	text-transform: capitalize;
}
.hand_fecility
{
	padding: 10px;
	border: 2px solid #f9f3ed;
	color: #f9f3ed;
	font-size: 25px;
	margin-top: 20px;
}
@media (max-width: 1199px)
{
	.bb_get_shap_wp
	{
	  width: 780px;
	}
	.bb_get_form_size
	{
		left: 0px;
	}
	.bb_img_show {
     padding-left: 0px; 
	}
}

@media (max-width: 991px)
{
	.bb_get_shap_wp
	{
	  width: 100%;
	  height: 52%;
	  transform: skewX(0deg);
	  left: 0px;
	  top: 0px;
	}
	.thum_main {
	    padding-left: 0px;
	}
	.bb_img_show
	{
		padding-top: 0px;
   		text-align: center;
	}
	.fainal_detail_show {
	    width: 70%;
	    left: 350px;
	    text-align: left;
	    position: relative;
	}
	.bb_img_show .preview
	{
		height: 550px;
    	width: 50%;
	}
	.bb_get_form_size {
    	padding: 150px 100px 0px;
	}
}
@media (max-width: 767px)
{
	.bb_get_shap_wp
	{
		height: 48%;
	}
	.fainal_detail_show {
	    left: 280px;
	}

}
@media (max-width: 575px)
{
	.bb_img_show .preview
	{
		height: 500px;
    	width: 70%;
	}
	.fainal_detail_show {
	    left: 200px;
	}
	.bb_get_shap_wp
	{
		height: 45%;
	}
	.bb_get_form_size {
    	padding: 150px 50px 0px;
	}
}
@media (max-width: 480px)
{
	.fainal_detail_show {
	    left: 140px;
	    width: 100%;
	}
	.hand_fecility {
	    font-size: 20px;
	}
}
@media (max-width: 375px)
{
	.bb_img_show .preview
	{
		height: 400px;
    	width: 90%;
	}
	.fainal_detail_show {
	    left: 90px;
	}
	.bb_get_shap_wp
	{
		height: 44%;
	}
	.info_heading {
	    font-size: 30px;
   	}
}
@media (max-width: 320px)
{
	.fainal_detail_show {
	    left: 80px;
	    font-size: 15px;
	}
	.bb_get_form_size {
    	padding: 130px 10px 0px;
	}
	.bb_get_shap_wp
	{
		height: 44%;
	}
}
</style>
<div class="b_b_get_service">
	@forelse($a as $b)
    <div class="b_b_get_top_service">
    	<form class="fainal_detail_show" action="{{route('cate_info_store')}}" method="post">
    		@csrf
      <div class="bb_get_shap_wp"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="bb_img_show">
              <div class="row">

              	@forelse($data as $d)
                 

                <div class="col-lg-12 col-12">
                	<input type="hidden" name="image1" value="{{$d->image}}">
            <input type="hidden" name="image2" value="{{$d->b_image}}">
            <input type="hidden" name="categoryid"  value="{{$d->cate_id}}">
          
                  <img id="0" class="preview" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}"><br>
                </div>
                <div class="col-lg-12 col-12">
                  <div class="thum_main">
                    <img id="1" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
                    <img id="2" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">
                  </div>
                </div>
                <div class="col-lg-12 col-12">
                  
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label name="price" required>Price :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label><i class="fa fa-inr" aria-hidden="true" style="font-size: 15px; padding-right: 3px;"></i>

                        	<?php
                        	$total = $b->quantity1 * $b->price_per_book;
                        	?>
                        	{{$total}}
                        </label>
                        <input type="hidden" name="price" value="{{$total}}">
                        <input type="hidden" name="id" value="{{$d->id}}">
                        <input type="hidden" name="category" value="{{$d->categoryname}}">
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label name="quantity" required >Quantity :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->quantity1}} Bill Book</label>
                        <input type="hidden" name="quantity" value="{{$b->quantity1}}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label required>Size :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->size1}}</label>
                        <input type="hidden" name="size" value="{{$b->size1}}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label required>Colour :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>Multi</label>
                        <input type="hidden" name="colour" value="multi">
                        
                      </div>

                      <div class="col-lg-9 col-9">
                        
                        <!-- <input type="submit" name="" value="Submit"> -->
                      </div>
                    </div>
                  
                  
                </div>
                @empty
                @endforelse
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-12">



            <div class="bb_get_form_size">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <div class="info_heading">enter Bill Book information</div>
                </div>
              </div>
              <div class="bb_get_info_form">
                <form action="{{route('cate_info_store')}}" method="post">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="title" placeholder="Title">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="gstno" placeholder="GST NO">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Address" style="height: 70px;"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Phone Number1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Phone Number2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="row">
                        <div class="col-lg-2 col-2" style="color: #f9f3ed; padding: 15px 22px 0px;">Logo</div>
                        <div class="col-lg-10 col-10"><input type="file" name="" style="color: #f9f3ed; border: none; font-size: 15px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="padding-bottom: 10px;">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Terms & Conditions"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="If You Want Extra Detail Type Here"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      @if(@Auth::guard('web')->user()->name) 
                      <div class=""><input type="submit" name="" value="SUBMIT FORM"></div>
                      @else
                      <form method="POST" action="{{ route('login') }}" >
                      @csrf
                      <!-- <div class=""><input type="button" name="" id="login_click" value="ADD TO CART"></div> -->
                      <a href="#" class="menu-btn" id="login_click" style="text-decoration-style: none;">ADD TO CART</a>
                      <!-- <a href="{{route('login')}}"><button id="login_click">add to cart</button></a> -->
                    </form>
                      @endif

                      <!-- <input type="submit" name="submit" value="Submit"> -->
                      
                    </div>
                  </div>

                </form>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="hand_fecility">
                    Note :- Don't Worry About The Photo We Will Set According To The Handbill....
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
    @empty
    @endforelse
  </div>



@endsection