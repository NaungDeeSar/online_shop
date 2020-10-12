		<?php 
include 'db_connect.php';
	$id=$_GET['id'];
	$sql="DELETE FROM brands WHERE id=:brand_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':brand_id',$id);
	$stmt->execute();
	if ($stmt->rowCount()) {
		header("location:brand.php");
	}else{
		echo "Error";
	}

 ?>