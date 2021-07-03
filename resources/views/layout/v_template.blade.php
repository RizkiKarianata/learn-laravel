<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('plugins/myplugins/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/myplugins/fontawesome/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/jqvmap/dist/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/weathericons/css/weather-icons.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/weathericons/css/weather-icons-wind.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/summernote/dist/summernote-bs4.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/select2/dist/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/selectric/public/selectric.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/chocolat/dist/css/chocolat.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/dropzone/dist/min/dropzone.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/components.css')}}">
</head>
<body>
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			@include('layout.v_navbar')
			<div class="main-sidebar">
				@include('layout.v_aside')
			</div>
			<div class="main-content">
				@yield('content')
			</div>
			@include('layout.v_footer')
		</div>
	</div>
	<script src="{{asset('plugins/myplugins/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('plugins/myplugins/popper.min.js')}}"></script>
	<script src="{{asset('plugins/myplugins/bootstrap.min.js')}}"></script>
	<script src="{{asset('dist/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('dist/js/moment.min.js')}}"></script>
	<script src="{{asset('dist/js/stisla.js')}}"></script>
	<script src="{{asset('plugins/simpleweather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('plugins/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	<script src="{{asset('plugins/chart.js/dist/Chart.min.js')}}"></script>
	<script src="{{asset('plugins/jqvmap/dist/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('plugins/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
	<script src="{{asset('plugins/summernote/dist/summernote-bs4.js')}}"></script>
	<script src="{{asset('plugins/cleave.js/dist/cleave.min.js')}}"></script>
	<script src="{{asset('plugins/cleave.js/dist/addons/cleave-phone.us.js')}}"></script>
	<script src="{{asset('plugins/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
	<script src="{{asset('plugins/select2/dist/js/select2.full.min.js')}}"></script>
	<script src="{{asset('plugins/selectric/public/jquery.selectric.min.js')}}"></script>
	<script src="{{asset('plugins/dropzone/dist/min/dropzone.min.js')}}"></script>
	<script src="{{asset('plugins/sweetalert/docs/assets/sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
	<script src="{{asset('plugins/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
	<script src="{{asset('dist/js/scripts.js')}}"></script>
	<script src="{{asset('dist/js/custom.js')}}"></script>
	<script type="text/javascript">
		"use strict";
		$(".data-tables").dataTable();
	</script>
</body>
</html>