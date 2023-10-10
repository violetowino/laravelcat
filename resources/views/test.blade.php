

<form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-lines-fill fs-3 me-3"></i> Sign Up
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Note: Your details MUST match with your details in the ID type that will be used during booking.
                </span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Picture</label>
                            <input type="file" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label">Residential Adress</label>
                            <textarea class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">County</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">KRA Pin Number</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                    </div>
                </div>
                <div class="text-center my-1">
                    <button type="submit" class="btn btn-dark shadow-none">Register</button>
                </div>
            </div>    
        </form>







        <!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">

	<title>Register</title>

    <style>
        .authlogin-side-wrapper{
            width:100%;
            height:100%;
            background-image: url({{asset('upload/login.png')}})
        }
        .h-font{
            font-family: 'Merienda', cursive;
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
                           
                        </div>
                                    <div class="col-md-12 ps-md-0">
                                        <div class="auth-form-wrapper px-4 py-5">
                                            <h2 class="h-font" style="color:red">Register</h2>
                                                <hr>
                                            <a href="#" class="noble-ui-logo logo-light d-block mb-2">Neighbours'
                                            <span>Parking</span></a>
                
                   
                                        <form class="forms-sample" method="POST" action="{{ route('register') }}">
                                             @csrf
                                             <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Note: Your details MUST match with your details in the ID type that will be used during booking.
                </span>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Picture</label>
                            <input type="file" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label">Residential Adress</label>
                            <textarea class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">KRA Pin Number</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                    </div>
                </div>
                <div class="text-center my-1">
                <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 me-4" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                        {{ __('Register') }}
                                                    </button>
                </div>
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



<form class="forms-sample" method="POST" action="{{ route('register') }}">
                                             @csrf

                                             <div class="mb-3">
                                                <x-input-label for="name" :value="__('Full Name')" />
                                                 <x-text-input id="name" class="form-control" type="text" name="name" 
                                                 :value="old('name')" required autofocus autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>

                                            <div class="mb-3">
                                                <x-input-label for="username" :value="__('Username')" />
                                                 <x-text-input id="username" class="form-control" type="text" name="username" 
                                                 :value="old('username')" required autofocus autocomplete="username" />
                                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                            </div>

                                            <div class="mb-3">
                                                <x-input-label for="email" :value="__('Email')" />
                                                 <x-text-input id="email" class="form-control" type="email" name="email" 
                                                 :value="old('email')" required autofocus autocomplete="email" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <div class="mt-4">
                                                <x-input-label for="password" :value="__('Password')" />
                                                <x-text-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <div class="mt-4">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                <x-text-input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation"
                                                    required autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>

                                            <div class="flex items-center justify-space-between mt-4">
                                                <div>
                                                    <button type="submit" class="btn btn-outline-primary btn-icon-text mb-3 mb-md-0">
                                                        {{ __('Register') }}
                                                    </button></div>
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                                    {{ __('Already registered?') }}
                                                    </a>
                                                </div>
                    </form>


<!-- Dashboard -->

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

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
	<!-- End plugin css for this page -->
	<!-- core:css -->
	<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png')}}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		@include('client.body.sidebar3')
   
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			@include('client.body.header3')
			<!-- partial -->

			@yield('client')

			<!-- partial:partials/_footer.html -->
			@include('client.body.footer3')
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{asset('backend/assets/js/dashboard-dark.js')}}"></script>
	<!-- End custom js for this page -->

	<!-- Plugin js for this page -->
	<script src="{{asset('backend/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  	<script src="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- Custom js for this page -->
	<script src="{{asset('backend/assets/js/data-table.js')}}"></script>
	<!-- End custom js for this page -->


    <h5>Call Us</h5>
                <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +254722345678</a>
                    <br>
                <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +254733345678</a>
</body>
</html>    

{{-- verify email --}}
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>


{{-- reset password --}}
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

{{-- forgot-password --}}
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

{{-- confirm password --}}
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

{{-- password reset --}}
<form class="forms-sample" enctype="multipart/form-data" method="POST" 
                                action="{{route('client.update.password')}}">
                                @csrf

						

                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Old Password</label>
										<input type="password" name="old_password" class="form-control 
                                        @error('old_password') is-invalid @enderror" id="old_password" 
                                        autocomplete="off">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>

                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">New Password</label>
										<input type="password" name="new_password" class="form-control 
                                        @error('new_password') is-invalid @enderror" id="new_password" 
                                        autocomplete="off">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>

                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Confirm New Password</label>
										<input type="password" name="confirm_new_password" class="form-control" 
                                        id="confirm_new_password" autocomplete="off">
									</div>

									


                                    


									
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
				
								</form>


