<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Login </title>

    <style>
        .authlogin-side-wrapper{
            width:100%;
            height:100%;
            background-image: url({{asset('upload/login.png')}})
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/core/core.css')}}">
	
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

    <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('backend/assets/css/demo2/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" />
</head>

<body>
 
    <hr>
<div class="main-wrapper">
	<div class="page-wrapper full-page">
		<div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
				<div class="col-md-8 col-xl-6 mx-auto">
					<div class="card">
						<div class="row">
                            <div class="col-md-4 pe-md-0">
                                <div class="authlogin-side-wrapper">
                            </div>
                        </div>
                                    <div class="col-md-8 ps-md-0">
                                        <div class="auth-form-wrapper px-4 py-5">
                                            <a href="#" class="noble-ui-logo logo-light d-block mb-2">Neighbours'
                                            <span>Parking</span></a>
                                            <h5 class="text-muted fw-normal mb-4">Confirm your Password.</h5>
                                            <div class="mb-4 text-sm text-gray-600">
                                                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                            </div>
                                        
                                            <form method="POST" action="{{ route('password.confirm') }}">
                                                @csrf
                                        
                                                <!-- Password -->
                                                <div>
                                                    <x-input-label for="password" :value="__('Password')" />
                                        
                                                    <x-text-input id="password" class="form-control"
                                                                    type="password"
                                                                    name="password"
                                                                    required autocomplete="current-password" />
                                        
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                        
                                                <div class="flex justify-end mt-4">
                                                    <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mt-3 mb-md-0">
                                                        {{ __('Confirm') }}
                                                    </button>
                                        
                                                </div>
                                            </form>
                                        
                                            </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
    <!-- core:js -->
	<script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>



