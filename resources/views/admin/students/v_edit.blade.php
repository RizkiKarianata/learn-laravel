@extends('layout.v_template')
@section('title', 'Students Edit Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Students Edit</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item active"><a href="/students">Students</a></div>
			<div class="breadcrumb-item">Students Edit</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="/students/update/{{$students->id_students}}" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="old_nis" id="old_nis" value="{{$students->nis}}">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="fk_classes">Class</label>
									<select class="form-control select2 @error('fk_classes') is-invalid @enderror" name="fk_classes" id="fk_classes">
										@foreach($classes as $data)
										<option value="{{$data->id_classes}}" @if($students->fk_classes == $data->id_classes) selected="" @endif>{{$data->name}}</option>
										@endforeach
									</select>
									<div class="invalid-feedback" role="alert">
										@error('fk_classes')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="nis">NIS</label>
									<input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="Enter NIS" autocomplete="off" autofocus="" value="{{!empty($students->nis) ? $students->nis : old('nis')}}">
									<div class="invalid-feedback">
										@error('nis')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" autocomplete="off" autofocus="" value="{{!empty($students->name) ? $students->name : old('name')}}">
									<div class="invalid-feedback">
										@error('name')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone_number">Phone Number</label>
									<input type="number" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter Phone Number" autocomplete="off" autofocus="" value="{{!empty($students->phone_number) ? $students->phone_number : old('phone_number')}}">
									<div class="invalid-feedback">
										@error('phone_number')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email_address">Email Address</label>
									<input type="email" name="email_address" id="email_address" class="form-control @error('email_address') is-invalid @enderror" placeholder="Enter Email Address" autocomplete="off" autofocus="" value="{{!empty($students->email_address) ? $students->email_address : old('email_address')}}">
									<div class="invalid-feedback">
										@error('email_address')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="place_birth">Place Of Birth</label>
									<input type="text" name="place_birth" id="place_birth" class="form-control @error('place_birth') is-invalid @enderror" placeholder="Enter Place Of Birth" autocomplete="off" autofocus="" value="{{!empty($students->place_birth) ? $students->place_birth : old('place_birth')}}">
									<div class="invalid-feedback">
										@error('place_birth')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="gender">Gender</label>
									<select class="form-control select2 @error('gender') is-invalid @enderror" name="gender" id="gender">
										<option value="Male" @if($students->gender == "Male") selected="" @endif>Male</option>
										<option value="Female" @if($students->gender == "Female") selected="" @endif>Female</option>
									</select>
									<div class="invalid-feedback">
										@error('gender')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="date_birth">Date Of Birth</label>
									<input type="date" name="date_birth" id="date_birth" class="form-control @error('date_birth') is-invalid @enderror" placeholder="Enter Date Of Birth" autocomplete="off" autofocus="" value="{{!empty($students->date_birth) ? $students->date_birth : old('date_birth')}}">
									<div class="invalid-feedback">
										@error('date_birth')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="address">Address</label>
									<textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Enter Address" style="height: 125px;">value="{{!empty($students->address) ? $students->address : old('address')}}"</textarea>
									<div class="invalid-feedback">
										@error('address')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="/students" class="btn btn-danger">Back</a>
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