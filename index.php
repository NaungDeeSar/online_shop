<?php 
include "include/header.php";
include "admin/db_connect.php";

$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name ,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id ORDER BY items.id DESC LIMIT 8 ";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$items=$stmt->fetchAll();




 ?>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide my-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/carousel/ps.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/carousel/8.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/carousel/nnn.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	







<!-- Best Seller -->
<div class="container my-3">
	<h2 class="text-left">New Arrival</h2>
	<div class="progress" style="height: 3px;">
  <div class="progress-bar" role="progressbar" style="width:15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">  	
  </div>
</div>
<!-- 	<hr class="divider my-1"/> -->
</div>

<div class="container  py-2">
	<div class="row">
		<?php 

				foreach ($items as $item) {
					
			?>
		<div class="col-6 col-md-6 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<a href="p_detail.php?id=<?php echo $item['id'] ?>">
						<img src="admin/<?php echo $item['photo'] ?>" class="image card-img-top border" alt="...">
					</a>
					
				</div>

				<div class="card-body">
					<h5 class="my-1 text-muted"><?php echo $item['name'] ?></h5>
					<!-- <h5 class="my-1 text-muted"><?php echo $item['c_name'] ?></h5>  -->
					
					<p class="my-2  font-weight-bold" style="color:#29927D">
							<?php if($item['discount']){
								echo $item['discount']."Ks";

								?>
								<del class="text-danger"><?php echo $item['price']."Ks"; ?></del>

								
								<?php
							}else{
								echo $item['price']."Ks";
							} ?>
					</p>
					
					<div class="row text-center">
							<div class="col-6 col-md-6 ">								
								<a href="" class="text-decoration-none text-dark view_detail" data-target="#detailModal" data-toggle="modal" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>" data-brand="<?= $item['brand_name'] ?>" data-subcategory="<?= $item['sub_name'] ?>" data-description="<?= $item['description'] ?>" data-photo="<?= $item['photo'] ?>">
								
									<i class="fas fa-eye fa-lg  py-3 "></i>
								</a>
							</div>
							<div class="col-6 col-md-6">						

								<a href="javascript:void(0)" class="text-decoration-none text-dark  addtocart" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>">
									<i class="fas fa-cart-plus fa-lg py-3 text-info"></i>
								
									
								</a>

							</div>
						</div>


				</div>

						

					
			</div>
		</div>
	<?php } ?>
	
	</div>
<h2 class="text-center my-2">
        <a href="product.php">
        	<button class="btn btn-outline-primary">view More....</button>
        </a>
		
	</h2>

</div>



<!-- New Arrival -->


<div class="container my-5">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-6">
			<h4>Best Seller</h4>
			<div class="progress" style="height: 3px;">
				<div class="progress-bar" role="progressbar" style="width:20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

				</div>
			</div>
			<?php 
			include "admin/db_connect.php";
			$sql="SELECT items.*,items.photo as photo_item FROM items INNER JOIN subcategories ON items.subcategory_id=subcategories.id
			 INNER JOIN item_order ON  item_order.item_id=items.id WHERE item_order.item_id >=2  GROUP BY  item_order.id LIMIT 3";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			$items=$stmt->fetchAll();


			 ?>
			 <?php foreach ($items as $item) {

			 	# code...
			  ?>
			<div class="card mb-3 text-decoration-none new_arrival my-3">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="admin/<?=$item['photo_item'] ?>" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title"><?php echo $item['name']; ?></h5>
									<p class="card-text">
										<?php
									$str=substr($item['description'], 0,100);
									 echo $str; ?> </p>

									 </p>
								</div>
								<div class="col-4 col-md-2">
									<a href="" class="text-decoration-none text-dark view_detail" data-target="#detailModal" data-toggle="modal" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>" data-brand="<?= $item['brand_name'] ?>" data-subcategory="<?= $item['sub_name'] ?>" data-description="<?= $item['description'] ?>" data-photo="<?= $item['photo'] ?>">
								
									<i class="fas fa-eye fa-lg  py-3 "></i>
								</a>

									<a href="javascript:void(0)" class="text-decoration-none text-dark  addtocart" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>">
									<i class="fas fa-cart-plus fa-lg py-3 text-info"></i>
								
									
								</a>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
		<?php } ?>
			
		</div>
		<div class="col-12 col-md-12 col-lg-6">
			<h4>Latest Items</h4>
			<div class="progress" style="height: 3px;">
				<div class="progress-bar" role="progressbar" style="width:20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

				</div>
			</div>
			<?php 

			$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name ,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id ORDER BY items.id DESC LIMIT 3 ";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			$items=$stmt->fetchAll();




			 ?>
			 <?php foreach ($items as $item) {
			 	# code...
			  ?>
			<div class="card mb-3 text-decoration-none new_arrival my-3">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="admin/<?php echo $item['photo'] ?>" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title"><?php echo $item['name'] ?></h5>
									<p class="card-text">
									<?php
									$str=substr($item['description'], 0,100);
									 echo $str; ?> </p>
								</div>
								<div class="col-4 col-md-2">
									<a href="" class="text-decoration-none text-dark view_detail" data-target="#detailModal" data-toggle="modal" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>" data-brand="<?= $item['brand_name'] ?>" data-subcategory="<?= $item['sub_name'] ?>" data-description="<?= $item['description'] ?>" data-photo="<?= $item['photo'] ?>">
								
									<i class="fas fa-eye fa-lg  py-3 "></i>
								</a>

									<a href="javascript:void(0)" class="text-decoration-none text-dark  addtocart" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>">
									<i class="fas fa-cart-plus fa-lg py-3 text-info"></i>
								
									
								</a>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			
			
		</div>
	
	</div>
</div>



<?php 
include "include/footer.php";

 ?>