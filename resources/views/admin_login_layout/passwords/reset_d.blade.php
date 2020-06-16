<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">

	<style>
		.pass_form input
		{
			width: 80%;
			background-color: transparent;
			outline: none;
			border:none;
			border-bottom: 1px solid #10455b;
			margin-top: 40px;
			padding: 5px;
			color: #10455b;
			position: relative;
		}
		.pass_form input::placeholder
		{
			color: #10455b;
			opacity: .7;
		}
		.reset_pass
		{
			position: relative;
			width: 100vw;
			height: 100vh;
			z-index: 1001;
		}
		.reset
		{
			width: 400px;
			padding: 20px 10px 50px;
			background-color: #f9f3ed;
			position: absolute;
			top: 160px;
			left: 550px;
			box-shadow: 0 0 80px #393838;
			text-align: center;
		}
		.reset h1
		{
			color: #10455b !important
		}
		.pass_form button
		{
			border: none;
			outline: none;
			padding: 5px 10px;
			margin-top: 40px;
			background-color: #10455b;
			color: #fff;
		}
		.pass_form button:hover
		{
			background-color: #fff; 
			border: 1px solid #10455b;
			color: #10455b;
		}
	</style>
</head>
<body>
	<div classs="reset_pass">
		<div  class=" reset wow zoomIn" >
			<div class="container">
				<form method="POST" action="{{ route('admin.password.request') }}">
                        @csrf

				<div class="row pass_form">

					<div class="col-lg-12"><h1>Admin Reset Password</h1></div>
					<input type="hidden" name="token" value="{{ $token }}">
					<div class="col-lg-12">
						 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="col-lg-12">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter New Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="col-lg-12">
						 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
					</div>
					<div class="col-lg-12">
						
						<button type="submit" class="btn btn-primary">Reset Password</button>
					</div>
				</div>
			</form>
				
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
      <script>
      	new WOW().init();
    </script>
</body>
</html>