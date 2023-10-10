<!DOCTYPE html>

<html lang="en">
    @include('layouts.auth_header')

    <title>Login </title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <style>
        .authlogin-side-wrapper{
            background-image: url({{asset('upload/login.png')}})
        }
    </style>


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
                                        <div class="authlogin-side-wrapper"> </div>
                                    </div>
                                        <div class="col-md-8 ps-md-0">
                                            <div class="auth-form-wrapper px-4 py-5">
                                                <a href="#" class="noble-ui-logo logo-light d-block mb-2">Neighbours'
                                                <span>Parking</span></a>
                                                <h5 class="text-muted fw-normal mb-4">Welcome Back. Log in to your account to continue.</h5>

                                                <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                                        @csrf

                                                    <div class="mb-3">
                                                        <x-input-label for="login" :value="__('Email/Name/Phone')" />
                                                            <x-text-input id="login" class="form-control" type="text" name="login" 
                                                            :value="old('login')" required autofocus autocomplete="username" />
                                                        <x-input-error :messages="$errors->get('login')" class="mt-2 text-danger" />
                                                    </div>

                                                    <div class="password-input-wrapper mb-3">
                                                        <x-input-label for="password" :value="__('Password')" />
                                                        <x-text-input id="password" class="form-control"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" /> <span id="togglePassword"><i class="bi bi-eye"></i></span>
                                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                                    </div>

                                                    <div class="form-check mt-2 mb-3">
                                                        <label class="form-check-label" for="authCheck">
                                                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                        </label>
                                                    </div>
                                                                    
                                                    <div class="flex items-center justify-space-between mt-4">

                                                        <div class="">
                                                            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0 me-6">
                                                                {{ __('Log in') }}
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
                                                                                    
                                                <button class="mt-2 text-center">        
                                                    <a href="{{ url('auth/google')}}">
                                                        <img src="images/googlesignin.png" alt="Google" class="img-fluid" style="max-width: 140px; height: auto;"> 
                                                    </a>
                                                </button>
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
  
        @include('layouts.auth_script')
    </body>
</html>



