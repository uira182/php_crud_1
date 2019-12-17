<?php

	include_once('conexao.php');

    function listar_clientes($conexao){
		$resultado = mysqli_query($conexao, 'SELECT * FROM lista');
		
		$cont = mysqli_num_rows($resultado);
		
		if($cont > 0){
			while($item = mysqli_fetch_array($resultado)){
				/* poderia ser feito assim com aspas simples
				echo'
					<tr>
						<td>' . $item['nome_lista'] . '</td>
						<td>' . $item['sobre_lista'] . '</td>
						<td>' . $item['email_lista'] . '</td>
						<td>' . $item['cell_lista'] . '</td>
						<td>' . $item['status_lista'] . '</td>
					</tr>
				';
				*/
				//Utilizando aspas Duplas Ambos os dos funcionam normalmente
				echo"
					<tr>
						<td>{$item['nome_lista']}</td>
						<td>{$item['sobre_lista']}</td>
						<td>{$item['email_lista']}</td>
						<td>{$item['cell_lista']}</td>
                        <td>{$item['status_lista']}</td>
                        <td>
                            <!-- Button to Open the Modal -->
                            <a type='button' class='text-danger' data-toggle='modal' data-target='#myModal'><i class='fa fa-pen'></i>
                            </a>
                        </td>
                        <td>
                            <a class='text-danger del_link' href='assets/function/delete.php?del_cli={$item['id_lista']}' name='{$item['nome_lista']}'>
                                <i class='fa fa-times'></i>
                            </a>
						</td>
					</tr>
				";
			}
		}
    }
    function listar_produtos($conexao){
		$resultado = mysqli_query($conexao, 'SELECT * FROM produtos');
		
		$cont = mysqli_num_rows($resultado);
		if($cont > 0){
			while($item = mysqli_fetch_array($resultado)){
				
				if($item['status_produtos']=="0"){
					
					$item['status_produtos'] = "Desativado";
					
				}else{
					
					$item['status_produtos'] = "Ativo";
					
				}
				
				echo'
					<tr>
						<td>' . $item['nome_produtos'] . '</td>
						<td>' . $item['desc_produtos'] . '</td>
						<td>' . $item['vVenda_produtos'] . '</td>
						<td>' . $item['vCompra_produtos'] . '</td>
						<td>' . $item['quantidade_produtos'] . '</td>
						<td>' . $item['mModelo_produtos'] . '</td>
						<td>' . $item['status_produtos'] . '</td>
						<td>
                            <a type="button" class="text-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-pen"></i>
                            </a>
                        </td>
                        <td>
                            <a class="text-danger del_link" href="assets/function/delete.php?del_prod='. $item['id'] .'" name="'. $item['nome_produtos'] .'">
                                <i class="fa fa-times"></i>
                            </a>
						</td>
					</tr>
				';
			}
		}
	}

?>