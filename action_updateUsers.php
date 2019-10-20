<?php 
	$id = $_GET['id'];
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['age'])){
 		

 		$nome = $_POST['nome_usuario'];
		$age = $_POST['age'];


 		

 		$sql = "UPDATE client SET name= :nome_usuario, age= :age WHERE id_user= :id";
		$update = $connection->prepare($sql);
		$update->bindParam(':nome_usuario', $nome);
		$update->bindParam(':age', $age);
		$update->bindParam(':id', $id);

		$stmt = $update->execute();
		
 		var_dump($stmt);


		header('Location: ../index.php');
	} else {

 		echo "Erro ao atulizar.";

 	}

 
 	
	
  ?> 