{{-- edit-blade --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


{{-- book a space --}}

@extends('client.client_dashboard')
@section('client')


<div class="page-content">
  <div class="row profile-body">
    <div class="col-md-8 col-xl-8 middle-wrapper">
      <div class="card">
        <div class="card-body">
          <h2 class="text-primary mb-4">Booking Details</h2> 

        <form class="forms-sample" method="POST" action="{{route('booking.store')}}">
          @csrf
          <div class="container-fluid">
            <div class="row">
              
            <div class="col-md-6 ps-0 mb-3">
              <label for="exampleInputUsername1" class="form-label">ID Number</label>
              <input type="number" name="id_number" class="form-control @error('id_number') is-invalid @enderror">
                  @error('id_number')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-md-6 ps-0 mb-3">
              <label for="exampleInputUsername1" class="form-label">Phone Number</label>
              <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror">
                @error('phone')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div>
              <label for="exampleInputEmail1" class="form-label">Space Booked</label>
              </div>
              

            <div class="col-md-6 ps-0 mb-3">
						    <select name="space_type" class="form-select" id="exampleFormControlSelect">
                    <option selected="" disabled="">Select Parking Type</option>
                    <option value="basement">Basement</option>
                    <option value="outdoor">Outdoor</option>
                    <option value="rooftop">Rooftop</option>
                </select>
						</div>

            <div class="col-md-6 ps-0 mb-3">
              <label for="exampleInputUsername1" class="form-label"> Space Number</label>
              <input type="text" name="space_number" class="form-control  @error('space_number') is-invalid @enderror"
              value="{{ old('space_number') ?? $selectedSpaceNumber }}">
                 @error('space_number')
              <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
             
            <div class="col-md-6 ps-0 mb-3">
                <label for="exampleInputUsername1" class="form-label">Number Plate</label>
                <input type="text" name="number_plate" class="form-control  @error('number_plate') is-invalid @enderror" >
                   @error('number_plate')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class=" col-md-6 ps-0 mb-3">
              <label for="exampleInputUsername1" class="form-label">Time-in</label>
              <input type="datetime-local" name="time_in" class="form-control  @error('time_in') is-invalid @enderror" >
                @error('time_in')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class=" col-md-6 ps-0 mb-3">
                <label for="exampleInputUsername1" class="form-label">Time Out</label>
                <input type="datetime-local" name="time_out" class="form-control  @error('time_out') is-invalid @enderror" >
                  @error('time_out')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
              <h5 class="h-font mt-4">Pay with:</h5>
                  
                <div class=" col-md-6 mb-3">
                  <form action="{{route('payment')}}" method="POST">
                    @csrf 
                    <input type="hidden" name="amount" value="200">
                    <button type="submit" class="btn btn-outline-primary btn-icon-text mt-3 mb-md-3">
                      PayPal
                  </button>
                    {{-- <button type="submit" class="btn btn-primary me-2 mt-3 mb-3">Paypal</button> --}}
                  </form>
                </div>

                <div class="col-md-6 mb-3">
                  <form action="{{url('/stk/push/simulation')}}" method="POST">
                    @csrf 
                    <input type="hidden" name="amount" class="form-control" value="200">
                    <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                      M-PESA
                  </button>
                    {{-- <button type="submit" class="btn btn-primary me-2 mb-3">M-PESA</button> --}}
                  </form>
                </div>

                <div class=" col-md-6 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label">Amount Paid</label>
                  <input type="number" name="amount_paid" class="form-control  @error('amount_paid') is-invalid @enderror" >
                      @error('amount_paid')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
    
                <div class=" col-md-6 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label">Payment Code</label>
                  <input type="text" name="payment_code" class="form-control  @error('payment_code') is-invalid @enderror" >
                    @error('payment_code')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                  Save
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
        
          <!-- right wrapper end -->
    </div>

</div>

@endsection






@extends('client.client_dashboard')
@section('client')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Space</title>

    {{-- <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery.seat-charts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/js/jquery.seat-charts.js')}}"></script> --}}
    
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: #242333;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .parking-container select{
            background-color: #fff;
            border: 0;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 10px;
            padding: 5px 15px 5px 15px;
            -moz-appearance: none;
            appearance: none;
        }
        .space{
            background-color: blueviolet;
            height: 30px;
            width: 40px;
            margin: 3px;
            font-size:50px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .space.selected{
            background-color: blue;
        }
        .space.booked{
            background-color: red;
        }
        .space:nth-of-type(2){
            margin-right: 18px;
        }
        .space:nth-last-of-type(2){
            margin-left: 18px;
        }
        .space:not(.booked):hover {
            cursor: pointer;
            transform: scale(1.2);
        }
        .showcase .space:not(.booked):hover {
            cursor: default;
            transform: scale(1);
        }
        .showcase{
            background: rgba(0,0,0,0.1);
            padding: 5px 10px;
            border-radius: 5px;
            color: #777;
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }
        .showcase li{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
        }
        .showcase li small{
            margin-left: 2px;
        }
        .row{
            display: flex;
        }
        .row input{
            font-size: 1rem;
        }
        p.text{
            margin: 5px 0;
        }
        p.text span{
            color: greenyellow;
        }
        .custom-bg{
          background-color: #f92770;
        }
        .custom-bg:hover{
          background-color: #f927715b;
        }
    </style>
</head>

    <div class="page-content">
        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">

      
                <hr>
                   

    <h1>Book a Space</h1>

    <div class="parking-container">
        <label>Select a space: </label>
        <select id="parking">
            <option value="100">Outdoor(KES100)</option>
            <option value="200">Basement(KES200)</option>
            <option value="150">Roofrop(KES150)</option>
        </select>
    </div>

    <ul class="showcase">
        <li>
            <div class="space"></div>
            <small>Available</small>
        </li>
        <li>
            <div class="space selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="space booked"></div>
            <small>Booked</small>
        </li>
    </ul>

    <div class="container">

        <div class="row">
            <input type="button" class="space" value="O1">
            <input type="button" class="space" value="O2">
            <input type="button" class="space" value="O3">
            <input type="button" class="space" value="O4">
            <input type="button" class="space booked" value="O5">
            <input type="button" class="space" value="O6">
            <input type="button" class="space booked" value="O7">
            <input type="button" class="space" value="O8">
            <input type="button" class="space" value="O9">
            <input type="button" class="space" value="O10">
            <input type="button" class="space" value="O11">
            <input type="button" class="space" value="O12">
        </div>

        <div class="row">
            <input type="button" class="space" value="O13">
            <input type="button" class="space booked" value="O14">
            <input type="button" class="space booked" value="O15">
            <input type="button" class="space" value="O16">
            <input type="button" class="space" value="O17">
            <input type="button" class="space" value="O18">
            <input type="button" class="space" value="O19">
            <input type="button" class="space" value="O20">
            <input type="button" class="space" value="O21">
            <input type="button" class="space booked" value="O22">
            <input type="button" class="space" value="O23">
            <input type="button" class="space" value="O24">
        </div>

        <div class="row">
            <input type="button" class="space booked" value="O25">
            <input type="button" class="space" value="O26">
            <input type="button" class="space" value="O27">
            <input type="button" class="space" value="O28">
            <input type="button" class="space" value="O29">
            <input type="button" class="space" value="O30">
            <input type="button" class="space" value="O31">
            <input type="button" class="space  booked" value="O32">
            <input type="button" class="space" value="O33">
            <input type="button" class="space" value="O34">
            <input type="button" class="space booked" value="O35">
            <input type="button" class="space booked" value="O36">
        </div>

        <div class="row">
            <input type="button" class="space" value="O37">
            <input type="button" class="space" value="O38">
            <input type="button" class="space  booked" value="O39">
            <input type="button" class="space" value="O40">
            <input type="button" class="space" value="O41">
            <input type="button" class="space  booked" value="O42">
            <input type="button" class="space" value="O43">
            <input type="button" class="space" value="O44">
            <input type="button" class="space" value="O45">
            <input type="button" class="space  booked" value="O46">
            <input type="button" class="space" value="O47">
            <input type="button" class="space" value="O48">
        </div>
    </div>

    {{-- <p class="text">
        You have selected 
        <form action="" method="post">
            
            <span id="count">0</span>
        </form>
         space for a price of KES
        <span id="total">0</span>
    </p> --}}

    <form action="" method="post">

        <h2>Booking Details</h2>

        <h3> Selected Space/s (<span id="count">0</span>):</h3>
        <ul id="selected-seats"></ul>

        <h2>Total: <b>KES <span id="total">0</span></b></h2>

        <button type="submit" id="checkout-button">Submit Booking</button>


    </form>
        </div>
</div>
          </div>
       
   



<script>
    const container = document.querySelector(".container");
    const spaces = document.querySelectorAll(".row .space:not(.booked)");
    const count = document.getElementById("count");
    const total = document.getElementById("total");
    const parkingSelect = document.getElementById("parking");

    // Initialize ticketPrice based on the default selected option of the parking select dropdown
    let ticketPrice = +parkingSelect.value;

    // Function to set the parking data in localStorage
    function setParkingData(parkingIndex, parkingPrice) {
        localStorage.setItem("selectedParkingIndex", parkingIndex);
        localStorage.setItem("selectedParkingPrice", parkingPrice);
    }

    // Function to update the selected count and total price
    function updateSelectedCount() {
        const selectedSpaces = document.querySelectorAll(".row .space.selected");
        const spacesIndex = [...selectedSpaces].map(space => [...spaces].indexOf(space));

        localStorage.setItem("selectedSpaces", JSON.stringify(spacesIndex));

        const selectedSpacesCount = selectedSpaces.length;
        count.innerText = selectedSpacesCount;
        total.innerText = selectedSpacesCount * ticketPrice;

        setParkingData(parkingSelect.selectedIndex, parkingSelect.value);
    }

    // Function to populate the UI based on the stored data
    function populateUI() {
        const selectedSpaces = JSON.parse(localStorage.getItem("selectedSpaces"));

        if (selectedSpaces !== null && selectedSpaces.length > 0) {
            spaces.forEach((space, index) => {
                if (selectedSpaces.indexOf(index) > -1) {
                    space.classList.add("selected");
                }
            });
        }

        const selectedParkingIndex = localStorage.getItem("selectedParkingIndex");
        if (selectedParkingIndex !== null) {
            parkingSelect.selectedIndex = selectedParkingIndex;
            ticketPrice = +parkingSelect.value; // Update ticketPrice with the selected option value
        }
    }

    // Add event listener for the parking select dropdown to update the ticket price and count
    parkingSelect.addEventListener('change', e => {
        ticketPrice = +e.target.value;
        setParkingData(e.target.selectedIndex, e.target.value);
        updateSelectedCount();
    });

    // Add click event listener to the container to toggle the selected class for spaces
    container.addEventListener('click', e => {
        if (e.target.classList.contains("space") && !e.target.classList.contains("booked")) {
            e.target.classList.toggle("selected");
            updateSelectedCount();
        }
    });

    populateUI(); // Call this function to populate the UI on page load
</script>


{{-- INDEX B --}}

<!doctype html>


<html>

<head>
    <title>Parking Space Reservation Site</title>

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery.seat-charts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/js/jquery.seat-charts.js')}}"></script>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="grid-50">
                    <div id="seat-map">
                        <div class="front-indicator">Parking Space Reservation</div>
                        {{-- <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">From Front Row</h4> --}}
                        <div id="bus-seat-map">
                            
                        </div>
                        <!-- <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">End of Space Row</h4> -->
                    </div>
                </div>
                <div class="grid-50">
                    <div class="booking-details">

                        <form action="" method="post">

                            <h2>Booking Details</h2>

                            <h3> Selected Space/s (<span id="counter">0</span>):</h3>
                            <ul id="selected-seats"></ul>

                            <h2>Total: <b>KES <span id="total">0</span></b></h2>

                            <button type="button" id="checkout-button">Submit Booking</button>

                        </form>

                        <div id="legend"></div>
                        <button id="reset-btn" type="button">Reset Parking Space</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('frontend/assets/js/script.js')}}"></script>
</body>

</html>





<form action="" method="post">

    <h5>Booking Details</h5>

    <h4> Selected Space/s (<span id="count">0</span>):</h4>
    <ul id="selected-seats"></ul>

    <input type="text"class="mb-3" placeholder="Space Number">

    <h4>Total: <b>KES <span id="total">0</span></b></h4>

    <button type="submit" class="mt-2" id="checkout-button">Submit Booking</button>
</form>


indexO

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Space</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: #242333;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .parking-container select{
            background-color: #fff;
            border: 0;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 10px;
            padding: 5px 15px 5px 15px;
            -moz-appearance: none;
            appearance: none;
        }
        .space{
            background-color: blueviolet;
            height: 30px;
            width: 40px;
            margin: 3px;
            font-size:50px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .space.selected{
            background-color: blue;
        }
        .space.booked{
            background-color: red;
        }
        .space:nth-of-type(2){
            margin-right: 18px;
        }
        .space:nth-last-of-type(2){
            margin-left: 18px;
        }
        .space:not(.booked):hover {
            cursor: pointer;
            transform: scale(1.2);
        }
        .showcase .space:not(.booked):hover {
            cursor: default;
            transform: scale(1);
        }
        .showcase{
            background: rgba(0,0,0,0.1);
            padding: 5px 10px;
            border-radius: 5px;
            color: #777;
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }
        .showcase li{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
        }
        .showcase li small{
            margin-left: 2px;
        }
        .row{
            display: flex;
        }
        .row input{
            font-size: 1rem;
        }

        p.text{
            margin: 5px 0;
        }
        p.text span{
            color: greenyellow;
        }
        .custom-bg{
          background-color: #f92770;
        }
        .custom-bg:hover{
          background-color: #f927715b;
        }
    </style>
</head>
<body>

    <h1>Book a Space</h1>

    <div class="parking-container">
        <label>Select a space: </label>
        <select id="parking">
            <option value="150">Rooftop(KES150)</option>
        </select>
    </div>

    <ul class="showcase">
        <li>
            <div class="space"></div>
            <small>Available</small>
        </li>
        <li>
            <div class="space selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="space booked"></div>
            <small>Booked</small>
        </li>
    </ul>

    <div class="container">

        <div class="row">
            <input type="button" class="space" value="R1">
            <input type="button" class="space" value="R2">
            <input type="button" class="space" value="R3">
            <input type="button" class="space" value="R4">
            <input type="button" class="space booked" value="R5">
            <input type="button" class="space" value="R6">
            <input type="button" class="space booked" value="R7">
            <input type="button" class="space" value="R8">
            <input type="button" class="space" value="R9">
            <input type="button" class="space" value="R10">
            <input type="button" class="space" value="R11">
            <input type="button" class="space" value="R12">
        </div>

        <div class="row">
            <input type="button" class="space" value="R13">
            <input type="button" class="space booked" value="R14">
            <input type="button" class="space booked" value="R15">
            <input type="button" class="space" value="R16">
            <input type="button" class="space" value="R17">
            <input type="button" class="space" value="R18">
            <input type="button" class="space" value="R19">
            <input type="button" class="space" value="R20">
            <input type="button" class="space" value="R21">
            <input type="button" class="space booked" value="R22">
            <input type="button" class="space" value="R23">
            <input type="button" class="space" value="R24">
        </div>

        <div class="row">
            <input type="button" class="space booked" value="R25">
            <input type="button" class="space" value="R26">
            <input type="button" class="space" value="R27">
            <input type="button" class="space" value="R28">
            <input type="button" class="space" value="R29">
            <input type="button" class="space" value="R30">
            <input type="button" class="space" value="R31">
            <input type="button" class="space  booked" value="R32">
            <input type="button" class="space" value="R33">
            <input type="button" class="space" value="R34">
            <input type="button" class="space booked" value="R35">
            <input type="button" class="space booked" value="R36">
        </div>

        <div class="row">
            <input type="button" class="space" value="R37">
            <input type="button" class="space" value="R38">
            <input type="button" class="space  booked" value="R39">
            <input type="button" class="space" value="R40">
            <input type="button" class="space" value="R41">
            <input type="button" class="space  booked" value="R42">
            <input type="button" class="space" value="R43">
            <input type="button" class="space" value="R44">
            <input type="button" class="space" value="R45">
            <input type="button" class="space  booked" value="R46">
            <input type="button" class="space" value="R47">
            <input type="button" class="space" value="R48">
        </div>
    </div>

    <p class="text">
        You have selected <span id="count">0</span> space for a price of KES
        <span id="total">0</span>
    </p>

    <button>
        <a href="{{route('password.confirm')}}">Continue</a>
    </button>


<script>
    const container = document.querySelector(".container");
    const spaces = document.querySelectorAll(".row .space:not(.booked)");
    const count = document.getElementById("count");
    const total = document.getElementById("total");
    const parkingSelect = document.getElementById("parking");

    // Initialize ticketPrice based on the default selected option of the parking select dropdown
    let ticketPrice = +parkingSelect.value;

    // Function to set the parking data in localStorage
    function setParkingData(parkingIndex, parkingPrice) {
        localStorage.setItem("selectedParkingIndex", parkingIndex);
        localStorage.setItem("selectedParkingPrice", parkingPrice);
    }

    // Function to update the selected count and total price
    function updateSelectedCount() {
        const selectedSpaces = document.querySelectorAll(".row .space.selected");
        const spacesIndex = [...selectedSpaces].map(space => [...spaces].indexOf(space));

        localStorage.setItem("selectedSpaces", JSON.stringify(spacesIndex));

        const selectedSpacesCount = selectedSpaces.length;
        count.innerText = selectedSpacesCount;
        total.innerText = selectedSpacesCount * ticketPrice;

        setParkingData(parkingSelect.selectedIndex, parkingSelect.value);
    }

    // Function to populate the UI based on the stored data
    function populateUI() {
        const selectedSpaces = JSON.parse(localStorage.getItem("selectedSpaces"));

        if (selectedSpaces !== null && selectedSpaces.length > 0) {
            spaces.forEach((space, index) => {
                if (selectedSpaces.indexOf(index) > -1) {
                    space.classList.add("selected");
                }
            });
        }

        const selectedParkingIndex = localStorage.getItem("selectedParkingIndex");
        if (selectedParkingIndex !== null) {
            parkingSelect.selectedIndex = selectedParkingIndex;
            ticketPrice = +parkingSelect.value; // Update ticketPrice with the selected option value
        }
    }

    // Add event listener for the parking select dropdown to update the ticket price and count
    parkingSelect.addEventListener('change', e => {
        ticketPrice = +e.target.value;
        setParkingData(e.target.selectedIndex, e.target.value);
        updateSelectedCount();
    });

    // Add click event listener to the container to toggle the selected class for spaces
    container.addEventListener('click', e => {
        if (e.target.classList.contains("space") && !e.target.classList.contains("booked")) {
            e.target.classList.toggle("selected");
            updateSelectedCount();
        }
    });

    populateUI(); // Call this function to populate the UI on page load
</script>

</body>
</html>


{{-- //CALENDER --}}

@extends('manager.manager_dashboard')
@section('manager')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    {{-- <style>
        .container{
            background: rgb(1, 1, 40);
        }
    </style> --}}
</head>
<body>

    <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Booking title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" id="name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="page-content">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-primary">Booking Details</h2>
                <div class="col-md-11 offset-1 mt-5 mb-5">
                    <div style="width: 900px; color: rgb(223, 9, 9);">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        var booking = @json($events);
      
        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            events: booking,
            selectable: true,
            selectHelper: true,
            select: function(start, end, alldays){
                $('#bookingModal').modal('toggle');

                $('#saveBtn').click(function() {
                    var name = $('#name').val();
                    var time_in = moment(start).format('YYYY-MM-DD');
                    var time_out = moment(end).format('YYYY-MM-DD');

                    $.ajax({
                        url:"{{ route('calender.store')}}",
                        type: "POST",
                        dataType: "json",
                        data: { name, time_in, time_out },
                        success:function(response)
                        {
                        },
                        error:function(error)
                        {
                            if(error.responseJSON.errors){
                                $('#titleError')
                            }
                        },
                    });
                });
            }
        })
       
    }); 
</script>


</body>
</html>


@endsection




{{-- map --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <form id="directionsForm">
        <input type="text" name="origin" placeholder="Origin" required>
        <input type="text" name="destination" placeholder="Destination" required>
        <button type="submit">Get Directions</button>
    </form>

    <script async
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    

    <script>
        $(document).ready(function () {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -1.286389, lng: 36.817223}, // Default center coordinates
                zoom: 12 // Default zoom level
            });

            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer({map: map});

            $('#directionsForm').submit(function (e) {
                e.preventDefault();

                var origin = $('input[name="origin"]').val();
                var destination = $('input[name="destination"]').val();

                var request = {
                    origin: origin,
                    destination: destination,
                    travelMode: 'DRIVING'
                };

                directionsService.route(request, function(result, status) {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(result);
                    }
                });
            });
        });

    </script>
