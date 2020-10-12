<?php 
include 'db_connect.php';

	$id=$_GET['id'];
	$sql="DELETE FROM subcategories WHERE id=:cat_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':cat_id',$id);
	$stmt->execute();
	if ($stmt->rowCount()) {
		header("location:subcategory.php");
	}else{
		echo "Error";
	}

 ?>