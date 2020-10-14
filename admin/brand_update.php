<?php 
include "db_connect.php";
  $id=$_POST['id'];
  $fullpath=$_POST['oldphoto'];
	$name=$_POST['name'];
   $photo=$_FILES['photo'];
  if($photo['size']>0){
  	$basepath="img/brand/";
$fullpath=$basepath.$photo['name'];
move_uploaded_file($photo['tmp_name'],$fullpath);
}
  $sql="UPDATE brands SET name=:brand_name,photo=:brand_photo WHERE id=:b_id";
  $stmt=$pdo->prepare($sql);
    $stmt->bindParam('b_id',$id);
  $stmt->bindParam('brand_name',$name);
  $stmt->bindParam('brand_photo',$fullpath);

  $stmt->execute();

  header("location:brand.php");
  


  

 ?>