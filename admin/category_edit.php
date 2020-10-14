<?php 
include 'include/header.php';

$id=$_GET['id'];

$sql="SELECT * FROM categories where id=:cat_id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam('cat_id',$id);
$stmt->execute();
$cat=$stmt->fetch(PDO::FETCH_ASSOC);
 ?>
 

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Category UpDate</h1>
	<a href="category.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>

<div class="row">
	
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="category_update.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $cat['id'] ?>">
			<div class="form-group">
				<label for="name">Category Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $cat['name']?>">
			</div>
			<div class="form-group">
				<label for="photo"> CategoryLogo</label><br>
				<input type="hidden" name="oldphoto" value="<?php echo $cat['logo']; ?>">
				<input type="file" name="logo">
				<img src="<?php echo $cat['logo'] ?>" width="200px" height="200px">
			</div>
			

			<input type="submit" name="category" value="Update" class="btn btn-primary float-right" >
		</form>

	</div>


</div>



<?php include 'include/footer.php' ?>