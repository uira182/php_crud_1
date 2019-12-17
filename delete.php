<?php
	$conexao = mysqli_connect("localhost", "root", "", "crud");
	
	if(isset($_GET['del']) AND !empty($_GET['del'])){
		$id = $_GET['del'];
		$resultado = mysqli_query($conexao, "DELETE FROM lista WHERE id_lista = $id");
		header("Location: index.php");
		var_dump($resultado);
	}
?>