<?php 
include 'db_connect.php';

	$id=$_GET['id'];
	$sql="DELETE FROM categories WHERE id=:cat_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam('cat_id',$id);
	$stmt->execute();
	if ($stmt->rowCount()) {
		header("location:category.php");
	}else{
		echo "Error";
	}

 ?>