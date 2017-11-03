<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <script type="text/javascript" src="{{ URL::asset('js/dyform_resp.js') }}"></script>
    <script src="/assets/js/dyform_resp.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Lar das Crianças</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}">


    <!--     Fonts and icons     -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.cs') }}" rel="stylesheet">
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Roboto:400,700,300') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

     <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    <div class="sidebar" data-color="purple" data-image="{{asset('img/imagem.jpg')}}"   style="position:fixed; margin-top:60px;" >
        <img class="sidebar" src="{{asset('img/sidebar-4.jpg')}}" style="position:fixed; margin-top:60px;" >
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
                    <a href="{{url('home')}}">
                        <i class="glyphicon glyphicon-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php
                //Verificando qual é o link atual para deixar o menu selecionado referente a onde esta
                    $link = $_SERVER ['REQUEST_URI'];
                    if(
                        $link == '/devon/public/register_child' or $link == '/register_child'
                        or $link == '/devon/public/list_child' or $link == '/list_child'
                    ){
                        echo "<li class='active'>";
                    }else{
                        echo "<li>";
                    }
                ?>
                    <a href="{{url('register_child')}}">
                        <i class="glyphicon glyphicon-user"></i>
                        <p>Crianças</p>
                    </a>
                </li>
                <li>
                    <a href="doadores.php">
                        <i class="glyphicon glyphicon-gift"></i>
                        <p>Doadores</p>
                    </a>
                </li>
                <li>
                    <a href="doacoes.php">
                        <i class="glyphicon glyphicon-piggy-bank"></i>
                        <p>Doações</p>
                    </a>
                </li>
                <li>
                    <a href="voluntarios.php">
                        <i class="glyphicon glyphicon-heart-empty"></i>
                        <p>Voluntarios</p>
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
                    <a href="{{url('register_employee')}}">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        <p>Funcionários</p>

                    </a>
                </li>
                
                
                
                <li class="active-pro" style="margin-bottom: 25%;">
                    <a href="gerenciamento.php">
                        <i class="glyphicon glyphicon-wrench"></i>
                        <p>Gerenciamento</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
