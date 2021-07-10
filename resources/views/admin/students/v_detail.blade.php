@extends('layout.v_template')
@section('title', 'Classes Detail Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Classes Detail</h1>
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
									<td>{{$classes->name}}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<a href="/classes" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()