</body>
</html>





{{-- payment blade --}}
@extends('client.client_dashboard')
@section('client')

<div class="page-content">

    <h1>Payment</h1>
    <hr>

    <h4 class="h-font text-primary mb-2 ">Space Type: <span class="text-info fw-bold fs-4">{{ $space->space_type }}</span></h4>
        <br>
    <h4 class="h-font text-primary mb-2 ">Space Number: <span class="text-info fw-bold fs-4">{{ $space->space_number }}</span></h4>
        <br>
    <h4 class="h-font text-primary">Price per hour:  <span class="text-info fw-bold fs-4"> KES: {{ $space->price }}</span></h4>
        <br>
    <h4 class="h-font text-primary">Total Hours Booked:  <span class="text-info fw-bold fs-4"> KES: {{ $quantity }}</span></h4>
        <br>
    <h4 class="h-font text-primary">Total Amount to be Paid:  <span class="text-info fw-bold fs-4"> KES: {{ $totalPrice }}</span></h4>
        <br>
    <form action="{{ route('payment.confirm', $space) }}" method="POST">
        @csrf
        <input type="hidden" name="space_id" value="{{ $space->id }}">

        <div>
        <h3 class="mb-3 h-font text-center text-danger">Proceed to pay with: </h3>
        <div class="col-3 mx-auto">
            <button class="mt-3 btn btn-outline-primary me-4">
                <a class="" href="{{ url('/stk/push/simulation') }}">
                    {{ __('M-PESA') }}
                </a>
            </button>

            <button class="mt-3 btn btn-outline-primary">
                <a class="" href="{{ route('payment.index') }}">
                    {{ __('PayPal') }}
                </a>
            </button>
        </div>

        {{-- <div class="col-4 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-icon-text mt-3 mb-md-0">Confirm Payment</button>
        </div> --}}

        <div class="col-3 mx-auto">
            <button type="submit" class=" mt-3 btn btn-outline-primary">
                Confirm Payment
            </button>
        </div>
        <br><br><br><br><br>
    </form>
