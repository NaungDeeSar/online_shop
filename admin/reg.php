<?php 

include 'db_connect.php';

$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$image=$_FILES['image'];

$baspath="img/users/";

$fullpath=$baspath.$image['name'];
move_uploaded_file($image['tmp_name'],$fullpath);

$sql="INSERT INTO users (name,image,phone,address,email,password)VALUES(:user_name,:user_image,:user_phone,:user_address,:user_email,:user_pwd)";

 $stmt=$pdo->prepare($sql);
    $stmt->bindParam('user_name',$name);
  $stmt->bindParam('user_image',$fullpath);
  $stmt->bindParam('user_phone',$phone);
$stmt->bindParam('user_address',$address);
$stmt->bindParam('user_email',$email);
$stmt->bindParam('user_pwd',$pwd);

  $stmt->execute();

  header("location:login.php");
  



 ?>