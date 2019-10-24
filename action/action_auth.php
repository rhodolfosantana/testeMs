<?php 
	include 'action_connection.php';
	$user =$_POST['nome_usuario'];
	$senha = $_POST['senha'];
	$private = sha1($senha);

    $sql = "SELECT * FROM client WHERE name=? AND password=? ";
	$checking = $connection->prepare($sql);
	$checking->bindParam(1, $user);
	$checking->bindParam(2,$private);
	$stmt = $checking->execute();

	if ($checking->rowCount() >= 1){

		$dados = $checking->fetch();
		$_SESSION['user'] = $dados;
		$_SESSION['logado'] = true;
		header("Location: ../index.php");
	} else {
		$_SESSION['logado'] = False;
		header("Location: ../forms/form_login.php");
    }
?>