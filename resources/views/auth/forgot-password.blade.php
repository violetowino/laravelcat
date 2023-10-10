<!DOCTYPE html>

<html lang="en">
    @include('layouts.auth_header')
    <title>Forgot Password</title>

    <style>
        .authlogin-side-wrapper{
            width:100%;
            height:100%;
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
                                        <div class="authlogin-side-wrapper"></div>
                                    </div>

                                    <div class="col-md-8 ps-md-0">
                                        <div class="auth-form-wrapper px-4 py-5">
                                            <a href="#" class="noble-ui-logo logo-light d-block mb-2">Neighbours'
                                            <span>Parking</span></a>
                                            <h5 class="text-muted fw-normal mb-4">Forgot Password.</h5>

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
                                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>
                                        
                                                <div class="flex items-center justify-end mt-4">
                                                    <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                        {{ __('Email Password Reset Link') }}
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
    </body>
</html>



