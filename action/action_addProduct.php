<?php 
 	require "action_connection.php";
 	if(isset($_POST['nome_produto']) && isset($_FILES['imagem'])){
        $nome = $_POST['nome_produto'];
        $imagem = $_FILES['imagem'];

		if(isset($_POST['send'])){
     		$format = array("png", "jpeg", "jpg");
			mkdir(__DIR__.'/../upload/', 0777, true);
			$extensao  =  pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
			$novo_nome =  "imagem_".md5(time()).$extensao;
			$diretorio =  "../upload/";
            move_uploaded_file($imagem['tmp_name'], $diretorio.$novo_nome);
        }	
 		
 		$sql = "INSERT INTO  product(name_product, imagem) 
						VALUES( :nome, :imagem)";
 		$query = $connection->prepare($sql);
        $query->bindParam(':nome', $nome);
 		$query->bindParam(':imagem', $novo_nome);
         
        $stmt = $query->execute();
        
        header('Location: ../index.php');

	} else {

 		echo "Não cadastrou";
		exit();

 	}
	
  ?> 