</div>
@endsection




{{-- migration --}}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};


// mpesa controller

namespace App\Http\Controllers;


use Carbon\Carbon;
use Safaricom\Mpesa\Mpesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MpesaController extends Controller
{
    // public function stkSimulation(){

    //     $mpesa= new Mpesa();
    //     $BusinessShortCode= 174379; 
    //     $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
    //     $TransactionType = 'CustomerPayBillOnline'; 
    //     $Amount = 1;
    //     $PartyA = 254727542403;
    //     $PartyB = 174379;
    //     $PhoneNumber = 254727542403; 
    //     $CallBackURL = 'https://mydomain.com/path'; 
    //     $AccountReference = "Test"; 
    //     $TransactionDesc = "Test"; 
    //     $Remarks = "Payment Received";

    //     $stkPushSimulation=$mpesa->STKPushSimulation(
    //         $BusinessShortCode, 
    //         $Passkey, 
    //         $TransactionType, 
    //         $Amount,
    //         $PartyA, 
    //         $PartyB, 
    //         $PhoneNumber, 
    //         $CallBackURL, 
    //         $AccountReference, 
    //         $TransactionDesc, 
    //         $Remarks,
    //     );

    //     return ($stkPushSimulation);
    // }

    public function token(){
        $consumerKey='WDgdYIZbtM4T0y83vH6OngBAaFW1mXAx';
        $consumerSecret='0KanJYTtO0kRJ9Sf';
        $url='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $response=Http::withBasicAuth($consumerKey,$consumerSecret)->get($url);
        return $response['access_token'];
    }



    public function initiateStkPush(){
        $accessToken=$this->token();
        $url='https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $PassKey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $BusinessShortCode=174379;
        $Timestamp=Carbon::now()->format('YmdHis');
        $password=base64_encode($BusinessShortCode.$PassKey.$Timestamp);
        $TransactionType='CustomerPayBillOnline';
        $Amount=1;
        $PartyA=254727542403;
        $PartyB=174379;
        $PhoneNumber=254727542403;
        $CallbackUrl='https://mydomain.com/path';
        $AccountReference='Neighbours Parking';
        $TransactionDesc='payment for Parking Fees';

      
        $response=Http::withToken($accessToken)->post($url,[
            'BusinessShortCode'=>$BusinessShortCode,
            'Password'=>$password,
            'Timestamp'=>$Timestamp,
            'TransactionType'=>$TransactionType,
            'Amount'=>$Amount,
            'PartyA'=>$PartyA,
            'PartyB'=>$PartyB,
            'PhoneNumber'=>$PhoneNumber,
            'CallBackURL'=>$CallbackUrl,
            'AccountReference'=>$AccountReference,
            'TransactionDesc'=>$TransactionDesc
        ]);
       
            return ($response);
        //  $res=json_decode($response);

        // $ResponseCode=$res->ResponseCode;
        // if($ResponseCode==0){
        //     $MerchantRequestID=$res->MerchantRequestID;
        //     $CheckoutRequestID=$res->CheckoutRequestID;
        //     $CustomerMessage=$res->CustomerMessage;

        //     //save to database
        //     $payment= new Stkrequest;
        //     $payment->phone=$PhoneNumber;
        //     $payment->amount=$Amount;
        //     $payment->reference=$AccountReference;
        //     $payment->description=$TransactionDesc;
        //     $payment->MerchantRequestID=$MerchantRequestID;
        //     $payment->CheckoutRequestID=$CheckoutRequestID;
        //     $payment->status='Requested';
        //     $payment->save();

        //     return $CustomerMessage;
        // }

    }

    public function stkCallback(){
        $data = file_get_contents('php://input');
        Storage::disk('local')->put('stk.txt', $data);
    }
}



