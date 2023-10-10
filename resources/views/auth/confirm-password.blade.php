<!DOCTYPE html>

<html lang="en">
    @include('layouts.auth_header')
    <title>Confirm Password</title>

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
                                            <h5 class="text-muted fw-normal mb-4">Confirm your Password.</h5>
                                            <div class="mb-4 text-sm text-gray-600">
                                                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                            </div>
                                        
                                            <form method="POST" action="{{ route('password.confirm') }}">
                                                @csrf

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
        @include('layouts.auth_script')
    </body>
</html>



