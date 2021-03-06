<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('plugins/jqvmap/dist/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/weathericons/css/weather-icons.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/weathericons/css/weather-icons-wind.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/summernote/dist/summernote-bs4.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap-social/bootstrap-social.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/components.css')}}">
</head>
<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="card card-primary">
							<div class="card-header">
								<h4>{{ __('Reset Password') }}</h4>
							</div>
							<div class="card-body">
								<p class="text-muted">We will send a link to reset your password</p>
								@if (session('status'))
								<div class="alert alert-success" role="alert">
									{{ session('status') }}
								</div>
								@endif
								<form method="POST" action="{{ route('password.email') }}" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label for="email">EMail Address</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1" autofocus="" placeholder="Your Email Address">
										@error('email')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</div>
										@enderror
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
											{{ __('Send Password Reset Link') }}
										</button>
									</div>
									<div class="mt-5 text-muted text-center">
										Do you have an account? <a href="/">{{ __('Login')}}</a>
									</div>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Hakcipta &copy; My School 2021
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="{{asset('dist/js/stisla.js')}}"></script>
	<script src="{{asset('plugins/simpleweather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{asset('plugins/chart.js/dist/Chart.min.js')}}"></script>
	<script src="{{asset('plugins/jqvmap/dist/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('plugins/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
	<script src="{{asset('plugins/summernote/dist/summernote-bs4.js')}}"></script>
	<script src="{{asset('plugins/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
	<script src="{{asset('plugins/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
	<script src="{{asset('dist/js/scripts.js')}}"></script>
	<script src="{{asset('dist/js/custom.js')}}"></script>
	<script type="text/javascript">
		$(".pwstrength").pwstrength();
	</script>
</body>
</html>