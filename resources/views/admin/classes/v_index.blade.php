@extends('layout.v_template')
@section('title', 'Classes Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Classes</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item">Classes</div>
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
					<a href="/classes/create" class="btn btn-primary" style="border-radius: 5px; margin-right: 5px;"><i class="fas fa-plus"></i></a>
					<a href="/classes/print" target="_blank" class="btn btn-dark" style="border-radius: 5px; margin-left: 5px;"><i class="fas fa-print"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped data-tables">
							<thead>
								<tr>
									<th>Number</th>
									<th>Name</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@foreach($classes as $data)
								<tr>
									<td>{{$no++}}</td>
									<td>{{$data->name}}</td>
									<td>
										<a href="/classes/show/{{$data->id_classes}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
										<a href="/classes/edit/{{$data->id_classes}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
										<a href="/classes/delete/{{$data->id_classes}}" onclick="return confirm('Are you sure you want to delete the data?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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