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
			@if(session('message'))
			<div class="col-md-12">
				<div class="alert alert-success">{{session('message')}}</div>
			</div>
			@endif
			<div class="col-12 col-md-12 col-lg-12">
				<div class="card">
					<form method="POST" action="/default/update_account/{{Auth::user()->id_users}}" id="data-form">
						@csrf
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" autocomplete="off" autofocus="" value="{{Auth::user()->name}}">
										<input type="hidden" name="username" id="username" value="{{Auth::user()->username}}">
										@error('name')
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