@extends('layout.v_template')
@section('title', 'Schedules Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Schedules</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item">Schedules</div>
		</div>
	</div>
	<div class="row">
		@if(session('message'))
		<div class="col-md-12">
			<div class="alert alert-success">{{session('message')}}</div>
		</div>
		@endif
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="white-space: nowrap;">
					<a href="/schedules/create" class="btn btn-primary" style="border-radius: 5px; margin-right: 5px;"><i class="fas fa-plus"></i></a>
					<a href="/schedules/print" target="_blank" class="btn btn-dark" style="border-radius: 5px; margin-left: 5px;"><i class="fas fa-print"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped data-tables">
							<thead>
								<tr>
									<th>Number</th>
									<th>Class</th>
									<th>Lesson</th>
									<th>Day</th>
									<th>Start Time</th>
									<th>Expiry Time</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@foreach($schedules as $data)
								<tr>
									<td>{{$no++}}</td>
									<td>{{$data->classesName}}</td>
									<td>{{$data->lessonsName}}</td>
									<td>{{$data->day}}</td>
									<td>{{$data->start_time}}</td>
									<td>{{$data->expiry_time}}</td>
									<td>
										<a href="/schedules/show/{{$data->id_schedules}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
										<a href="/schedules/edit/{{$data->id_schedules}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
										<a href="/schedules/delete/{{$data->id_schedules}}" onclick="return confirm('Are you sure you want to delete the data?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
									</td>
								</tr>
								@endforeach()
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()