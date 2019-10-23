<?php 
	include 'action_connection.php';
	$user =$_POST['nome_usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM client WHERE name=? AND password=? ";
	$checking = $connection->prepare($sql);
	$checking->bindParam(1, $user);
	$checking->bindParam(2,$senha);
	$stmt = $checking->execute();

    
	if ($checking->rowCount() >= 1){
		$dados = $checking->fetch();
		$_SESSION['logado'] = true;


		
		
		 
		header("Location: ../index.php");
	} else {
		header("Location: ../forms/form_login.php");
    }
?>