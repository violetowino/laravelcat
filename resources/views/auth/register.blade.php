
<!DOCTYPE html>

<html lang="en">
    @include('layouts.auth_header')

    <title>SignUp </title>
    <style>
        .authlogin-side-wrapper{
            width:100%;
            height:100%;
            background-image: url({{asset('upload/login.png')}})
        }
        .password-input-wrapper {
            position: relative;
        }

        #togglePassword {
            position: absolute;
            right: 35px;
            font-size: 16px;
            top: 51%; 
            transform: translateY(-50%);
            background: transparent;
            border: none;
            cursor: pointer;
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
                                <div class="row"></div>
                            
                                        <div class="col-md-12 ps-md-0">
                                            <div class="auth-form-wrapper px-4 py-5">
                                                <a href="#" class="noble-ui-logo logo-light d-block mb-2">Neighbours'
                                                <span>Parking</span></a>
                                                                
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <div>
                                                        <x-input-label for="name" :value="__('Name')" />
                                                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                                                    </div>

                                                    <div class="mt-4">
                                                        <x-input-label for="email" :value="__('Email')" />
                                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                                    </div>

                                                    <div class="mt-4">
                                                        <x-input-label for="password" :value="__('Password')" />
                                                        <x-text-input id="password" class="form-control"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="new-password" /><span id="togglePassword"><i class="bi bi-eye"></i></span>
                                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                                    </div>

                                                    <div class="mt-4">
                                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                        <x-text-input id="password_confirmation" class="form-control"
                                                            type="password"
                                                            name="password_confirmation" required autocomplete="new-password" />
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                                    </div>

                                                    <div class="form-check mt-3">
                                                        <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="form-check-input">
                                                        <label for="register-agree">I accept the terms and policy</label>
                                                    </div>

                                                    <div class="flex items-center justify-end mt-4">
                                                        <div>
                                                            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-md-3">
                                                                {{ __('Register') }}
                                                            </button>
                                                        </div>
                                                        
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                                            {{ __('Already registered?') }}
                                                        </a>
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
        @include('layouts.auth_script')
    </body>
</html>