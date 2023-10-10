<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
		<meta name="author" content="NobleUI">
		<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

		<title>Neighbours' Parking </title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.min.js"></script>
	
		<link rel="stylesheet" href="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">

		<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/core/core.css')}}">
		<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css')}}">
		<link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
		<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
		<link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
		<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
		<link rel="stylesheet" href="{{ asset('/backend/assets/vendors/fullcalendar/main.min.css') }}">

		<style>
			.h-font{
				font-family: 'Merienda', cursive;
			}
		</style>
	</head>

	<body>
		<div class="main-wrapper">

			@include('director.body.sidebar')

			<div class="page-wrapper">
			
				@include('director.body.header')

				@yield('director')

				@include('director.body.footer')
			
			</div>
		</div>

		<script src="{{ asset('js/chart.js') }}"></script>
		<script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>

		<script src="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
		<script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>

		<script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
		<script src="{{asset('backend/assets/js/template.js')}}"></script>

		<script src="{{asset('backend/assets/js/dashboard-dark.js')}}"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="{{asset('backend/assets/js/code/code.js')}}"></script>

		<script src="{{asset('backend/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
		<script src="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>

		<script src="{{asset('backend/assets/js/data-table.js')}}"></script>

		<script src="{{ asset('backend/assets/vendors/moment/moment.min.js') }}"></script>
		<script src="{{ asset('backend/assets/vendors/fullcalendar/main.min.js') }}"></script>
		<script src="{{ asset('backend/assets/js/fullcalendar.js') }}"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

		<script>
			@if(Session::has('message'))
				var type = "{{ Session::get('alert-type','info') }}"
				switch(type){
					case 'info':
					toastr.info(" {{ Session::get('message') }} ");
					break;
				
					case 'success':
					toastr.success(" {{ Session::get('message') }} ");
					break;
				
					case 'warning':
					toastr.warning(" {{ Session::get('message') }} ");
					break;
				
					case 'error':
					toastr.error(" {{ Session::get('message') }} ");
					break; 
				}
			@endif 
		</script>

	</body>
</html>    