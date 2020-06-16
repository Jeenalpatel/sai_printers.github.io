@extends('client_layout.main_page')

@section('content')
<style type="text/css">
		.add_to_cart_main
{
	padding: 150px 0px 100px;
	position: relative;
	background: #f9f3ed;
}
.add_to_cart_heading
{
	position: relative;
	font-size: 30px;
	padding-bottom: 50px;
	text-align: center; 
	color: #10455b;
	font-weight: 700;
}
.add_to_heading
{
	position: relative;
}
.add_to_heading:after
{
	content: "";
	background: #10455b;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 0;
	position: absolute;
	transform: skewX(20deg);
}
.add_to_heading h5
{
	padding: 10px 5px 10px;
	font-size: 15px;
	text-align: center;
	color: #fff;
	z-index: 2;
	position: relative;
}
.add_to_disc h6
{
	color: #10455b;
	position: relative;
	top: 25px;
	text-align: center;
	font-size: 20px;
}
.add_to_disc img
{
	height: 70px;
	width: 70px;
	position: relative;
	top: 5px;
	left: 50px;
	background-size: cover;
	object-fit: cover;
	background-position: center;
}
.catagory_show
{
	position: relative;
	top: 20px;
	left:10px;
	font-size: 20px;
	text-align:center;
}
.num_box
{
	height: 40px;
	width: 80%;
	position: relative;
	left: 30px;
	top: 20px;
}
.num_box input
{
	outline: none;
	border: none;
	height: 100%;
	width: 100%;
	padding: 7px;
	margin: 0px 10px !important;
	background-color: #10455b;
	color: #f9f3ed;
	font-size: 20px;
	border-radius: 5px;
}
.num_box button
{
	background-color: #10455b;
	color: #f9f3ed;
	border-radius: 5px;
	outline: none !important;
	border: none;
	width: 40px;
	font-weight: 900;
	font-size: 20px;
}
.tot_price
{
	top: 20px;
	left: 10px;
	position: relative;
	font-size: 20px;
	text-align:center;
}
.delete_icon i
{
	color: #10455b;
	font-size: 25px;
	position: relative;
	top: 25px;
	left: 70px;

	/*text-align:cente;*/
}
.delete_icon i:hover
{
	color: red;
	cursor: pointer;
}
.continew_sop
{
	position: relative;
	left: 250px;
}
.continew_sop ,.check_out
{
	background-color: #10455b;
	transform: skewX(20deg);
	height: 40px;
	width: 50%;
	position: relative;
	top: 30px;
}
.continew_sop h5,.check_out h5
{
	transform: skewX(-20deg);
	text-align: center;
	padding: 7px;
	font-size: 20px;
	font-weight: 600;
	color: #f9f3ed;
}
.add_to_cart_phn
{
	display: none;
}
.add_to_cart_form
{
	padding: 50px 0px 30px;
	width: 100%;
	position: relative;
}
.a_c_form
{
	width: 100%;
	padding: 0px 250px 0px;
	position: relative;
}
.a_c_form input
{
	height: 40px;
	width: 100%;
	background-color: #447B92;
	color: #f9f3ed;
	outline: none;
	border: none;
	margin: 10px 0px 10px;
}
@media (max-width: 1199px)
{
	.add_to_disc img 
	{
		left: 35px;
	}	
	.a_c_form 
	{
		padding: 0px 100px 0px;
	}
}
@media (max-width: 991px)
{
	.add_to_disc img 
	{
		left: 20px;
	}
	.catagory_show
	{
		top: 10px;
	}
	.delete_icon i
	{
		left: 40px;
	}
	.continew_sop
	{
		left: 150px;
	}
	.add_to_cart_icon
	{
		padding-left: 490px;
	}
}
@media (max-width: 767px)
{
	.add_to_heading:after
	{
		transform: skewX(0deg);
	}
	.add_to_heading h5
	{
		font-size: 13px;
	}	
	.add_to_heading
	{
		margin: 0px;
		padding:0px;
		margin-left: -15px;
	}
	.heding_row_p
	{
		padding-left: 10px;
	}
	.add_to_disc h6
	{
	    top: 25px;
	    font-size: 15px;
	}
	.add_to_disc img
	{
	    height: 50px;
	    width: 50px;
	    left: 5px !important;
	}
	.catagory_show
	{
		font-size: 15px;
		left: 0px;
	}
	.num_box
	{
		left: 0px !important;
		padding: 0px;
		margin: 0px;
		top: 15px;
	}
	.num_box input
	{
		height: 15px !important;
		font-size: 10px;
	}
	.num_box button
	{
		height: 30px;
		width: 30px;
		font-size: 10px;
	}
	.tot_price
	{
		font-size: 15px;
		left: 0px;
		top: 17px;
		padding: 0px;
	}
	.delete_icon i
	{
		left: 15px;
		top: 15px;
	}
	.continew_sop
	{
		left: 100px;
	}
	.continew_sop h5, .check_out h5
	{
		font-size: 15px;
		padding-top: 10px;
	}
	.continew_sop
	{
		margin-top: 0px;
		margin-left: 30px;
	}
	.check_out
	{
		margin-top: 20px;
		margin-left: 130px;
	}
}
@media (max-width: 575px)
{
	.cart_disc,.heding_row_p
	{
		display: none;
	}
	.add_to_cart_phn
	{
		height: auto;
	    width: 70%;
	    left: 90px;
		display: block;
		position: relative;
	}
	.mb_img_add
	{
		position: relative;
	}
	.mb_img_add img
	{
		height: 100px;
		width: 90px;
		position: relative;
		background-size: cover;
		object-fit: cover;
		background-position: center;
	}
	.mb_catagory
	{
		position: relative;
		font-size: 20px;
		text-align: left;
	}
	.mb_number
	{
		padding-top: 5px;
	}
	.mb_number button
	{
		background-color: #10455b;
		color: #f9f3ed;
		outline: none !important;
		border: none;
		width: 40px;
		font-size: 20px;
	}
	.mb_number input
	{
		padding: 5px;
	}
	.mb_price
	{
		padding-top: 10px;
		font-size: 20px;
	}
	.mb_delet
	{
		font-size: 25px;
		top: 30px;
		text-align: center; 
		position: relative;
	}
	.mb_delet i:hover
	{
		color: red;
		cursor: pointer;
	}
	.check_out
	{
		margin-left: 140px;
	}
	.continew_sop
	{
		margin-left: 40px;
	}
}
@media (max-width: 480px)
{
	.a_c_form 
	{
		padding: 0px 30px 0px;
	}
	.add_to_cart_phn
	{
		width: 80%;
		left: 45px;
	}
	.check_out
	{
		margin-left: 110px;
	}
	.continew_sop
	{
		margin-left: 10px;
	}
}
@media (max-width: 375px)
{
	.add_to_cart_phn
	{
		width: 90%;
		left: 15px;
	}
	.mb_number input
	{
		padding: 1px;
	}
	.mb_number button
	{
		width: 30px;
		font-size: 12px;
	}
	.mb_price
	{
		font-size: 15px;
	}
	.mb_delet
	{
    	font-size: 22px;
    	top: 22px;
	}
	.mb_img_add img
	{
	    height: 80px;
	    width: 80px;
	}
	.mb_catagory
	{
		font-size: 15px;
	}
	.continew_sop
	{
		margin-left: -15px;
	}
	.check_out
	{
		margin-left: 90px;
	}
}
@media (max-width: 320px)
{
	.continew_sop
	{
		margin-left: -30px;
	}
	.check_out
	{
		margin-left: 70px;
	}
}

	</style>

	
                
     
