<?php 
include 'db_connect.php';
$id=$_POST['id'];
 $name=$_POST['name'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$brand=$_POST['brand'];
$subcategory=$_POST['subcategory'];
$description=$_POST['description'];
$fullpath=$_POST['oldphoto'];
$photo=$_FILES['photo'];
$codeno=$_POST['codeno'];

if ($photo['size']>0) {
		$basepath="img/items/";
		$fullpath=$basepath.$photo['name'];
		move_uploaded_file($photo['tmp_name'], $fullpath);
	}

$sql="UPDATE items SET codeno=:item_codeno,name=:item_name,photo=:item_photo,price=:item_price,discount=:item_discount,brand_id=:item_brand_id,subcategory_id=:item_subcat_id,description=:item_desc WHERE items.id=:item_id";

$stmt=$pdo->prepare($sql);
$stmt->bindParam(':item_id',$id);
$stmt->bindParam(':item_codeno',$codeno);
$stmt->bindParam(':item_name',$name);
$stmt->bindParam(':item_photo',$fullpath);
$stmt->bindParam(':item_price',$price);
$stmt->bindParam(':item_discount',$discount);
$stmt->bindParam(':item_brand_id',$brand);
$stmt->bindParam(':item_subcat_id',$subcategory);
$stmt->bindParam(':item_desc',$description);
$stmt->execute();

	header("location:item_list.php");

 ?>