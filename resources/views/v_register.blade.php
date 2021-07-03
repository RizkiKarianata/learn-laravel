<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Register Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('plugins/jqvmap/dist/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/weathericons/css/weather-icons.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/weathericons/css/weather-icons-wind.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/summernote/dist/summernote-bs4.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap-social/bootstrap-social.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/select2/dist/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/selectric/public/selectric.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/components.css')}}">
</head>
<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
						<div class="card card-primary">
							<div class="card-header">
								<h4>{{ __('Register') }}</h4>
							</div>
							<div class="card-body">
								<form method="POST" action="" enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="nis">{{ __('NIS') }}</label>
												<input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="{{ __('Your NIS') }}" autocomplete="off" autofocus="" value="{{ old('nis') }}">
												@error('nis')
												<div class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">{{ __('Name') }}</label>
												<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Your Name') }}" autocomplete="off" autofocus="" value="{{ old('name') }}">
												@error('name')
												<div class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="fk_classes">{{ __('Class') }}</label>
												<select class="form-control select2 @error('fk_classes') is-invalid @enderror" name="fk_classes" id="fk_classes">
													<option value="">Choose Class</option>
													@foreach($classes as $data)
													<option value="{{$data->id_classes}}">{{$data->name}}</option>
													@endforeach
												</select>
												@error('fk_classes')
												<div class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="username">{{ __('Username') }}</label>
												<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" autofocus="" autocomplete="off" placeholder="{{ __('Your Username')}}" value="{{ old('username') }}">
												@error('username')
												<div class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="password">{{ __('Password') }}</label>
												<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Your Password') }}" autocomplete="new-password" autofocus="">
												@error('password')
												<div class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
											</div>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block">
											{{ __('Register') }}
										</button>
									</div>
									<div class="mt-5 text-muted text-center">
										Do you have an account? <a href="/">{{ __('Login')}}<a>
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
		<script src="{{asset('plugins/select2/dist/js/select2.full.min.js')}}"></script>
		<script src="{{asset('plugins/selectric/public/jquery.selectric.min.js')}}"></script>
		<script src="{{asset('plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
		<script src="{{asset('plugins/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
		<script src="{{asset('plugins/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
		<script src="{{asset('dist/js/scripts.js')}}"></script>
		<script src="{{asset('dist/js/custom.js')}}"></script>
		<script type="text/javascript">
			$(".pwstrength").pwstrength();
		</script>
	</body>
	</html>