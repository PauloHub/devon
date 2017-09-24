
<div class="wrapper">
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Lista de Funcionários</h4>
                                <p class="category">Lista de Funcionários cadastrados no Sistema</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <?php
                                        echo " 
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style='padding-left:2%; width: 70%';>Nome</th>
                                                    <th>Visualizar</th>
                                                    <th>Editar</th>
                                                </tr>
                                            </thead>";
                                        $sql = "SELECT * FROM ldcr_funcionario2";
                                        $return = $conexao->query($sql);
                                        if($return == false){
                                            echo "
                                                <script>
                                                    alert('Erro na consulta.');
                                                </script>";
                                            echo $conexao->error;
                                        }else{
                                            $valor = 0;
                                            while($registro = $return->fetch_array()){
                                                $id = $registro["FUNC_ID"];
                                                $nome = addslashes($registro["FUNC_NOME"]);
                                                $valor +=1;
                                                echo "
                                                    <tbody>
                                                    ";
                                                    if($valor % 2 == 0){
                                                         echo "<tr style='background: #ffffff;'>";
                                                    } else {
                                                         echo "<tr style='background: rgba(203, 203, 210, 0.15);'>";
                                                    }
                                                    echo "
                                                            <td>$id</td>
                                                            <td style='padding-left:2%; width: 70%';>$nome
                                                            </td>
                                                            <td><a href='visualizar_funcionario.php?id=$id'><i class='fa fa-eye' aria-hidden='true' style='margin-left:19%;'></i></a>
                                                            </td>
                                                            <td><a href='editar_funcionario.php?id=$id' ><i class='fa fa-pencil-square-o' aria-hidden='true' style='margin-left:19%;'></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                ";
                                            }
                                        }
                                    ?>
                                </table>
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
