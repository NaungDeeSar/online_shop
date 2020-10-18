<?php 

session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

$msg="";
if(isset($_POST['subcategory'])){
	$name=$_POST['name'];
	$cat_id=$_POST['cat_id'];

$sql="INSERT INTO subcategories (name,category_id)
VALUES(:cat_name,:cat_id)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam('cat_name',$name);
$stmt->bindParam('cat_id',$cat_id);
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
	<h2 class="h3 mb-0 text-gray-700" style="font-family: sans-serif;">
	<a href="index.php"><i class="fas fa-tachometer-alt"></i></a>&nbsp;&nbsp;<i class="fas fa-arrow-right" style="font-size: 20px"></i>&nbsp;&nbsp;Subcategory Add</h2>
	<a href="subcategory.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>
<hr>

<div class="row">
	<p class="text-danger"><?php echo $msg; ?></p>
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">SubCategory Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="photo">Category Id</label><br>
				<select name="cat_id" class="form-control">
					<?php 
					$sql="SELECT * FROM categories";
					$stmt=$pdo->prepare($sql);
					$stmt->execute();
					$cats=$stmt->fetchAll();
					foreach ($cats as $cat) {
						$cat_id=$cat['id'];
						$cat_name=$cat['name'];
					 ?>
					<option value="<?php echo $cat_id?>"><?php echo $cat_name; ?></option>
				<?php } ?>
				</select>
			</div>
			

			<input type="submit" name="subcategory" value="Save" class="btn btn-primary float-right" >
		</form>

	</div>


</div>


<?php include 'include/footer.php';
}else{
  header("location:../front_end/index.php");
}


 ?>