<!DOCTYPE html>

<html lang="en">
    @include('layouts.auth_header')
    <title>Verify Email </title>

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
                                            <h5 class="text-muted fw-normal mb-4">Verify Your Email Address.</h5>

                                            <div class="mb-4 text-sm text-gray-600">
                                                {{ __('A link has been sent to your email address, click on the link to verify your
                                                    email address. If you didn\'t receive 
                                                    the email, we will gladly send you another.') }}
                                            </div>
                                        
                                            @if (session('status') == 'verification-link-sent')
                                                <div class="mb-4 font-medium text-sm text-green-600 text-success">
                                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                                </div>
                                            @endif
                                        
                                            <div class="mt-4 flex items-center justify-between">
                                                <form method="POST" action="{{ route('verification.send') }}">
                                                    @csrf
                                                    <div>
                                                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                            {{ __('Resend Verification Email') }}
                                                        </button>
                                                    </div>
                                                </form>
                                                
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <div>
                                                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mt-3 mb-md-0">
                                                            {{ __('Log Out') }}
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
    </body>
</html>



