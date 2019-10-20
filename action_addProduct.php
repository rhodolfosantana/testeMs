<?php 
 	require "action_connection.php";
 	if(isset($_POST['nome_produto'])){
 		
 		$nome = $_POST['nome_produto'];
 		
 		$sql = "INSERT INTO  product(name_product) 
						VALUES( :nome)";
 		$query = $connection->prepare($sql);
 		$query->bindParam(':nome', $nome);
 		$stmt = $query->execute();
        header('Location: ../index.php');
        
	} else {

 		echo "Não cadastrou";
		exit();

 	}
	
  ?> 