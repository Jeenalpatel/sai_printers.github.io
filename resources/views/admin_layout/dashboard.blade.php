@extends('admin_layout.admin')
@section('content')
    <style>
    	body
{
	padding: 0px;
	margin: 0px;
	overflow-x: hidden;
}
.a_layout
{
	padding: 50px 70px;
	width: 100%;
	background-color: #F7F7F7;
	position: relative;  	
}
.a_l_heading h1
{
	position: relative;
	width: 100%;
	padding: 10px 0px;
	color: #2A3F54; 
}
.a_layout_top
{
	padding: 20px 0px;
	position: relative;
	width: 100%;
}
.a_box
{
	padding: 5px 30px;
	width: 100%;
	position: relative;
	border-radius: 10px;
	border: 3px solid #2A3F54;
}
.a_box .icon
{
	font-size: 100px;
	position: relative;
	text-align: center;
	width: 100%;
	padding: 0px;
	color: #2A3F54; 

}
.a_box .a_count
{
	font-size: 40px;
	color: #2A3F54; 
	text-align: left;
	padding: 20px 0px;
}
.a_box .a_work_name
{
	font-size: 25px;
	color: #2A3F54; 
	text-align: left;
	padding: 20px 0px;
}
@media (max-width: 1199px)
{
	.a_box .icon
	{
		font-size: 70px;
		padding: 10px 0px;
	}
}
@media (max-width: 991px)
{
	.a_box
	{
		margin-bottom: 40px;
	}
	.a_box .icon
	{
		font-size: 100px;
		padding: 10px 0px;
	}
}
@media (max-width: 375px)
{
	.a_layout
	{
		padding: 50px 20px;
	}
}
@media (max-width: 320px)
{
	.a_box .icon
	{
		font-size: 80px;
		padding: 10px 0px;
	}
}
    </style>
<!-- <section class="a_layout"> -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-12">
					<div class="a_l_heading"><h1>Overview</h1></div>
				</div>
			</div>
			<div class="a_layout_top">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">{{$countuser}}</div>
									<div class="a_work_name">User</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">{{$countuser}}</div>
									<div class="a_work_name">Customer</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">{{$review}}</div>
									<div class="a_work_name">Review</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">{{$category}}</div>
									<div class="a_work_name">Category</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="a_layout_top">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-th-large" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">44</div>
									<div class="a_work_name">visitiors</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">29</div>
									<div class="a_work_name">design</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">27</div>
									<div class="a_work_name">Mail</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="a_box">
							<div class="row">
								<div class="col-lg-6 col-6">
									<div class="icon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
								</div>
								<div class="col-lg-6 col-6">
									<div class="a_count">27</div>
									<div class="a_work_name">product</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>







        
@endsection