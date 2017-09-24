<?php
    require 'config.php';
    error_reporting(1);

    $id = addslashes($_GET['id']);
    $sql1 = "SELECT * FROM ldcr_funcionario2 WHERE FUNC_ID = '$id'";
    $return = $conexao->query($sql1);
    if($return == false){
        echo "<script>
                    alert('Erro na consulta do funcionário');
                </script>";
                
    }else{
        $registro = $return->fetch_array();
    }

  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Vizualizar Funcionário</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Lar Das Crianças
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
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
                <li class="active">
                    <a href="funcionarios.php">
                        <i class="pe-7s-id"></i>
                        <p>Funcionários</p>
                    </a>
                </li>
                <li>
                    <a href="criancas.php">
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
                <li class="active-pro">
                    <a href="gerenciamento.php">
                        <i class="pe-7s-tools"></i>
                        <p>Gerenciamento</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Vizualizar Funcionário</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ficha de Cadastro</h4>
                                <p class="category">Ficha de Cadastro de Funcionários no Sistema</p>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text" class="form-control" name="FUNC_NOME" value="<?php echo "$registro[FUNC_NOME]" ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>RG</label>
                                                <input type="number" class="form-control" placeholder="RG" name="FUNC_RG" value="<?php echo "$registro[FUNC_RG]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="number" class="form-control" placeholder="CPF" name="FUNC_CPF" value="<?php echo "$registro[FUNC_CPF]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Conta</label>
                                                <input type="number" class="form-control" placeholder="Conta" name="FUNC_CONTA" value="<?php echo "$registro[FUNC_CONTA]"?>" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="number" class="form-control" placeholder="Telefone" name="FUNC_TEL" value="<?php echo "$registro[FUNC_TEL]"?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="FUNC_EMAIL" value="<?php echo "$registro[FUNC_EMAIL]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Nascimento</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_NASCI" value="<?php echo "$registro[FUNC_DT_NASCI]"?>" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Da Mãe</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo da Mãe"  name="FUNC_MAE" value="<?php echo "$registro[FUNC_MAE]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Do Pai</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo do Pai"  name="FUNC_PAI" value="<?php echo "$registro[FUNC_PAI]"?>" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="FUNC_ENDERECO" value="<?php echo "$registro[FUNC_ENDERECO]"?>" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Estado</label><br>
                                            <input type="text" class="form-control" placeholder="Estado" name="FUNC_ESTADO" value="<?php echo "$registro[FUNC_ESTADO]"?>" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <input type="text" class="form-control" placeholder="Cidade" name="FUNC_CIDADE" value="<?php echo "$registro[FUNC_CIDADE]"?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>BAIRRO</label>
                                                <input type="text" class="form-control" placeholder="Bairro" name="FUNC_BAIRRO" value="<?php echo "$registro[FUNC_BAIRRO]"?>" disabled>
                                            </div>
                                        </div>
                                                                
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="number" class="form-control" placeholder="CEP" name="FUNC_CEP" value="<?php echo "$registro[FUNC_CEP]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="number" class="form-control" placeholder="Número da Casa" name="FUNC_NUMERO_CASA" value="<?php echo "$registro[FUNC_NUMERO_CASA]"?>" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Admissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_ADMISSAO" value="<?php echo "$registro[FUNC_DT_ADMISSAO]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Demissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_DEMISSAO" value="<?php echo "$registro[FUNC_DT_DEMISSAO]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cargo</label>
                                                <input type="text" class="form-control"  placeholder="Cargo/Função" name="FUNC_CARGO" value="<?php echo "$registro[FUNC_CARGO]"?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Formação</label>
                                                <input type="text" class="form-control"  placeholder="Formação ou Escolaridade" name="FUNC_FORMACAO" value="<?php echo "$registro[FUNC_FORMACAO]"?>" disabled>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                    <br><br>
                                        
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </form>
                                <div align="center">                                    
                                    <?php 
                                        echo "
                                            <button style='width:120px;' type='submit' class='btn btn-info btn-fill' onClick='JavaScript: window.history.back();'>Cancelar </button>
                                            <a href='editar_funcionario.php?id=$id'><button style='width:120px;' type='form' class='btn btn-info btn-fill separar-div'>Editar</button></a> 
                                        ";                                    
                                     ?> 
                                </div>
                                <br>
                            </div>
                        </div> 
                    </div>                
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

</html>
