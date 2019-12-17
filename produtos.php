<?php 

	include_once("assets/function/listar.php");

?>
<?php 

	include_once("assets/function/listar.php");

?>
<html>

<head>
    <meta charset='utf-8' />
    <title>CRUD - Cliente</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/compiler/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/icon/css/all.css" />
    <script src="assets/js/jquery/dist/jquery.js"></script>
    <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
</head>

<body class="bg-dark">
    <div style class="container-fluid bg-filtro mx-auto p-0">
        <div class="row m-0 p-0">
            <div class="col-12 text-center p-0">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produtos</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Cadastro
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="clientes.php">Cliente</a>
                                <a class="dropdown-item" href="produtos.php">Produto</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row m-0 pt-4 pb-4 bg-centro">
            <div class="col-2">
                as
            </div>
            <div class="col-10">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <form class="text-center" name="grava" method="POST" action="assets/function/gravar.php">
                                <div class="jumbotron p-1 mt-3">
                                    <h1>Cadastro de Produtos</h1>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <input class="form-control mt-1 border-top-0 border-left-0 border-right-0 cad_info" type="text" name="nome" placeholder="Nome" />
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control mt-1 border-top-0 border-left-0 border-right-0 cad_info" type="text" type="text" name="desc" placeholder="Descrição" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <input class="form-control mt-1 border-top-0 border-left-0 border-right-0 cad_info" type="text" type="number" name="vVenda" placeholder="Valor de Venda" />
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control mt-1 border-top-0 border-left-0 border-right-0 cad_info" type="text" type="number" name="vCompra" placeholder="Valor Pago" />
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control mt-1 border-top-0 border-left-0 border-right-0 cad_info" type="text" type="number" name="qtd" placeholder="Quantidade" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <input class="form-control mt-1 border-top-0 border-left-0 border-right-0 cad_info" type="text" type="text" name="mModelo" placeholder="Marca/Modelo" />
                                    </div>
                                    <div class="col-4 pt-3">
                                        <input type="checkbox" name="status" class="form-check-input cad_info" value="0" disabled>Status Ativo?
                                    </div>
                                    <div class="col-4">
                                        <button class="form-control btn btn-success mt-1" name="produtos" type="submit">Gravar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-10 mx-auto">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>V.Venda</th>
                                        <th>V.Compra</th>
                                        <th>QTD</th>
                                        <th>Modelo</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php listar_produtos($conexao); ?>
                                    <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edição de usuario</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body mt-0 pt-0">
                                                    <form name="atualiza" class="text-center" method="POST" action="gravar.php">
                                                        <input class="form-control mt-1" type="text" name="nome" placeholder="Nome" />
                                                        <input class="form-control mt-1" type="text" name="sobre" placeholder="Sobrenome" />
                                                        <input class="form-control mt-1" type="email" name="email" placeholder="E-mail" />
                                                        <input class="form-control mt-1" type="number" name="cell" placeholder="Celular" />
                                                        <button class="form-control btn btn-success mt-1" type="submit" name="enviar">Gravar</button>
                                                    </form>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--script src="assets/js/app.js"></script-->
    <script src="assets/icon/js/all.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
    <script src="assets/js/popper/dist/umd/popper.js"></script>
</body>

</html <html>

<head>
    <meta charset='utf-8' />
    <title>CRUD - Produtos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/compiler/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/icon/css/all.css" />
    <script src="assets/js/jquery/dist/jquery.js"></script>
    <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/app.js"></script>
    <script src="assets/icon/js/all.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
    <script src="assets/js/popper/dist/umd/popper.js"></script>
</body>

</html>