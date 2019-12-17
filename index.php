<?php 
	//var_dump($_GET);
	$conexao = mysqli_connect("localhost", "root", "", "crud"); 
	include_once "listar.php";
?>
<html>

<head>
    <meta charset='utf-8' />
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/compiler/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/icon/css/all.css" />
    <script src="assets/js/jquery/dist/jquery.js"></script>
    <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form name="grava" class="text-center" method="POST" action="gravar.php">
                    <div class="jumbotron p-0 m-0">
                        <h1>Cadastro de Cliente</h1>
                    </div>
                    <input class="form-control mt-1 cad_info" alt="Nome" type="text" name="nome" placeholder="Nome" />
                    <input class="form-control mt-1 cad_info" alt="Sobrenome" type="text" name="sobre" placeholder="Sobrenome" />
                    <input class="form-control mt-1 cad_info" alt="Email" type="email" name="email" placeholder="E-mail" />
                    <input class="form-control mt-1 cad_info" alt="Celular" type="number" name="cell" placeholder="Celular" />
					<button class="form-control btn btn-success mt-1" type="submit" name="enviar">Gravar</button>
					<?php
						if(isset($_GET['erro'])){
							switch($_GET['erro']){
								case 1:
									echo'
										<div class="alert alert-danger">
											<strong>Erro!</strong> Email já cadastrado.
										</div>
									';
								break;
							}
						}
					?>
                </form>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>E-mail</th>
                            <th>Celular</th>
							<th>Status</th>
							<th></th>
							<th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php listar($conexao); ?>
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
    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/app.js"></script>
    <script src="assets/icon/js/all.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
    <script src="assets/js/popper/dist/umd/popper.js"></script>
</body>

</html>