<?php

	include_once('conexao.php'); // INCLUI O ARQUIVO CONEXAO.PHP PARA QUE SEJA REALIZADA A CONEXAO COM O BANCO QUANDO FOR NECESSARIO

	 // VERIFICO SE EXISTE $_GET['del'] E SE EXISTIR E NÃO FOR VAZIA ELE ENTÃO IRA RECEBER O ID QUE VOU PASSAR POR GET POR DENTRO DE del E IRA DELETAR O CLIENTE COM O ID
	if(isset($_GET['del_cli']) AND !empty($_GET['del_cli'])){ 
		$id = $_GET['del_cli'];
		$resultado = mysqli_query($conexao, "DELETE FROM lista WHERE id_lista = $id");
		header("Location: ../../index.php");
		var_dump($resultado);
	}
	if(isset($_GET['del_prod']) AND !empty($_GET['del_prod'])){ 
		$id = $_GET['del_prod'];
		$resultado = mysqli_query($conexao, "DELETE FROM produtos WHERE id = $id");
		header("Location: ../../produtos.php");
		var_dump($resultado);
	}
?>