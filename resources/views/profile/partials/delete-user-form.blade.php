
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
        <meta name="author" content="NobleUI">
        <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <title>Delete Account</title>

        <style>
            .authlogin-side-wrapper{
                width:100%;
                height:100%;
                background-image: url({{asset('upload/login.png')}})
            }
        </style>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('backend/assets/vendors/core/core.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('backend/assets/css/demo2/style.css')}}">
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
                                <div class="row"> </div>
                            
                                <div class="col-md-12 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo logo-light d-block mb-2">Neighbours'
                                        <span>Parking</span></a>
                                        

                                        <section class="space-y-6">
                                            <header>
                                                <h2 class="text-lg font-medium text-gray-900" style="color: #fb039c;">
                                                    {{ __('Delete Account') }}
                                                </h2>
                                        
                                                <p class="mt-1 text-sm text-gray-600">
                                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                                                </p>
                                            </header>
                                        
                                            <x-danger-button
                                                x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                            >{{ __('Delete Account') }}</x-danger-button>
                                        
                                            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable class="modal-blue-bg">
                                                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                                    @csrf
                                                    @method('delete')
                                        
                                                    <h2 class="text-lg font-medium text-gray-900" style="color: #fb039c;">
                                                        {{ __('Are you sure you want to delete your account?') }}
                                                    </h2>
                                        
                                                    <p class="mt-1 text-sm text-gray-600">
                                                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                                    </p>
                                        
                                                    <div class="mt-6">
                                                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                                        
                                                        <x-text-input
                                                            id="password"
                                                            name="password"
                                                            type="password"
                                                            class="mt-1 block w-3/4"
                                                            placeholder="{{ __('Password') }}"
                                                        />
                                        
                                                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                                    </div>
                                        
                                                    <div class="mt-6 flex justify-end">
                                                        <x-secondary-button x-on:click="$dispatch('close')">
                                                            {{ __('Cancel') }}
                                                        </x-secondary-button>
                                        
                                                        <x-danger-button class="ml-3">
                                                            {{ __('Delete Account') }}
                                                        </x-danger-button>
                                                    </div>
                                                </form>
                                            </x-modal>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/template.js')}}"></script>

    </body>
</html>




