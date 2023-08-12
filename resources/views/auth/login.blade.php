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
            <h5 class="text-muted fw-normal mb-4">Log in to your account.</h5>

    <form class="forms-sample" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <x-input-label for="login" :value="__('Email/Name/Phone')" />
                <x-text-input id="login" class="form-control" type="text" name="login" 
                :value="old('login')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2 text-danger" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        </div>

        <div class="form-check mb-3">
            <label class="form-check-label" for="authCheck">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
                    
        <div class="flex items-center justify-space-between mt-4">
            <div>
                <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                    {{ __('Log in') }}
                </button>
            </div>
        @if (Route::has('password.request'))
        <a class="d-block mt-3 text-muted" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 me-4" href="{{ route('register') }}">
            {{ __('Not Registered?') }}
        </a>
        @endif
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



