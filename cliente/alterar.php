<?php
	
	require '../include/connection.php';
	require '../include/functions.php';
	
	if (!empty($_POST)){
		
		$id = $_POST["hddId"];
		$nome = $_POST["txtNome"];
		$email = $_POST["txtEmail"];
		$dataNascimento = $_POST["txtDataNascimento"];
				
		$sql = "update cliente set nome = '$nome'";

		$sql = $sql . ', email = ';		 
		if ($email != ''){
			$sql = $sql . "'$email'";
		}else{
			$sql = $sql . 'NULL';
		}
		
		$sql = $sql . ', dataNascimento = ';		
		if ($dataNascimento != ''){
			$dataNascimento = formatarDataParaBD($dataNascimento,'/');
			$sql = $sql . "'$dataNascimento'";
		}else{
			$sql = $sql . 'NULL';
		}
		
		$sql = $sql . " where id = $id";
		
		//echo 'sql = ' . $sql;
		//exit;
				
		$connection = mysqli_connect($server, $user, $password, $database);
			
		$result = mysqli_query($connection, $sql);
		
		mysqli_close($connection);
		
		header('Location: pesquisar.php');		
	}

?>