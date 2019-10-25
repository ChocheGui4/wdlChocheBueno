<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Login</title>
    <link href="<?php echo e(asset('bundle/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('bundle/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('bundle/css/colors/blue.css')); ?>" id="theme" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo e(asset('bundle/assets/images/background/login-register.jpg')); ?>);">        
            <div class="login-box card">
            <div class="card-block">
                <form class="form-horizontal form-material" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" name="password" placeholder="Password"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input type="checkbox" name="remember" id="checkbox-signup" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label for="checkbox-signup">
                                    <?php echo e(__('Remember Me')); ?>

                                </label>
                            </div> <a href="<?php echo e(route('password.request')); ?>" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> 
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="<?php echo e(route('registerStore')); ?>" class="text-info m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </section>
    <script src="<?php echo e(asset('bundle/assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/assets/plugins/bootstrap/js/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/js/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/js/waves.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/js/sidebarmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bundle/assets/plugins/styleswitcher/jQuery.style.switcher.js')); ?>"></script>
</body>
</html>