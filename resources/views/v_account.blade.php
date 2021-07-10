@extends('layout.v_template')
@section('title', 'Account Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Account</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item">Account</div>
		</div>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12">
				<div class="card">
					<form method="POST" action="#" id="data-form">
						<div class="card-body">
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
							<div class="card-footer text-right">
								<input type="submit" name="submit" class="btn btn-primary" value="Save">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()