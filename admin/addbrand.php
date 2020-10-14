<?php 
include 'include/header.php';

include 'db_connect.php';
$msg="";
if(isset($_POST['brand'])){
	$name=$_POST['name'];
$photo=$_FILES['photo'];

$basepath="img/brand/";
$fullpath=$basepath.$photo['name'];
move_uploaded_file($photo['tmp_name'],$fullpath);
$sql="INSERT INTO brands (name,photo)
VALUES(:brand_name,:brand_photo)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam('brand_name',$name);
$stmt->bindParam('brand_photo',$fullpath);
$stmt->execute();

if($stmt->rowCount()){
	$msg="Successfully";
	
}else{
	echo "Error";

}

}
 ?>
 

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Brands Create</h1>
	<a href="brand.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>

<div class="row">
	<p class="text-danger"><?php echo $msg; ?></p>
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Brand Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="photo">Photo</label><br>
				<input type="file" name="photo">
			</div>
			

			<input type="submit" name="brand" value="Save" class="btn btn-primary float-right" >
		</form>

	</div>


</div>



<?php include 'include/footer.php' ?>