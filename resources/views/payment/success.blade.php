

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
        <meta name="author" content="NobleUI">
        <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <title>Payment Confirmation</title>

    

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
                                        <h4 class="text-primary">Payment successful</h4>

                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <button class="btn btn-outline-primary" onclick="goBack()">
                                                Next
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


        <script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/template.js')}}"></script>
        <script>
            function goBack() {
                window.history.back();
            }
            document.addEventListener('DOMContentLoaded', function() {
            localStorage.setItem('showFinishButton', 'true');
            });
        </script>

    </body>
</html>




