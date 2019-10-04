<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{ asset('bundle/assets/images/iconowdl.png') }}">
        <title>@yield('title' ,'WDLicense')</title>
        <link
            href="{{ asset('bundle/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/sweetalert/sweetalert.css') }}"
            rel="stylesheet">
        <!-- <link
            href="{{ asset('bundle/assets/plugins/datatables/jquery.dataTables.min.css') }}"
            rel="stylesheet"> -->
        <link
            href="{{ asset('bundle/assets/plugins/chartist-js/dist/chartist.min.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/chartist-js/dist/chartist-init.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/wizard/steps.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/css-chart/css-chart.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/toast-master/css/jquery.toast.css') }}"
            rel="stylesheet">
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"> -->
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->
        <link href="{{ asset('bundle/css/style.css') }}" rel="stylesheet">
        <link
            href="{{ asset('bundle/css/colors/purple-dark.css') }}"
            id="theme"
            rel="stylesheet">
        @yield('file_css')
    </head>
    <!---->
    <body class="fix-header fix-sidebar card-no-border">
        
        
                <div class="container-fluid">
                    @yield('content')
                </div>
                
        
        <script src="{{ asset('bundle/assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bundle/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('bundle/js/waves.js') }}"></script>
        <script src="{{ asset('bundle/js/sidebarmenu.js') }}"></script>
        
        <script src="{{ asset('bundle/assets/plugins/wizard/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/wizard/steps.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/wizard/jquery.validate.min.js') }}"></script>

        <script
            src="{{ asset('bundle/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <script src="{{ asset('bundle/js/custom.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/echarts/echarts-all.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/toast-master/js/jquery.toast.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
        <script src="{{ asset('bundle/js/validation.js') }}"></script>
        
            
        <script src="{{ asset('bundle/js/dashboard1.js') }}"></script>
        <script src="{{ asset('bundle/js/toastr.js') }}"></script>
        <script src="{{ asset('assets/use2.js') }}"></script>
        <script src="{{ asset('assets/product.js') }}"></script>
        <script src="{{ asset('assets/edituser.js') }}"></script>
        <script src="{{ asset('assets/valid.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

        <!-- Chart Flot -->
        <script src="{{ asset('bundle/assets/plugins/flot/excanvas.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/flot/jquery.flot.crosshair.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>

        <!-- Chart Flot -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        
        @yield('file_js')
        
        
    </body>
</html>