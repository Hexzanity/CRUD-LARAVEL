<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{ asset('loginstyle/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/css/main.css') }}">

    <style>
        .error-message {
            background-color:red;
            color:black;
            font-size: 30px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @if (session('error'))
        <div class="error-message text-center">{{ session('error') }}</div>
    @endif

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('loginstyle/images/bg-01.jpg') }}');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ url('/login') }}">
                    @csrf

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
