@extends('layout.v_template')
@section('title', 'Teachers Edit Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Teachers Edit</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="/teachers/update/{{$teachers->id_teachers}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="nip">NIP</label>
									<input type="number" name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="Enter NIP" autocomplete="off" autofocus="" value="{{!empty($teachers->nip) ? $teachers->nip : old('nip')}}">
									<div class="invalid-feedback">
										@error('nip')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" autocomplete="off" autofocus="" value="{{!empty($teachers->name) ? $teachers->name : old('name')}}">
									<div class="invalid-feedback">
										@error('name')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="phone_number">Phone Number</label>
									<input type="number" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter Phone Number" autocomplete="off" autofocus="" value="{{!empty($teachers->phone_number) ? $teachers->phone_number : old('phone_number')}}">
									<div class="invalid-feedback">
										@error('phone_number')
										{{$message}}
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="place_birth">Place Of Birth</label>
									<input type="text" name="place_birth" id="place_birth" class="form-control @error('place_birth') is-invalid @enderror" placeholder="Enter Place Of Birth" autocomplete="off" autofocus="" value="{{!empty($teachers->place_birth) ? $teachers->place_birth : old('place_birth')}}">
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
										<option value="Male" @if($teachers->gender == "Male") selected="" @endif>Male</option>
										<option value="Female" @if($teachers->gender == "Female") selected="" @endif>Female</option>
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
									<input type="date" name="date_birth" id="date_birth" class="form-control @error('date_birth') is-invalid @enderror" placeholder="Enter Date Of Birth" autocomplete="off" autofocus="" value="{{!empty($teachers->date_birth) ? $teachers->date_birth : old('date_birth')}}">
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
									<textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Enter Address" style="height: 125px;">{{!empty($teachers->address) ? $teachers->address : old('address')}}</textarea>
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
								<a href="/teachers" class="btn btn-danger">Back</a>
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