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

<body class="bg-light p-0">
    <div style class="container-fluid bg-filtro mx-auto p-0">
        <div class="row m-0 p-0">
            <div class="col-12 text-center p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navb">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-dark my-2 my-sm-0" type="button">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row m-0 pt-4 pb-4 bg-centro">
            <div class=" col-2">
                as
            </div>
            <div class="col-10">
                <div class="row text-center">
                    <a href="#" class="col-xl-1 col-md-2 m-0">
                        <div class="row">
                            <div class="col-12">
                                <img class="img-fluid  rounded mx-auto ico-btn w-100" alt="Clientes" title="Clientes" src="assets/img/system/ico_btn/ico-clientes.png" alt="Clientes">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h6>Cliente</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="col-xl-1 col-md-2 m-0">
                        <div class="row">
                            <div class="col-12">
                                <img class="img-fluid rounded mx-auto ico-btn w-100" alt="Produtos" title="Produtos" src="assets/img/system/ico_btn/ico-prod.png" alt="Clientes">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h6>Produtos</h6>
                            </div>
                        </div>

                    </a>
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

</html