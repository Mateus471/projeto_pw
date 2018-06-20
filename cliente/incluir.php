<?php

	require '../include/connection.php';
	require '../include/functions.php';
	
	if (!empty($_POST)){
		$nome = $_POST['txtNome'];
		$email = $_POST['txtEmail'];
		$dataNascimento = $_POST["txtDataNascimento"];
		
		
		$sql = 'INSERT INTO cliente (email, nome, datanascimento) VALUES (';
		if ($email != ''){
			$sql = $sql . "'$email',";
		}else{
			$sql = $sql . 'NULL,';
		}
		
		$sql = $sql . "'$nome',";
		
		if ($dataNascimento != ''){
			$dataNascimento = formatarDataParaBD($dataNascimento,'/');
			$sql = $sql . "'$dataNascimento');";
		}else{
			$sql = $sql . 'NULL);';
		}
		
		//echo 'sql = ' . $sql;
		//exit;
		
		$connection = mysqli_connect($server, $user, $password, $database);
		
		$result = mysqli_query($connection, $sql);
		
		//$id = mysqli_insert_id($connection);
				
		mysqli_close($connection);
		
		header('Location: pesquisar.php');
	}

?>