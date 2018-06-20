<?php

	require '../include/connection.php';
	require '../include/functions.php';

	$id = 0;
	$nome = '';
	$email = '';
	$dataNascimento = '';

	if (!empty($_GET)){
		
		$id = $_GET["id"];
		
		$sql = "select id, nome, email, datanascimento from cliente where id = $id";
						
		$connection = mysqli_connect($server, $user, $password, $database);
			
		$result = mysqli_query($connection, $sql);
		
		while ($cliente = mysqli_fetch_assoc($result)){
			$nome = $cliente["nome"];
			$email = $cliente["email"];
			$dataNascimento = formatarDataParaExibir($cliente["datanascimento"],'-');
		}
		
		mysqli_free_result($result);
		
		mysqli_close($connection);
	}

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Edição de cliente</title>
		<script>	
			window.onload = function(){
				document.querySelector("#btnVoltar").onclick = voltar;
				document.querySelector("#btnAlterar").onclick = validar;
			}
			
			function voltar(){
				document.location = 'pesquisar.php';
			}
			
			function validar(){
				var msg = "";
				
				if (document.querySelector("#txtNome").value == ""){
					msg = "Nome;\n";
				}				
				if (msg != ""){
					msg = "Os campos abaixo são obrigatórios:\n" + msg;
					alert(msg);
					return false;
				}
				
				return true;
			}
		</script>
    </head>
    <body>
		<form action="alterar.php" method="post">
			<input type="hidden" name="hddId" value="<?php echo $id?>">
			<label>Nome:</label><input type="text" id="txtNome" name="txtNome" value="<?php echo $nome?>"><br>
			<label>Email:</label><input type="text" name="txtEmail" value="<?php echo $email?>"><br>
			<label>Data de nascimento:</label><input type="text" name="txtDataNascimento" value="<?php echo $dataNascimento?>"><br>
			<input type="submit" id="btnAlterar" value="Alterar">
			<input type="button" id="btnVoltar" value="Voltar">
		</form>
</body>
</html> 