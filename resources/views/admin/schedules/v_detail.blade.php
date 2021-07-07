@extends('layout.v_template')
@section('title', 'Schedules Detail Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Schedules Detail</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<th>Teacher</th>
									<td>{{$schedules->teachersName}}</td>
								</tr>
								<tr>
									<th>Class</th>
									<td>{{$schedules->classesName}}</td>
								</tr>
								<tr>
									<th>Lesson</th>
									<td>{{$schedules->lessonsName}}</td>
								</tr>
								<tr>
									<th>Day</th>
									<td>{{$schedules->day}}</td>
								</tr>
								<tr>
									<th>Start Time</th>
									<td>{{$schedules->start_time}}</td>
								</tr>
								<tr>
									<th>Expiry Time</th>
									<td>{{$schedules->expiry_time}}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<a href="/schedules" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()