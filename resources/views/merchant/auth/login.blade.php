<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="HzZqYoLsPKVa0vGEntpKWDl4UxSBvug9uBpD939V">

	<link name="favicon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" rel="shortcut icon"/>

	<title>Merchant Login</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

	<!--Font Awesome [ OPTIONAL ]-->
	<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

	<!--active-shop Stylesheet [ REQUIRED ]-->
	<link href="{{ asset('css/active-shop.min.css') }}" rel="stylesheet">

	<!--active-shop Premium Icon [ DEMONSTRATION ]-->
	<link href="{{ asset('css/demo/active-shop-demo-icons.min.css') }}" rel="stylesheet">

	<!--Demo [ DEMONSTRATION ]-->
	<link href="{{ asset('css/demo/active-shop-demo.min.css') }}" rel="stylesheet">

	<!--Theme [ DEMONSTRATION ]-->
	<link href="{{ asset('css/themes/type-c/theme-navy.min.css') }}" rel="stylesheet">

	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
<div id="container" class="blank-index"
	 style="background-image:url('{{ asset('img/home_bg.jpeg') }}');"
>
	<div class="cls-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel">
						<div class="panel-body pad-no">


							<div class="flex-row">
								<div class="flex-col-xl-6 blank-index d-flex align-items-center justify-content-center"
									 style="background-image:url('{{ asset('img/home_venue.jpeg') }}');"
								>

								</div>
								<div class="flex-col-xl-6">
									<div class="pad-all">
										<div class="text-center">
											<br>
											<img src="{{ asset('img/logo.jpg') }}" class="" height="44">

											<br>
											<br>
											<br>

										</div>
										@if ($errors->has('email'))
											<div class="alert alert-danger" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
											</div>
										@endif
										@if (session()->has('error'))
											<div class="alert alert-danger" role="alert">
												<strong>{{ session('error') }}</strong>
											</div>
										@endif
										@if ($errors->has('password'))
											<div class="alert alert-danger" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</div>
										@endif

										<form class="pad-hor" method="POST" role="form"
											  action="{{ route('merchant.login.validate') }}">
											@csrf

											<div class="form-group">
												<input id="email" type="email" class="form-control" name="email"
													   value="" required autofocus placeholder="Email">
											</div>
											<div class="form-group">
												<input id="password" type="password" class="form-control"
													   name="password" required placeholder="Password">
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="checkbox pad-btm text-left">
														<input id="demo-form-checkbox" class="magic-checkbox"
															   type="checkbox" name="remember" id="remember">
														<label for="demo-form-checkbox">
															Remember Me
														</label>
													</div>
												</div>
												<div class="col-sm-6" style="display: none;">
													<div class="checkbox pad-btm text-right">
														<a href="http://littardoemporium.com/shop/password/reset"
														   class="btn-link">Forgot password ?</a>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-primary btn-lg btn-block">
												Login
											</button>
										</form>

									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{ asset('js/jquery.min.js') }}"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{ asset('bootstrap.min.js') }}"></script>


<!--active-shop [ RECOMMENDED ]-->
<script src="{{ asset('js/active-shop.min.js') }}"></script>

<!--Alerts [ SAMPLE ]-->
<script src="{{ asset('js/demo/ui-alerts.js') }}"></script>


</body>
</html>
