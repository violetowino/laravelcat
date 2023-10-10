<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
		<meta name="author" content="NobleUI">
		<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		
		{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<title>Neighbours' Parking </title>
	
		<link rel="stylesheet" href="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
		<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/core/core.css')}}">
		<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css')}}">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

		<link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
		<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	
		<link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css')}}">

		<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png')}}" />

		<style>
			.custom-bg{
				background-color: #f92770;
			}
			.custom-bg:hover{
				background-color: #f927715b;
			}
			.h-font{
				font-family: 'Merienda', cursive;
			}
			.space-container {
				display: flex;
				flex-wrap: wrap;
			}
			.space-item {
				flex: 0 0 calc(33.33% - 20px); /* Each column occupies 33.33% width with 20px space between them */
				margin: 10px;
				padding: 10px;
				/* background-color: #f0f0f0; */
			}
			span.booked {
				background-color: #FF0000;
				color: white;
				padding: 8px 12px;
			}
			.rating .star {
				font-size: 30px;
				cursor: pointer; 
			}
			.rating .star.selected {
        		color: #d6fb03; /* Set the color to red or your desired color */
			}
		</style>
	</head>
	<body>
		<div class="main-wrapper">
			
			@include('client.body.sidebar3')
	
			<div class="page-wrapper">
				
				@include('client.body.header3')
			
				@yield('client')

				@include('client.body.footer3')
			
			</div>
		</div>

		
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

		<script>
			const emailElement = document.getElementById('emailLink');

			emailElement.addEventListener('mouseenter', () => {
				emailElement.style.cursor = 'pointer';
			});

			emailElement.addEventListener('click', () => {
				const email = emailElement.textContent.trim();
				window.location.href = `mailto:${email}`;
			});
		</script>

	</body>
</html>    