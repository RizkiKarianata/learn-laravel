@extends('layout.v_template')
@section('title', 'Schedules Add Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Schedules Add</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item active"><a href="/schedules">Schedules</a></div>
			<div class="breadcrumb-item">Schedules Add</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="/schedules/insert" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="fk_teachers">Teacher</label>
									<select class="form-control select2 @error('fk_teachers') is-invalid @enderror" name="fk_teachers" id="fk_teachers">
										<option value="">Choose Teacher</option>
										@foreach($teachers as $data)
										<option value="{{$data->id_teachers}}">{{$data->name}}</option>
										@endforeach
									</select>
									<div class="invalid-feedback">
										@error('fk_teachers')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="fk_classes">Class</label>
									<select class="form-control select2 @error('fk_classes') is-invalid @enderror" name="fk_classes" id="fk_classes">
										<option value="">Choose Class</option>
										@foreach($classes as $data)
										<option value="{{$data->id_classes}}">{{$data->name}}</option>
										@endforeach
									</select>
									<div class="invalid-feedback">
										@error('fk_classes')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="fk_lessons">Lesson</label>
									<select class="form-control select2 @error('fk_lessons') is-invalid @enderror" name="fk_lessons" id="fk_lessons">
										<option value="">Choose Lesson</option>
										@foreach($lessons as $data)
										<option value="{{$data->id_lessons}}">{{$data->name}}</option>
										@endforeach
									</select>
									<div class="invalid-feedback">
										@error('fk_lessons')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="start_time">Start Time</label>
									<input type="time" name="start_time" id="start_time" class="form-control @error('start_time') is-invalid @enderror" placeholder="Enter Start Time" autocomplete="off" autofocus="" value="{{old('start_time')}}">
									<div class="invalid-feedback">
										@error('start_time')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="day">Day</label>
									<select class="form-control select2 @error('day') is-invalid @enderror" name="day" id="day">
										<option value="">Choose Day</option>
										<option value="Monday">Monday</option>
										<option value="Tuesday">Tuesday</option>
										<option value="Wednesday">Wednesday</option>
										<option value="Thursday">Thursday</option>
										<option value="Friday">Friday</option>
										<option value="Saturday">Saturday</option>
										<option value="Sunday">Sunday</option>
									</select>
									<div class="invalid-feedback">
										@error('day')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="expiry_time">Expiry Time</label>
									<input type="time" name="expiry_time" id="expiry_time" class="form-control @error('expiry_time') is-invalid @enderror" placeholder="Enter Expiry Time" autocomplete="off" autofocus="" value="{{old('expiry_time')}}">
									<div class="invalid-feedback">
										@error('expiry_time')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="/schedules" class="btn btn-danger">Back</a>
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