// calender


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <style>
        /* .container{
            background: rgb(1, 1, 40);
        } */
        .h-font{
            font-family: 'Merienda', cursive;
        }
    </style>
</head>
<body>

  <!-- Modal -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Booking title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" id="name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="page-content">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="h-font text-center text-primary p-3">Clients Bookings</h1>
                <div class="col-md-11 offset-1 mt-5 mb-5">
                    <div style="width: 900px; color: rgb(3, 3, 120);">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        var booking = @json($events);
      
        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            events: booking,
            selectable: true,
            selectHelper: true,
            select: function(start, end, alldays){
                $('#bookingModal').modal('toggle');

                $('#saveBtn').click(function() {
                    var name = $('#name').val();
                    var time_in = moment(start).format('YYYY-MM-DD');
                    var time_out = moment(end).format('YYYY-MM-DD');

                    $.ajax({
                        url:"{{ route('calender.store')}}",
                        type: "POST",
                        dataType: "json",
                        data: { name, time_in, time_out },
                        success:function(response)
                        {
                        },
                        error:function(error)
                        {
                            if(error.responseJSON.errors){
                                $('#titleError')
                            }
                        },
                    });
                });
            }
        })
       
    }); 
</script>


</body>
</html>

{{-- VISA-CARD MODAL --}}
<div class="modal fade" id="cardModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        
        @if (Session::has('success'))
        <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
            <p>{{ Session::get('success') }}</p>
        </div>
        @endif

          <form  role="form" 
                action="{{ route('stripe.post') }}" 
                method="post" 
                class="require-validation"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form">
                    @csrf

            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-circle fs-3 me-3"></i>User Card Details
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="modal-body">

                <h5 class="text-center text-danger mb-4">Pay KES: {{ $totalPrice }} to Neighbours' Parking</h5>
                <div class='mb-3'>
                    <div class='col-xs-12 form-group required'>
                        <label class='form-label'>Name on Card</label> 
                        <input class='form-control' size='4' type='text'>
                    </div>
                </div>

                <div class='mb-3'>
                    <div class='col-xs-12 form-group card required'>
                        <label class='form-label'>Card Number</label> 
                        <input type='text' class='form-control' name="card_number" size='20' autocomplete='off'>
                    </div>
                </div>

                <div class='form-row row'>
                <div class='col-xs-12 col-md-4 form-group cvc required'>
                    <label class='form-label'>CVC</label> 
                    <input type='text' autocomplete='off' class='form-control' name="cvc" placeholder='ex. 311' size='4'>
                </div>

                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='form-label'>Expiration Month</label> <input
                        class='form-control' name="exp_month" placeholder='MM' size='2'
                        type='text'>
                </div>

                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='form-label'>Expiration Year</label> <input
                        class='form-control' name="exp_year" placeholder='YYYY' size='4'
                        type='text'>
                </div>
                </div>

                <div class="row">
                    <div class="mb-4">
                        <button class="btn btn-outline-primary btn-block mt-4" type="submit">Pay Now</button>
                    </div>
                </div>

               </div>
          </form>
      </div>
    </div>
  </div>


//Email

  <form class="forms-sample" method="POST" action="{{ route('email.send') }}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputTextarea" class="form-label">Email Message to All Players:</label>
                <textarea name="message_all" id="message_all" class="form-control" rows="4"></textarea>
            </div>

            {{-- <div class="mb-3">
                <label for="exampleInputTextarea" class="form-label">Additional Notes:</label>
                <textarea name="notes" id="notes" class="form-control" rows="4"></textarea>
            </div> --}}
            
            {{-- @error('email') --}}
            @error('message_all')
            <span>{{ $message }}</span>
            @enderror

            <button type="submit" name="send_group" class="btn btn-primary me-2">Send</button>
        </form>


