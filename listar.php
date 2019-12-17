<?php
    function listar($conexao){
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
                            <a class='text-danger del_link' href='delete.php?del={$item['id_lista']}' name='{$item['nome_lista']}'>
                                <i class='fa fa-times'></i>
                            </a>
						</td>
					</tr>
				";
			}
		}
    }
    

?>