<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="<?php echo e(URL::asset('js/dyform_resp.js')); ?>"></script>
    <script src="/assets/js/dyform_resp.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Lar Das Crianças</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo e(asset('css/light-bootstrap-dashboard.css')); ?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo e(asset('css/demo.css')); ?>" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(asset('https://fonts.googleapis.com/icon?family=Material+Icons')); ?>">


    <!--     Fonts and icons     -->
    <link href="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.cs')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('http://fonts.googleapis.com/css?family=Roboto:400,700,300')); ?>" rel='stylesheet' type='text/css'>
    <link href="<?php echo e(asset('css/pe-icon-7-stroke.css')); ?>" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="position:absolute; width: 100%;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/home')); ?>" style=" max-width: 100%; height: auto; margin-left: -130px; margin-top: -20px; position:absolute;"> <img src="<?php echo e(asset('img/logo.png')); ?>" width="210px">

                       
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
