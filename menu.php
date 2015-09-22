<?php
$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];

$url = "http://" . $server . $endereco;
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">Temporada</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="col-md-6">&nbsp;</div>
            <ul class="nav navbar-nav">
                <!-- Menu position 1 -->


                <li class="<?php
                if ($url == "http://localhost/temporada/") {
                    echo "active";
                }
                ?>"><a href="./">In&iacute;cio</a></li>
                <!-- DropDown -->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="preto" href="categoria.php">Infantil</a></li>
                    </ul>
                </li>
                <li class="<?php
                if ($url == "http://localhost/temporada/contatos.php") {
                    echo "active";
                }
                ?>"><a href="./contatos.php">Contato</a></li>


                <li class=""><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Autentique-se</button></li>

                <!-- MODEL AUTH -->

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><h3 class="omb_authTitle">Login ou <a href="#">Cadastre-se</a></h3></h4>
                            </div>
                            <div class="modal-body">
                                <?php include("./buttonAuth.php"); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODEL AUTH -->


                <!-- Menu position 1 -->
                <!-- DropDown -->

                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>-->

                <!-- DropDown -->
            </ul>
            <!-- Search -->

            <!--<div class="col-sm-3 col-md-3">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>-->

            <!-- Search -->
            <ul class="nav navbar-nav navbar-right">

                <!-- Menu position 2 -->

                <!--<li class="active"><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Contato</a></li>-->

                <!-- Menu position 2 -->
                <!-- DropDown -->

                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>-->

                <!-- DropDown -->
            </ul>
        </div>
    </div><!-- /.navbar-collapse -->
</nav>

<!-- Menu 1 -->    