<div class="add_to_cart_main">
		<div class="add_to_cart">
			<div class="container">
				<div class="add_to_cart_heading"><u>SHOPPING CART</u></div>
				<div class="heding_row_p">

					<div class="row">
						<div class="col-lg-1 col-md-1 col-1">
							<div class="add_to_heading add_no"><h5>No</h5></div>
						</div>
						<div class="col-lg-2 col-md-2 col-2">
							<div class="add_to_heading add_img"><h5>Image</h5></div>
						</div>
						<div class="col-lg-2 col-md-2 col-2">
							<div class="add_to_heading add_cat"><h5>Catagory</h5></div>
						</div>
						<div class="col-lg-3 col-md-3 col-3">
							<div class="add_to_heading add_qut"><h5>Quantity</h5></div>
						</div>
						<div class="col-lg-2 col-md-2 col-2">
							<div class="add_to_heading add_t"><h5>Total</h5></div>
						</div>
						<div class="col-lg-2 col-md-2 col-2">
							<div class="add_to_heading add_remov"><h5>Remove</h5></div>
						</div>
					</div>
				</div>
				@if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
				<div class="cart_disc">
					<?php
					$subtotal = 0;
					?>
					@forelse($cartCollection as $c)
					
					<div class="row" style="border-bottom: 1px solid #10455b; padding-bottom: 10px; border-top: 1px solid #10455b; padding-top: 1px;">
						<div class="col-lg-1 col-1">
							<div class="add_to_disc add_no"><h6>1</h6></div>
						</div>
						<div class="col-lg-2 col-2">
							<div class="add_to_disc"><img src="{{url('storage/app/category')}}{{'/'}}{{$c->attributes->image}}"></div>
						</div>
						<div class="col-lg-2 col-2">
							<div class="catagory_show">{{$c->name}}</div>
						</div>
						<div class="col-lg-3 col-3">
							<div class="num_box">
							<input type="text" value="{{ $c->attributes->quantity }}" disabled="disabled">
							<input type="hidden" value="{{ $c->attributes->sid }}" disabled="disabled">
							</div>
						</div>
						<div class="col-lg-2 col-2">
							<div class="tot_price" disabled="disabled">{{$c->price}}

										</div>

						</div>

						<div class="col-lg-2 col-2">
							<div class="delete_icon">
								
								<form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $c->id }}" id="id" name="id">
                                    <button value="submit"><i class="fa fa-trash"></i></button>
                                </form>

							</div>
						</div>
						
					</div>
					<?php

					$subtotal = $subtotal + $c->price;
					?>
					<!-- {{$subtotal}} -->
					@empty
					@endforelse
				</div>
						
				<div class="add_to_cart_phn">
					@forelse($cartCollection as $c)
					<div class="row" style="border-bottom: 1px solid #10455b; padding-bottom: 10px; padding-top: 20px;">
						<div class="col-lg-4 col-4">
							<div class="mb_img_add"><img src="{{url('storage/app/category')}}{{'/'}}{{$c->attributes->image}}"></div>
						</div>
						<div class="col-lg-5 col-5">
							<div class="row">
								<div class="col-lg-12 col-12">
									<div class="mb_catagory">{{$c->name}}</div>
								</div>
								<div class="col-lg-12 col-12">
									<div class="mb_number">
										<input type="number" value="800" min="800" max="10000">
									</div>
								</div>
								<div class="col-lg-12 col-12">
									<div class="mb_price">
										<i class="fa fa-inr" aria-hidden="true"></i>800
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-3">
							<div class="mb_delet">
								<i class="fa fa-trash-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					@empty
					@endforelse
				</div>
			</div>
		</div>
		<div class="add_to_cart_form">
			<div class="container">
				<div class="row">
					<div class="a_c_form">
						<form action="{{route('payumoney')}}" method="POST">
							{{ csrf_field() }}
							<h2>Your Information</h2>
							<input type="text" name="firstname" value="{{Auth::guard('web')->user()->name}}" >
							

		                <input type="text"  name="email" value="{{Auth::guard('web')->user()->email}}" >

		                <input type="number"  name="contact" value="{{Auth::guard('web')->user()->mo_no}}" >

		                <input type="text"  name="productinfo" value="productinfo" >
		                Total Amount:-
		                <input type="text"  disabled="disabled" name="amount" value="{{$subtotal}}"  >
							

		                

							
								<?php
									$pa = $subtotal/2;
								?>
								Payable amount:-
									<input type="text"  id="mainprice" name="amount" value="{{$pa}}"  >
								
							<!-- <div class="row"> -->
				<!-- <div class="bottom_btn"> -->
					<div class="row">
					<div class="col-lg-10 col-md-10 col-12">
				<!-- <div class="check_out" id="#Checkout"><h5>Checkout</h5></div> -->
				<button type="submit" class="check_out"><h5>Checkout</h5></button>
				
				<!-- </div> -->
			</div>
			<br>
				
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<!-- <div class="bottom_btn"> -->
				<div class="col-lg-6 col-md-6 col-12">
			<div class="continew_sop"><a href="{{route('cate_layout')}}"><h5>Keep Shopping</h5></a></h5></div>
				</div>
				<!-- </div> -->
			</div>
		</div>
	</div>


@endsection