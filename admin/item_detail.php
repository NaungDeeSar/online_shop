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
	<h2 class="h3 mb-0 text-gray-700" style="font-family: sans-serif;">
	<a href="index.php"><i class="fas fa-tachometer-alt"></i></a>&nbsp;&nbsp;<i class="fas fa-arrow-right" style="font-size: 20px"></i>&nbsp;&nbsp;Item Details</h2>
	<a href="item_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>

<hr>

<div class="row">
	<div class="col-md-4">
		<img src="<?php echo $item['photo'];?>" class='img-fluid'>
	</div>
	<div class="col-md-8">
		<div class="card  shadow-sm border-left-primary">
                <div class="card-body">
                	<h5>Name : <span class="text-success"><?php echo $item['name'] ?></span></h5> 
                	<h5>Brand : <span class="text-success"><?php echo $item['brand_name'] ?></span></h5> 
                	<h5>Category : <span class="text-success"><?php echo $item['sub_name'] ?></span></h5> 
                	<h5>Price : <span><?php

                	if($item['discount']){
                		echo $item['discount']."Ks";
                	}
                	?>
                	<del class="text-danger"><?php echo $item['price']."ks" ?></del>
                	<?php}  ?>

                	 </span></h5> 
                  
                </div>
                <h5 class="text-muted ml-3">Description ::</h5>

                <p class="text-muted ml-3  py-1"><?php echo $item['description'] ?></p>
          </div>
         


	</div>


</div>



<?php include 'include/footer.php';
}else{
  header("location:../index.php");
}


 ?>