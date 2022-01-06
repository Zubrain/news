<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="description" content="News Login">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link href="{{ asset('/front/img/favicon.png') }}" rel=icon>

    <link rel="stylesheet" href="{{ asset('/back/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/back/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/back/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/back/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/back/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/back/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('/back/assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="/">
                        <img class="align-content" src="{{ asset('/back/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                            <label class="pull-right">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"> {{ __('Sign In') }}</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('/back/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/back/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/back/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/back/assets/js/main.js') }}"></script>


</body>
</html>
