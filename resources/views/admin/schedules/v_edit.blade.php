@extends('layout.v_template')
@section('title', 'Schedules Edit Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Schedules Edit</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="/schedules/update/{{$schedules->id_schedules}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="fk_teachers">Teacher</label>
									<select class="form-control select2 @error('fk_teachers') is-invalid @enderror" name="fk_teachers" id="fk_teachers">
										@foreach($teachers as $data)
										<option value="{{$data->id_teachers}}" @if($schedules->fk_teachers == $data->id_teachers) selected="" @endif>{{$data->name}}</option>
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
										@foreach($classes as $data)
										<option value="{{$data->id_classes}}" @if($schedules->fk_classes == $data->id_classes) selected="" @endif>{{$data->name}}</option>
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
										@foreach($lessons as $data)
										<option value="{{$data->id_lessons}}" @if($schedules->fk_lessons == $data->id_lessons) selected="" @endif>{{$data->name}}</option>
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
									<input type="time" name="start_time" id="start_time" class="form-control @error('start_time') is-invalid @enderror" placeholder="Enter Start Time" autocomplete="off" autofocus="" value="{{!empty($schedules->start_time) ? $schedules->start_time : old('start_time')}}">
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
										<option value="Monday" @if($schedules->day == "Monday") selected="" @endif>Monday</option>
										<option value="Tuesday" @if($schedules->day == "Tuesday") selected="" @endif>Tuesday</option>
										<option value="Wednesday" @if($schedules->day == "Wednesday") selected="" @endif>Wednesday</option>
										<option value="Thursday" @if($schedules->day == "Thursday") selected="" @endif>Thursday</option>
										<option value="Friday" @if($schedules->day == "Friday") selected="" @endif>Friday</option>
										<option value="Saturday" @if($schedules->day == "Saturday") selected="" @endif>Saturday</option>
										<option value="Sunday" @if($schedules->day == "Sunday") selected="" @endif>Sunday</option>
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
									<input type="time" name="expiry_time" id="expiry_time" class="form-control @error('expiry_time') is-invalid @enderror" placeholder="Enter Expiry Time" autocomplete="off" autofocus="" value="{{!empty($schedules->expiry_time) ? $schedules->expiry_time : old('expiry_time')}}">
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