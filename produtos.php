<?php 

	$conexao = mysqli_connect("localhost", "root", "", "crud"); 
	
	function listar($conexao){
		$resultado = mysqli_query($conexao, 'SELECT * FROM lista');
		
		$cont = mysqli_num_rows($resultado);
		if($cont > 0){
			while($item = mysqli_fetch_array($resultado)){
				
				if($item['status_lista']=="0"){
					
					$item['status_lista'] = "Desativado";
					
				}else{
					
					$item['status_lista'] = "Ativo";
					
				}
				
				echo'
					<tr>
						<td>' . $item['nome_lista'] . '</td>
						<td>' . $item['sobre_lista'] . '</td>
						<td>' . $item['email_lista'] . '</td>
						<td>' . $item['cell_lista'] . '</td>
						<td>' . $item['status_lista'] . '</td>
					</tr>
				';
			}
		}
	}

?>
<html>
	<head>
		<meta charset='utf-8' />
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-10 mx-auto">
					<form class="text-center" method="POST" action="gravar.php">
							<div class="jumbotron p-0 m-0">
								<h1>Lista</h1>
							</div>
							<div class="row">
								<div class="col-6">
									<input class="form-control mt-1 border-top-0 border-left-0 border-right-0" type="text" name="nome" placeholder="Nome" />
								</div>
								<div class="col-6">
									<input class="form-control mt-1 border-top-0 border-left-0 border-right-0" type="text" type="text" name="desc" placeholder="Descrição" />
								</div>
							</div>	
							<div class="row">
								<div class="col-4">
									<input class="form-control mt-1 border-top-0 border-left-0 border-right-0" type="text" type="number" name="vVenda" placeholder="Valor de Venda" />
								</div>
								<div class="col-4">
									<input class="form-control mt-1 border-top-0 border-left-0 border-right-0" type="text" type="number" name="vCompra" placeholder="Valor Pago" />
								</div>
								<div class="col-4">
									<input class="form-control mt-1 border-top-0 border-left-0 border-right-0" type="text" type="number" name="qtd" placeholder="Quantidade" />
								</div>
							</div>	
							<div class="row">
								<div class="col-4">
									<input class="form-control mt-1 border-top-0 border-left-0 border-right-0" type="text" type="text" name="mModelo" placeholder="Marca/Modelo" />
								</div>
								<div class="col-4 pt-3">
									<input type="checkbox" name="status" class="form-check-input" value="0" disabled>Status Ativo?
								</div>
								<div class="col-4">
									<button class="form-control btn btn-success mt-1" type="submit" name="produtos">Gravar</button>
								</div>
							</div>	
					</form>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12 mx-auto m-0 p-0">
					<table class="table table-hover">
						<thead>
							  <tr>
									<th>Nome</th>
									<th>Sobrenome</th>
									<th>E-mail</th>
									<th>Celular</th>
									<th>Status</th>
							  </tr>
						</thead>
						<tbody>
							<?php listar($conexao); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
		<script src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
		<script src="node_modules/jquery/dist/jquery.js"></script>
		<script src="node_modules/popper.js/dist/umd/popper.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	</body>
</html>