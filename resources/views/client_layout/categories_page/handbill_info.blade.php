@extends('client_layout.main_page')
@section('content')
<style type="text/css">
	.hand_get_service
{
  width: 100%;
  height: auto;
}
.top_hand_get
{
  padding: 170px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.hand_get_wp
{
  width: 1000px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -350px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.hand_get_wp:after
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
.hand_img_show
{
  padding-left: 30px;
}
.hand_img_show .preview
{
  height: 500px;
  width: 55%;
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
.hand_form_size
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
.hand_info_form input,textarea
{
	height: 35px;
	margin: 15px 0px 15px;
	border: 2px solid #f9f3ed;
	width: 100%;
	color: #f9f3ed !important;
	background-color: transparent;
}
.hand_info_form textarea
{
	height: 120px;
	resize: none;
}
.hand_info_form input::placeholder , textarea::placeholder
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
	.hand_get_wp
	{
	  width: 870px;
	}
	.hand_form_size {
	    left: 0px;
	    top: 90px;
	}
	.hand_img_show .preview {
	    height: 500px;
	    width: 65%;
	}
	.hand_img_show {
	    padding-left: 0px; 
	    position: relative;
	    top: -20px;
	}
	.top_hand_get
	{
	  padding: 170px 0 150px;
	}
}

@media (max-width: 991px)
{
	.hand_get_wp
	{
	  width: 100%;
	  height: 55%;
	  transform: skewX(0deg);
	  left: 0px;
	  top: 0px;
	}
	.thum_main {
	    padding-left: 0px; 
	}
	.hand_img_show
	{
		padding-left: 0px;
		text-align: center;
	}
	.fainal_detail_show {
	    position: relative;
	    width: 60%;
	    text-align: left;
	    margin-left: 380px;
	}
	.hand_img_show .preview
	{
		height: 500px;
		width: 50%;
	}
	.hand_form_size
	{
		left: 0px;
		width: 100%;
    	padding: 0px 100px 0px;
	}
}
@media (max-width: 767px)
{
	.hand_img_show .preview
	{
		height: 500px;
		width: 60%;
	}
	.fainal_detail_show {
	    margin-left: 280px;
	}
	.hand_get_wp
	{
	  height: 50%;
	}
}
@media (max-width: 575px)
{
	.hand_img_show .preview
	{
		height: 450px;
		width: 70%;
	}
	.fainal_detail_show {
	    margin-left: 180px;
	    width: 100%;
	}
	.hand_form_size
	{
    	padding: 0px 60px 0px;
	}
	.hand_get_wp
	{
	  height: 47%;
	}
}
@media (max-width: 480px)
{
	.fainal_detail_show {
	    margin-left: 140px;
	}
	.hand_img_show .preview
	{
		height: 400px;
	}
}
@media (max-width: 375px)
{
	.fainal_detail_show {
	    margin-left: 90px;
	}
	.hand_img_show .preview
	{
		height: 350px;
		width: 90%;
	}
	.hand_get_wp
	{
	  height: 45%;
	}
	.info_heading
	{
		font-size: 30px;
	}
	.hand_form_size
	{
    	padding: 0px 20px 0px;
	}
}
@media (max-width: 320px)
{
	.fainal_detail_show {
	    margin-left: 70px;
	}
}
</style>
<div class="hand_get_service">
  @forelse($data as $d)
  @forelse($a as $b)
  
  
  <form action="{{route('cate_info_store')}}" method="post">
    @csrf
    <div class="top_hand_get">
      <div class="hand_get_wp"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="hand_img_show">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <img id="0" class="preview" src="#"><br>
                </div>
                <div class="col-lg-12 col-12">
                  <div class="thum_main">
                    <img id="1" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
                    <img id="2" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">

                  <input type="hidden" name="image1" value="{{$d->image}}">
                  <input type="hidden" name="image2" value="{{$d->b_image}}">
                  <input type="hidden" name="categoryid" value="{{$d->cate_id}}">
                  <input type="hidden" name="id" value="{{$d->id}}">
                  <input type="hidden" name="category" value="{{$d->categoryname}}">
                  <input type="hidden" name="size" value="{{$b->size11}}">
                  <input type="hidden" name="side" value="{{$b->side1}}">
                  </div>
                </div>
                <div class="col-lg-12 col-12">
                  
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Price :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label><i class="fa fa-inr" aria-hidden="true" style="font-size: 15px; padding-right: 3px;"></i><?php
                          $total = $b->price_per_handbill * $b->quantity1;
                        ?></label>
                        {{$total}}
                        <input type="hidden" name="price" value="{{$total}}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Size :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->size11}}</label>
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
                      <div class="col-lg-3 col-3">
                        <label>Colour :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>Multi</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Side :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->side1}}</label>
                      </div>
                    </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-12">
            <div class="hand_form_size">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <div class="info_heading">enter handbill information</div>
                </div>
              </div>
              <div class="hand_info_form">
                
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="title" placeholder="Main Title">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Sub Title">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Address" style="height: 70px;"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Phone Number">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="email" name="" placeholder="Email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Product Name With Details" style="margin-bottom: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="If You Want To Add Extra Detail Type Here"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <input type="submit" name="" value="Submit" style="color: #f9f3ed;" class="sub_btn">
                    </div>
                  </div>
                
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
  </form>
  @empty
  @endforelse

  @empty
  @endforelse
  </div>

@endsection