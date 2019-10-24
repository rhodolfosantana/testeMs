<?php 
 	require "action_connection.php";
        $product_id = $_GET['id'];
		$user_id = $_SESSION['user'][0];
        $date = date("d.m.y H:i:s");
        
        $_SESSION['product_id'] = $product_id;
        $sql = "INSERT INTO request (date, product_id, client_id) 
                    VALUES(:date, :product_id, :user_id)";
        $query = $connection->prepare($sql);
        $query->bindParam(':date', $date);
        $query->bindParam(':product_id', $product_id);
        $query->bindParam(':user_id', $user_id);

        $stmt = $query->execute();
		
        header('Location: ../index.php?id='.$user_id);
	
  ?> 
