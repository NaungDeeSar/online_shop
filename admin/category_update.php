<?php 
include "db_connect.php";
  $id=$_POST['id'];
  $fullpath=$_POST['oldphoto'];
	$name=$_POST['name'];
   $photo=$_FILES['logo'];
  if($photo['size']>0){
  	$basepath="img/category/";
$fullpath=$basepath.$photo['name'];
move_uploaded_file($photo['tmp_name'],$fullpath);
}
  $sql="UPDATE categories SET name=:cat_name,logo=:cat_logo WHERE id=:cat_id";
  $stmt=$pdo->prepare($sql);
    $stmt->bindParam('cat_id',$id);
  $stmt->bindParam('cat_name',$name);
  $stmt->bindParam('cat_logo',$fullpath);

  $stmt->execute();

  header("location:category.php");
  


  

 ?>