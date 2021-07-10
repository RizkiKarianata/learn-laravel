@extends('layout.v_template')
@section('title', 'Teachers Detail Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Teachers Detail</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item active"><a href="/teachers">Teachers</a></div>
			<div class="breadcrumb-item">Teachers Detail</div>
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
									<th>NIP</th>
									<td>{{$teachers->nip}}</td>
								</tr>
								<tr>
									<th>Name</th>
									<td>{{$teachers->name}}</td>
								</tr>
								<tr>
									<th>Phone Number</th>
									<td>{{$teachers->phone_number}}</td>
								</tr>
								<tr>
									<th>Gender</th>
									<td>{{$teachers->gender}}</td>
								</tr>
								<tr>
									<th>Place Of Birth</th>
									<td>{{$teachers->place_birth}}</td>
								</tr>
								<tr>
									<th>Date Of Birth</th>
									<td>{{$teachers->date_birth}}</td>
								</tr>
								<tr>
									<th>Address</th>
									<td>{{$teachers->address}}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<a href="/teachers" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()