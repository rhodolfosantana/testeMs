<?php 
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['age'])){
		
		$nome = $_POST['nome_usuario'];
		$age = $_POST['age'];
		
		$checking=("SELECT * FROM client WHERE name = ?");
		$queryOne = $connection->prepare($checking);
		$queryOne->bindParam(1,$nome);
		$queryOne -> execute();
		$stmt = $queryOne->fetch();
		
		if ($stmt[0] != null){
			echo  "<script>alert('Usuário já cadastrado!');</script>";
			
		} else{
 		
 			$sql = "INSERT INTO client (name, age) 
						VALUES( :nome, :age)";
	 		$query = $connection->prepare($sql);
 			$query->bindParam(':nome', $nome);
			$query->bindParam(':age', $age);
 			$stmt = $query->execute();
			header('Location: ../index.php');
		}
	} else {

 		echo "Não cadastrou";
		exit();

 	}
	
  ?> 
