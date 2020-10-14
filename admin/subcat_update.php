<?php 
include 'db_connect.php';
  $id=$_POST['id'];
    $name=$_POST['name'];
	$cat_id=$_POST['cat_id'];

	$sql="UPDATE subcategories SET name=:sub_name,category_id=:sub_cat_id where id=:sub_id";

	  $stmt=$pdo->prepare($sql);
    $stmt->bindParam('sub_id',$id);
  $stmt->bindParam('sub_name',$name);
  $stmt->bindParam('sub_cat_id',$cat_id);
  $stmt->execute();

  header("location:subcategory.php");
 
 ?>