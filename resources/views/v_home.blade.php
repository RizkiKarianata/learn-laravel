@extends('layout.v_template')
@section('title', 'Home Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Home</h1>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-primary">
					<i class="far fa-user"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Students</h4>
					</div>
					<div class="card-body">
						{{$students}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="far fa-newspaper"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Teachers</h4>
					</div>
					<div class="card-body">
						{{$teachers}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-warning">
					<i class="far fa-file"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Schedules</h4>
					</div>
					<div class="card-body">
						{{$schedules}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-success">
					<i class="fas fa-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Classes</h4>
					</div>
					<div class="card-body">
						{{$classes}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()