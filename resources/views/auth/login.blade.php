<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('lstyle/images/icons/favicon.ico') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/vendor/bootstrap/css/bootstrap.min.css') }}" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/css/util.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('lstyle/css/main.css') }}" >
    <!--===============================================================================================-->
</head>

<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
                    <form method="POST" class="login100-form" action="{{ route('login') }}">
                        @csrf
                        <span class="login100-form-title p-b-26">
						Login
					</span>
                        <div class="wrap-input100 validate-input">
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                 <span class="focus-input100" data-placeholder="Email"></span>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="focus-input100" data-placeholder="Password"></span>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

{{--                        <div class="wrap-input100 ">--}}
{{--                                <div class="form-check ">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                        </div>--}}

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="text-center p-t-115">
                            @if (Route::has('password.request'))
                                <a class="txt2" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                    </form>
        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="{{ asset('lstyle/vendor/jquery/jquery-3.2.1.min.js') }}" ></script>
<!--===============================================================================================-->
<script src="{{ asset('lstyle/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('lstyle/vendor/bootstrap/js/popper.js') }}" ></script>
<script src="{{ asset('lstyle/vendor/bootstrap/js/bootstrap.min.js') }}" ></script>
<!--===============================================================================================-->
<script src="{{ asset('lstyle/vendor/select2/select2.min.js') }}" ></script>
<!--===============================================================================================-->
<script src="{{ asset('lstyle/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('lstyle/vendor/daterangepicker/daterangepicker.js') }}" ></script>
<!--===============================================================================================-->
<script src="{{ asset('lstyle/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('lstyle/js/main.js') }}" ></script>

</body>
</html>
