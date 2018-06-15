<?php

	require 'include/dbconnect.php';

	if ((!empty($_POST)) and (isset($_FILES['photo']))){

		$name = $_POST['name'];

		$ext = strtolower(substr($_FILES['photo']['name'],-4));
		$name_new = $name.$ext;
		$dir = './imagens/';
		move_uploaded_file($_FILES['photo']['tmp_name'], $dir.$name_new);

		$value = $_POST['value'];
		$photo = $dir.$name_new;

		var_dump($photo);

		$sql = "INSERT INTO project_pw (name, value, photo)
		             VALUES ('$name','$value','$photo')";

		$connection = mysqli_connect($server, $user, $password, $database); //Cria conexão com o banco de dados
		$result = mysqli_query($connection, $sql);
		mysqli_close($connection); //Encerra conexão com o banco de dados

		header('Location: admin.php');
	}

?>
