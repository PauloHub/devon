<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg" style="position:fixed; margin-top:60px;" >
        <div class="sidebar-wrapper">
            <br>
            <ul class="nav">
                <?php
                    $link = $_SERVER ['REQUEST_URI'];
                    if($link == '/devon/public/home'){
                        echo "<li class='active'>";
                    }else{
                        echo "<li>";
                    }
                ?>
                    <a href="<?php echo e(url('home')); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="usuario.php">
                        <i class="pe-7s-user"></i>
                        <p>Usuário</p>
                    </a>
                </li>
                <li>
                    <a href="funcionarios.php">
                        <i class="pe-7s-id"></i>
                        <p>Funcionários</p>

                    </a>
                </li>
                <?php
                    $link = $_SERVER ['REQUEST_URI'];
                    if($link == '/devon/public/register_child'){
                        echo "<li class='active'>";
                    }else{
                        echo "<li>";
                    }
                ?>
                    <a href="<?php echo e(url('register_child')); ?>">
                        <i class="pe-7s-smile"></i>
                        <p>Crianças</p>
                    </a>
                </li>
                <li>
                    <a href="doacoes.php">
                        <i class="pe-7s-piggy"></i>
                        <p>Doações</p>
                    </a>
                </li>
                <li>
                    <a href="doadores.php">
                        <i class="pe-7s-user-female"></i>
                        <p>Doadores</p>
                    </a>
                </li>
                <li>
                    <a href="voluntarios.php">
                        <i class="pe-7s-users"></i>
                        <p>Voluntarios</p>
                    </a>
                </li>
                <li class="active-pro" style="margin-bottom: 25%;">
                    <a href="gerenciamento.php">
                        <i class="pe-7s-tools"></i>
                        <p>Gerenciamento</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
