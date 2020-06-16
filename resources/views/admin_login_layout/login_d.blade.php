<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">

	<style>
		body
		{
			overflow: hidden;
		}
		input , button,textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    outline: none;
}

input , textarea {
	padding-left: 10px;
}
input::placeholder {
  color: #fff !important;
  opacity: 1; /* Firefox */
}
textarea::placeholder
{
	color: #fff;
	opacity: 1;
}
input:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #fff !important;
}
input::-ms-input-placeholder { /* Microsoft Edge */
 color: #fff !important;
}
		#popup_login
{
	position: relative;
	width: 100vw;
	height: 100vh;
	z-index: 1001;
}
#popup
{
	width: 400px;
	padding: 20px 10px 50px;
	background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.5)), url({{asset('c_asset/jj_img1/log.jpg')}});
	background-position: center;
	background-size: cover;
	position: absolute;
	top: 90px;
	left: 550px;
	box-shadow: 0 0 80px #393838;
	text-align: center;
}
#popup h1
{
	color: #fff !important
}
.login_form table
{
	margin-top: 90px;
}
.login_form table tr td
{
	padding-top: 20px;
}
.login_form input
{
	width: 280px;
	height: 35px;
	background-color: transparent;
	border: none;
	color: #fff;
}
#login_sub
{
	background-color: #CFB53B;
	color: #000 !important;
	margin-top: 40px;
	width: 200px;
	margin-left: 35px;
	padding: 0;
}
.forgot
{
	padding: 90px 20px 10px;
}
.forgot a:hover
{
	text-decoration: none;
}
.reg_link
{
	color: #fff;
}
.reg_link a
{
	padding-left: 5px;
}
.reg_link a:hover
{
	text-decoration: none;
}
	</style>
</head>
<body>
<!-- login start -->
	<div id="popup_login">
		<div id="popup"  class="wow zoomIn" >
			<div class="container">
				<!-- <div class="row">
					<div class="col-lg-12"><span class="close">&times;</span></div>
				</div> -->
				<div class="row">
					<div class="col-lg-12"><h1 id="newsheading">Admin Login</h1></div>
				</div>
				<div class="row">
					<div class="col-lg-12 login_form">
						<form method="POST" action="{{ route('admin_login_submit') }}">
							@csrf
							<center>
							<table>
								<tr style="border-bottom: 1px solid #fff;">
									<td>
                    						<!-- <input type="text" name="" id="emailid" placeholder="Email"> -->
                    						 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email " required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 					</td>
								</tr>
								
								<tr style="border-bottom: 1px solid #fff;">
									<td>
		                    				<input id="password" type="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		                   						@error('password')
		                          				<span class="invalid-feedback" role="alert">
		                              			<strong>{{ $message }}</strong>
		                          				</span>
		                      					@enderror
                  					</td>
								</tr>
								
								<tr class="log_btn">
									<td><input type="submit" name="" value="Log In" id="login_sub"></td>
								</tr>
							</table>
							</center>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="forgot"><a href="{{ route('admin.password.request') }}"> Forgot password ?</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="reg_link">Don't have an account?<a href="{{route('admin_register')}}">Register Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- login over -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
      <script>
      	new WOW().init();
    </script>
</body>
</html>