<?php

	require '../include/connection.php';
	
	if (!empty($_POST)){
		
		$nome = $_POST['txtNome'];

		$sql = 'select id, nome, email, DATE_FORMAT(datanascimento, "%d/%m/%Y") as datanascimento
				  from cliente';
				  
		if ($nome != ''){
			$sql = $sql . " where nome like '%$nome%'";
		}
				 
		$sql = $sql . ' order by nome;';		
			
		$connection = mysqli_connect($server, $user, $password, $database);
				
		$result = mysqli_query($connection, $sql);

		//var_dump($result);		
	}
?>

<html>
	<head>
		<title>Pesquisa de clientes</title>
		<script>	
			window.onload = function(){
				document.querySelector("#btnNovo").onclick = novo;
			}
			
			function novo(){
				document.location = 'novo.html';
			}		
			function excluir(id){
				if (window.confirm("Deseja excluir o cliente " + id + " ?")){
					document.location = 'excluir.php?id=' + id;
				}
			}
		</script>
	</head>
	<body>
		<form action="" method="post">
			<label>Nome:</label>
			<input type="text" name="txtNome">
			<input type="submit" value="Pesquisar">
			<input type="button" id="btnNovo" value="Novo">
		</form>
		<table>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Data Nascimento</th>
				<th></th>
			</tr>
			<?php
				if (isset($result)){
					
					if (mysqli_num_rows($result) > 0){
						while ($cliente = mysqli_fetch_assoc($result)){
							echo '<tr>';
							echo '<td><a href="editar.php?id=' . 
							      $cliente["id"] . '">' . $cliente["id"] . '</a></td>';
							echo '<td>' . $cliente["nome"] . '</td>';
							echo '<td>' . $cliente["datanascimento"] . '</td>';
							echo '<td><a href="Javascript:excluir(' . $cliente["id"] . ')
							      ">Excluir</a></td>';
							echo '</tr>';					
						}
					}else{
						echo '<tr>';
						echo '<td colspan="4">Nenhum registro foi encontrado.</td>';
						echo '</tr>';
					}
					
					mysqli_free_result($result);
					
					mysqli_close($connection);
				}
			?>			
		</table>
	</body>
</html>
