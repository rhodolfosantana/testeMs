<?php 
require "action_connection.php";
if(isset($_GET['id'])){
	$id_product = $_GET['id'];

	$delete = $connection->prepare("DELETE FROM product WHERE id_product = :id ");
	$delete->bindParam(':id',$id_product);
	$delete->execute();

	header('location:../index.php');

}

?>