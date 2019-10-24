<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../assets/images/favicon.png">
        <title>WDLicense</title>
        <link
            href="{{ asset('bundle/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
            rel="stylesheet">
        <link href="{{ asset('bundle/css/style.css') }}" rel="stylesheet">
        <link
            href="{{ asset('bundle/css/colors/blue.css') }}"
            id="theme"
            rel="stylesheet">
    </head>
    <body >

        <section id="wrapper">
            <div
                class="login-register"
                style="background-image:url({{ asset('bundle/assets/images/background/login-register.jpg') }});">
                <div class="form-group text-center m-t-20">
                    <h1><strong style="color: white;">WDLICENSE</strong></h1>
                    <br><br>
                        <div class="col-xs-12">
                            <a href="/login">
                                <button class="btn btn-info btn-lg text-uppercase waves-effect waves-light">Log In</button>
                            </a>
                        </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('bundle/assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bundle/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('bundle/js/waves.js') }}"></script>
        <script src="{{ asset('bundle/js/sidebarmenu.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <script src="{{ asset('bundle/js/custom.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
    </body>
</html>