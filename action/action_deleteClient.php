<?php 
require "action_connection.php";
if(isset($_GET['id'])){
	$id_users = $_GET['id'];

	$delete = $connection->prepare("DELETE FROM client WHERE id_user = :id ");
	$delete->bindParam(':id',$id_users);
	$delete->execute();

	header('location:../index.php');

}

?>