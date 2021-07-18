@extends('layout.v_template')
@section('title', 'Users Edit Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Users Edit</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item active"><a href="/users">Users</a></div>
			<div class="breadcrumb-item">Users Edit</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="/users/update/{{$users->id_users}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" autocomplete="off" autofocus="" value="{{!empty($users->name) ? $users->name : old('name')}}">
									<div class="invalid-feedback">
										@error('name')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter Username" autocomplete="off" autofocus="" value="{{!empty($users->username) ? $users->username : old('username')}}">
									<div class="invalid-feedback">
										@error('username')
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