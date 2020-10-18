<?php 

session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

$id=$_GET['id'];

$sql="SELECT * FROM subcategories where id=:cat_id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':cat_id',$id);
$stmt->execute();
$subcats=$stmt->fetch(PDO::FETCH_ASSOC);



 ?>
 

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Subcategory Update</h1>
	<a href="subcategory.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>

</div>
<hr>
<div class="row">
	
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="subcat_update.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $subcats['id'] ?>">
			<div class="form-group">
				<label for="name">SubCategory Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $subcats['name'] ?>">
			</div>
			
			<div class="form-group">
				<label for="photo">Category Id</label><br>
				<select name="cat_id" class="form-control">
					<option>Choose...</option>
					<?php 
					$sql="SELECT * FROM categories";
					$stmt=$pdo->prepare($sql);
					$stmt->execute();
					$cats=$stmt->fetchAll();
					foreach ($cats as $cat) {
						$cat_id=$cat['id'];
						$cat_name=$cat['name'];
					 ?>
					<option value="<?php echo $cat_id ?>"
						<?php 
						if($cat['id']==$subcats['category_id']){
							echo "selected";
						} ?> 

						>
						<?php echo $cat_name; ?></option>
				<?php } ?>
				</select>
			</div>
			

			<input type="submit" name="subcategory" value="Update" class="btn btn-primary float-right" >
		</form>

	</div>


</div>


<?php include 'include/footer.php';
}else{
  header("location:../front_end/index.php");
}


 ?>