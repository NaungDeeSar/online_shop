<?php 

session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

include 'db_connect.php';
$msg="";
if(isset($_POST['category'])){
	$name=$_POST['name'];
$photo=$_FILES['logo'];

$basepath="img/category/";
$fullpath=$basepath.$photo['name'];
move_uploaded_file($photo['tmp_name'],$fullpath);

if(empty($name) || empty($photo)){
	echo "<script> alert('Plz Enter category name!'); </script>";

}else{
	$sql="INSERT INTO categories (name,logo)
VALUES(:cat_name,:cat_logo)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam('cat_name',$name);
$stmt->bindParam('cat_logo',$fullpath);
$stmt->execute();
if($stmt->rowCount()){
	$msg="Successfully";
}else{
	echo "Error";

}

}


}
 ?>
 

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Category Create</h1>
	<a href="category.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>

<div class="row">
	
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Category Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="photo"> CategoryLogo</label><br>
				<input type="file" name="logo">
			</div>
			

			<button class="btn btn-primary btn-icon-split" name="category">
                    <span class="icon text-white-50">
                      <i class="fas fa-check text-white"></i>
                    </span>
                    <span class="text">Save</span>
                  </button>
		</form>
            
		<p class="text-danger text-center"><?php echo $msg; ?></p>

	</div>


</div>



<?php include 'include/footer.php';
}else{
  header("location:../index.php");
}


 ?>