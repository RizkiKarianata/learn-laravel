@extends('layout.v_template')
@section('title', 'Lessons Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Lessons</h1>
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
					<a href="/lessons/create" class="btn btn-primary" style="border-radius: 5px; margin-right: 5px;"><i class="fas fa-plus"></i></a>
					<a href="/lessons/print" target="_blank" class="btn btn-dark" style="border-radius: 5px; margin-left: 5px;"><i class="fas fa-print"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped data-tables">
							<thead>
								<tr>
									<th>Number</th>
									<th>Name</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@foreach($lessons as $data)
								<tr>
									<td>{{$no++}}</td>
									<td>{{$data->name}}</td>
									<td>
										<a href="/lessons/show/{{$data->id_lessons}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
										<a href="/lessons/edit/{{$data->id_lessons}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
										<a href="/lessons/delete/{{$data->id_lessons}}" onclick="return confirm('Are you sure you want to delete the data?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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