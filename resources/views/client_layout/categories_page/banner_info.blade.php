@extends('client_layout.main_page')
@section('content')
<style type="text/css">
	.ban_get_service
{
  width: 100%;
  height: auto;
}
.ban_get_top
{
  padding: 170px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.ban_get_shap
{
  width: 950px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -320px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.ban_get_shap:after
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
.ban_img_show
{
  padding-left: 30px;
}
.ban_img
{
	height: 400px;
	width: 60%;
	margin-bottom: 30px;
}
.ban_form_size
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
.ban_info_form input,textarea
{
	height: 35px;
	margin: 15px 0px 15px;
	border: 2px solid #f9f3ed;
	width: 100%;
	color: #f9f3ed !important;
	background-color: transparent;
}
.ban_info_form textarea
{
	height: 120px;
	resize: none;
}
.ban_info_form input::placeholder , textarea::placeholder
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
.lp_get_note p
{
	color: #f9f3ed;
	padding: 10px 0px 10px;
	width: 100%;
	font-size: 20px;
	position: relative;
}
.fainal_detail_show
{
	color: #10455b;
	font-weight: 500;
	text-transform: capitalize;
}
@media (max-width: 1199px)
{
	.ban_get_shap
	{
	  width: 810px;
	  left: -340px;
	}
	.ban_form_size
	{
		left: 0px;
	}
}
@media (max-width: 991px)
{
	.ban_get_shap
	{
	  width: 100%;
	  height: 45%;
	  transform: skewX(0deg);
	  left: 0px;
	  top: 0px;
	}
	.ban_img_show
	{
		text-align: center;
		padding: 0px;
		margin: 0px;
	}
	.ban_img {
		width: 70%;
		height: 450px;
	}
	.fainal_detail_show
	{
		width: 50%;
		text-align: left;
		margin-left: 380px;
	}
	.ban_form_size
	{
		width: 100%;
		padding: 100px 120px 0px;
		text-align: center;
	}
}
@media (max-width: 767px)
{
	.fainal_detail_show
	{
		width: 80%;
		text-align: left;
		margin-left: 260px;
	}
	.ban_img {
		width: 70%;
		height: 350px;
	}
	.ban_get_shap
	{
	  height: 41%;
	}
	.ban_form_size
	{
		padding: 100px 80px 0px;
	}
}
@media (max-width: 575px)
{
	.ban_get_shap
	{
	  height: 40%;
	}
	.ban_img
	{
		width: 90%;
	}
	.fainal_detail_show
	{
		margin-left: 190px;
	}
	.ban_form_size
	{
		padding: 100px 30px 0px; 
	}
}
@media (max-width: 480px)
{
	.fainal_detail_show {
	    margin-left: 140px;
	    width: 100%;
	}
	.ban_get_shap
	{
	  height: 39%;
	}
}
@media (max-width: 375px)
{
	.ban_img {
		height: 250px;
	}
	.fainal_detail_show
	{
		font-size: 14px;
	    margin-left: 100px;
	}
	.ban_get_shap
	{
	  height: 35%;
	}
	.info_heading
	{
		font-size: 30px;
	}
}
@media (max-width: 320px)
{
	.ban_get_shap
	{
	  height: 34%;
	}
	.fainal_detail_show
	{
	    margin-left: 80px;
		font-size: 11px;
	}
	.ban_form_size
	{
		padding: 50px 10px 0px;
	}
}
</style>
<div class="ban_get_service">
	@forelse($a as $b)
	<form  action="{{route('cate_info_store')}}" method="post">
		@csrf
    <div class="ban_get_top">
      <div class="ban_get_shap"></div>
      <div class="container-fluid">
        <div class="row">
        	@forelse($data as $d)
          <div class="col-lg-7 col-12">
            <div class="ban_img_show">
              <div class="row">
                <div class="col-lg-12">
                  <img src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}" class="ban_img">
                  <input type="hidden" name="image1" value="{{$d->image}}">
                  <input type="hidden" name="categoryid" value="{{$d->cate_id}}">
                  <input type="hidden" name="id" value="{{$d->id}}">
                </div>
                <div class="col-lg-12 col-12">
                  
                    <div class="row">
                    	@if($height)
                      <input type="hidden" name="height" value="{{$height}}">

                    	@if($width)
                      <input type="hidden" name="width" value="{{$width}}">                      

                      <div class="col-lg-3 col-3">
                        <label>Price :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label><i class="fa fa-inr" aria-hidden="true" style="font-size: 15px; padding-right: 3px;"></i><?php
                        	$size = $width * $height;
                        	$total = $b->quantity1 * $b->price_per_banner * $size; 
                        	?>{{$total}}</label>
                        	<input type="hidden" name="price" value="{{$total}}">
                        	<input type="hidden" name="category" value="{{$d->categoryname}}">

                      </div>
                      @endif
                      @endif
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Quality :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->quality1}}</label>
                        <input type="hidden" name="quality" value="{{$b->quality1}}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Quantity :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->quantity1}}</label>
                        <input type="hidden" name="quantity" value="{{$b->quantity1}}">
                      </div>
                    </div>

                    <div class="row">
                    	@if($width)
                      <div class="col-lg-3 col-3">
                        <label>width: </label>
                        <label> {{$width}}</label>
                      </div>
                      @endif
                                            
                    </div>
                    <div class="row">
                    	
                       @if($height)
                      <div class="col-lg-3 col-3">
                        <label>height: </label>
                        <label> {{$height}}</label>
                      </div>
                      @endif
                      
                    </div>
                    
                 
                  
                </div>
              </div>
            </div>
          </div>
          @empty
          @endforelse
          <div class="col-lg-5 col-12">
            <div class="ban_form_size">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <div class="info_heading">enter Banner information</div>
                </div>
              </div>
              <div class="ban_info_form">
               
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                      <input type="text" name="title" placeholder="Title">

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Address" style="height: 70px;"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Product/Products Name" style="height: 100px; margin-top: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Phone Number">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="row">
                        <div class="col-lg-2 col-2" style="color: #f9f3ed; padding: 15px 22px 0px;">Logo</div>
                        <div class="col-lg-10 col-10"><input type="file" name="" style="color: #f9f3ed; border: none; font-size: 15px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Scheme" style="margin-bottom: 10px;"></textarea>
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
                
              </div>
              <div class="lp_get_note">
                <div class="row">
                  <div class="col-lg-12">
                    <p>Note: Fill The Details As Per Your Requirement</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
    @empty
    @endforelse
  </div>

@endsection