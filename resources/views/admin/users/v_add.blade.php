@extends('layout.v_template')
@section('title', 'Users Add Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Users Add</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="/users/insert" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" autocomplete="off" autofocus="" value="{{old('name')}}">
									<div class="invalid-feedback">
										@error('name')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter Username" autocomplete="off" autofocus="" value="{{old('username')}}">
									<div class="invalid-feedback">
										@error('username')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" autocomplete="off" autofocus="" value="{{old('password')}}">
									<div class="invalid-feedback">
										@error('password')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="/users" class="btn btn-danger">Back</a>
								<button class="btn btn-success float-right">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()