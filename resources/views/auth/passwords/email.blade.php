<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>{{ __('Reset Password') }}</title>
    <link href="{{ asset('bundle/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bundle/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bundle/css/colors/blue.css') }}" id="theme" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div>
    <section id="wrapper">
        <div class="login-register" style="background-image:url({{ asset('bundle/assets/images/background/login-register.jpg') }});">        
            <div class="login-box card">
            <div class="card-block">
                <form class="form-horizontal form-material" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <h3 class="box-title m-b-20">{{ __('Reset Password') }}</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="Email" value="{{ old('email') }}"> 
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <a href="{{ route('login') }}" class="text-info m-l-5"><b>Cancel</b></a>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </section>
    <script src="{{ asset('bundle/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bundle/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ asset('bundle/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bundle/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('bundle/js/waves.js') }}"></script>
    <script src="{{ asset('bundle/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('bundle/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('bundle/js/custom.min.js') }}"></script>
    <script src="{{ asset('bundle/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>
</html>