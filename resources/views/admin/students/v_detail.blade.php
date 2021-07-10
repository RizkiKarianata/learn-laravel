@extends('layout.v_template')
@section('title', 'Students Detail Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Students Detail</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item active"><a href="/students">Students</a></div>
			<div class="breadcrumb-item">Students Detail</div>
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
									<th>Class</th>
									<td>{{$students->classesName}}</td>
								</tr>
								<tr>
									<th>NIS</th>
									<td>{{$students->nis}}</td>
								</tr>
								<tr>
									<th>Name</th>
									<td>{{$students->name}}</td>
								</tr>
								<tr>
									<th>Phone Number</th>
									<td>{{$students->phone_number}}</td>
								</tr>
								<tr>
									<th>Email Address</th>
									<td>{{$students->email_address}}</td>
								</tr>
								<tr>
									<th>Place Of Birth</th>
									<td>{{$students->place_birth}}</td>
								</tr>
								<tr>
									<th>Gender</th>
									<td>{{$students->gender}}</td>
								</tr>
								<tr>
									<th>Date Of Birth</th>
									<td>{{$students->date_birth}}</td>
								</tr>
								<tr>
									<th>Address</th>
									<td>{{$students->address}}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<a href="/students" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()