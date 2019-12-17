<?php
	
	$conexao = mysqli_connect("localhost", "root", "", "crud");
	
	function gravar($conexao, $nome, $sobre, $email, $cell){
		/*
		$resultado = mysqli_query($conexao, "INSERT INTO lista (nome_lista, sobre_lista, email_lista, cell_lista, status_lista) VALUES ('$nome', '$sobre', '$email', '$cell', '0')");*/
		$valida = mysqli_query($conexao, "SELECT email_lista FROM lista WHERE email_lista='$email'");
		$cont = mysqli_num_rows($valida);
		if($cont == 0){		
			$resultado = mysqli_query($conexao, 'INSERT INTO lista (nome_lista, sobre_lista, email_lista, cell_lista, status_lista) VALUES ("'.$nome.'", "'.$sobre.'", "'.$email.'", "'.$cell.'", "0")');
			
			header("Location: index.php"); // Redirecionamento
		}else{
			header("Location: index.php"); // Redirecionamento
		}
	}
	function gravarProdutos($conexao, $nome, $descricao, $vVenda, $vCompra, $quantidade, $marcaModelo, $status){
		
		$resultado = mysqli_query($conexao, "INSERT INTO produtos (nome_produtos, desc_produtos, vVenda_produtos, vCompra_produtos, quantidade_produtos, mModelo_produtos, status_produtos) VALUES ('$nome', '$descricao', '$vVenda', '$vCompra', '$quantidade', '$marcaModelo', '$status')");
		
		/*$resultado = mysqli_query($conexao, 'INSERT INTO lista (nome_produtos, desc_produtos, vVenda_produtos, vCompra_produtos, quantidade_produtos, mModelo_produtos, status_produtos) VALUES ("'.$nome.'", "'.$descricao.'", "'.$vVenda.'", "'.$vCompra.'", "'.$quantidade.'", "'.$marcaModelo.'", "'.$status.'"');*/
		
		header("Location: index.php"); // Redirecionamento
	
	}
	
	if(isset($_POST['enviar'])){
		
		$nome = $_POST['nome'];
		$sobre = $_POST['sobre'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		
		gravar($conexao, $nome, $sobre, $email, $cell);
		
	}
	if(isset($_POST['produtos'])){
		
		$nome = $_POST['nome'];
		$descricao = $_POST['desc'];
		$vVenda = $_POST['vVenda'];
		$vCompra = $_POST['vCompra'];
		$quantidade = $_POST['qtd'];
		$marcaModelo = $_POST['mModelo'];
		$status = $_POST['status'];
		
		gravar($conexao, $nome, $descricao, $vVenda, $vCompra, $quantidade, $marcaModelo, $status);
		
	}


?>