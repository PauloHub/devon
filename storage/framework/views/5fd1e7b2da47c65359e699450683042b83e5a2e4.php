<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
    <div class="sidebar" data-color="purple" data-image="img/sidebar-5.jpg" style="position:fixed; margin-top:60px;" >
        <div class="sidebar-wrapper">
            <br>
            <ul class="nav">
                <?php
                    //Verificar qual link esta atualmente para poder identificar qual menu esta acessando e marcar o li
                    $link = $_SERVER ['REQUEST_URI'];
                    if($link == '/devon/public/home' or $link == '/home'){
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

                <?php
                    $link = $_SERVER ['REQUEST_URI'];
                    if($link == '/devon/public/register_employee' or $link == '/register_employee'){
                        echo "<li class='active'>";
                    }else{
                        echo "<li>";
                    }
                ?>
                    <a href="<?php echo e(url('register_employee')); ?>">
                        <i class="pe-7s-id"></i>
                        <p>Funcionários</p>

                    </a>
                </li>
                <?php
                    $link = $_SERVER ['REQUEST_URI'];
                    if($link == '/devon/public/register_child' or $link == '/register_child'){
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
