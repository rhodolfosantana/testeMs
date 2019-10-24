<?php 
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['senha'])){
		
		$nome = $_POST['nome_usuario'];
		$pass = sha1($_POST['senha']);
		

		
		$checking=("SELECT * FROM client WHERE name = ?");
		$queryOne = $connection->prepare($checking);
		$queryOne->bindParam(1,$nome);
		$queryOne -> execute();
		$stmt = $queryOne->fetch();
		
		if ($stmt[0] != null){
			echo  "<script>alert('Usuário já cadastrado!');</script>";

		} else{
 		
 			$sql = "INSERT INTO client (name, password) 
						VALUES( :nome, :pass)";
	 		$query = $connection->prepare($sql);
 			$query->bindParam(':nome', $nome);
			$query->bindParam(':pass', $pass);
 			$stmt = $query->execute();
			header('Location: ../index.php');
		}
	} else {

 		echo "Não cadastrou";
		exit();

 	}
	
  ?> 
