<?php 
	$id = $_GET['id'];
 	require "action_connection.php";
 	if(isset($_POST['nome_produto'])){
 		

 		$nome = $_POST['nome_produto'];

 		
 		$sql = "UPDATE product SET name_product = :nome_produto WHERE id_product= :id";
		$update = $connection->prepare($sql);
		$update->bindParam(':nome_produto', $nome);
		$update->bindParam(':id', $id);

		$stmt = $update->execute();
		


		header('Location: ../index.php');
	} else {

 		echo "Erro ao atulizar.";

 	}

 
 	
	
  ?> 