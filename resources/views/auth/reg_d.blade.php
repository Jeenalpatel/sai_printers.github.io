<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{asset('c_asset/css/bootstrap.min.css')}}">
    
	<style type="text/css">
		.registration_main
{
	padding: 120px 0px 60px;
	width: 100%;
	background-image:url({{url('c_asset/img1/7.jpg')}});
	object-fit: cover;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	object-position: center;
}
.reg_sub
{
	padding: 30px 0px 30px;
	width: 50%;
	float: right;
	position: relative;
}
.reg_sub h1
{
	color: #fff;
	font-size: 45px;
	text-align: center;
}
.reg_sub input,textarea
{
	height: 40px;
	width: 100%;
	font-size: 20px;
	font-weight: 600;
	background-color: transparent;
	outline: none;
	color: #000 !important;
	border: 2px solid #fff;
	margin-top: 20px;
	margin-bottom: 10px;
    resize: none;
}
.reg_sub textarea
{
	height: 90px;
}
.reg_sub_btn
{
	background-color: #f9f3ed !important;
	color: #10455b !important;
}


	</style>

</head>
<body>

	<div class="container-fluid">
		<div class="row bg-success">
			<div class="col-lg-12">jinal</div>
		</div>
	</div>
			<div class="registration_main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form method="POST" action="{{ route('register') }}">
						@csrf
					<div class="reg_sub form-group">
						<div class="row">
							<div class="col-lg-12"><h1>Registration</h1></div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" placeholder="User Name">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<input id="mo_no" type="number" class="form-control @error('mo_no') is-invalid @enderror" name="mo_no" required autocomplete="new-password" placeholder="Phone No">

                                @error('mo_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-lg-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-lg-6">
								 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm-Password">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<input type="submit" name="" value="submit" class="reg_sub_btn">
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<!-- <script>
        new WOW().init();
    </script> -->
     <script>
    	// login start

    	// $(document).ready(function(){
    	// 	setTimeout(function(){
    	// 		$('#popup_login').css('display','block');
    	// 	}, 2000);
    	// });
    	$('.close').click(function(event){
    		$('#popup_login').css('display','none');
    	});
    	$('.close').click(function(event){
    		$('#popup_review').css('display','none');
    	}); 
    	$('.menu-btn').click(function(event){
    		$('#popup_login').css('display','block');
    	});
    	$('.mb_inq').click(function(event){
    		$('#popup_login').css('display','block');
    	});

    	// login end

    	// review start

    	$('.f_review').click(function(event){
    		$('#popup_review').css('display','block');
    	});

    	// review end
    </script>


</body>
</html>

	


    