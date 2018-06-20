<?php

	require '../include/connection.php';

	$id = $_GET["id"];
	
	$sql = "delete from cliente where id = $id";
	
	$connection = mysqli_connect($server, $user, $password, $database);
			
	$result = mysqli_query($connection, $sql);
	
	mysqli_close($connection);
		
	header('Location: pesquisar.php');

?>