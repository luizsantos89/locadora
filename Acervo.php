<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        include('Model/Veiculo.php');
        session_start();
    ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LocaCES - Acervo</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Fale Conosco">
                        <i class="fa fa-envelope fa-fw"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php
                            if(isset($_SESSION['usuario'])) {
                        
                        ?>
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Minha Conta</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                        <?php
                            } else {
                                echo '<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Entrar</a>';
                            }
                        ?>
                    </ul>
                </li>
            </ul>
            <!-- Fim do CABEÇALHO do site -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <img src="imagens/logo.png" height="90px" />
                            </div>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Sobre<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">O Sistema</a>
                                </li>
                                <li>
                                    <a href="morris.html">A Empresa</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Cadastro de Sócios</a>
                        </li>
                        <li>
                            <a href="Controler/controlerVeiculos.php?opcao=1"><i class="fas fa-car fa-fw"></i> Nosso Acervo</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope fa-fw"></i> Fale Conosco</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Acesse o sistema</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nosso Acervo</h1>
                </div>
                <div class="container">
                    <div class="card-deck mb-3 text-center">
                    <?php
                        if(isset($_SESSION['veiculos'])) {
                            $veiculos = $_SESSION['veiculos'];
                            foreach($veiculos as $veiculo) {                            
                    ?>
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal"><?=$veiculo->nome;?></h4>
                            </div>
                            <div class="card-body">
                                <img src="imagens/user-circle.svg" width="120px" height="120px" />
                                <ul class="list-unstyled mt-3 mb-4">
                                <li>Placa? <?=$veiculo->placa?></li>
                                <li>Fabricante: <?=$veiculo->fabricante?></li>
                                <li>Ano de Fabricação: <?=$veiculo->anoFabricacao?></li>
                                <li>Opcionais: <?=$veiculo->opcionais?></li>
                                <li>Motor: <?=$veiculo->motorizacao?></li>
                                <li>Valor Base: <?=$veiculo->valorBase?></li>
                              </ul>
                            </div>
                        </div>
                    <?php
                        }
                        } else {
                            'Nenhum veiculo cadastrado';
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
