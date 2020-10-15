<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

$id=$_GET['id'];
$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id WHERE items.id=:item_id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':item_id',$id);
$stmt->execute();
$item=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Item Details</h1>
	<a href="item_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>
<hr>

<div class="row">
	<div class="col-md-4">
		<img src="<?php echo $item['photo'];?>" class='img-fluid'>
	</div>
	<div class="col-md-8">
		<h4>Name: <?php echo $item['name'] ?></h4>
		<h4>brand: <?php echo $item['brand_name'] ?></h4>
		<h4>Category: <?php echo $item['sub_name'] ?></h4>
		<h4>Price:
			<?php if($item['discount']){
				echo $item['price']."Ks";

				?>
				<del><?php echo $item['discount']."Ks"; ?></del>


				<?php
			}else{
				echo $item['price']."Ks";
			} ?>

		</h4>
		

	</div>


</div>



<?php include 'include/footer.php';
}else{
  header("location:../front_end/index.php");
}


 ?>