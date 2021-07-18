@extends('layout.v_template')
@section('title', 'Users Detail Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Users Detail</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item active"><a href="/users">Users</a></div>
			<div class="breadcrumb-item">Users Detail</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<th>Name</th>
									<td>{{$users->name}}</td>
								</tr>
								<tr>
									<th>Username</th>
									<td>{{$users->username}}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<a href="/users" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()