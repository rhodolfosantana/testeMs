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

        
        session_start();
		$_SESSION['id']  = $dados['id'];
		$_SESSION['user'] = $login; 
		header("Location: ../index.php");
	} else {
		header("Location: ../forms/form_login.php");
    }
?>