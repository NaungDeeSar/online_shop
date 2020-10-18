<?php 

session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

$id=$_GET['id'];

$sql="SELECT * FROM brands where id=:b_id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam('b_id',$id);
$stmt->execute();
$brand=$stmt->fetch(PDO::FETCH_ASSOC);
 ?>
 



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h2 class="h3 mb-0 text-gray-700" style="font-family: sans-serif;">
	<a href="index.php"><i class="fas fa-tachometer-alt"></i></a>&nbsp;&nbsp;<i class="fas fa-arrow-right" style="font-size: 20px"></i>&nbsp;&nbsp;Brands Update</h2>
	<a href="brand.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>
<hr>
<div class="row">
	
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="brand_update.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $brand['id'] ?>">
			<div class="form-group">
				<label for="name">Brand Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $brand['name']?>">
			</div>
			<div class="form-group">
				<label for="photo"> Brand Photo</label><br>
				<input type="hidden" name="oldphoto" value="<?php echo $brand['photo']; ?>">
				<input type="file" name="photo">
				<img src="<?php echo $brand['photo'] ?>" width="200px" height="200px">
			</div>
			

			<input type="submit" name="category" value="Update" class="btn btn-primary float-right" >
		</form>

	</div>


</div>



<?php include 'include/footer.php';
}else{
  header("location:../front_end/index.php");
}


 ?>