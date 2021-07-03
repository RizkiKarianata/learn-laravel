@extends('layout.v_template')
@section('title', 'Lessons Add Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Lessons Add</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="/lessons/insert" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-12">
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
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="/lessons" class="btn btn-danger">Back</a>
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