<?php 
include "include/header.php";
include "admin/db_connect.php";

$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name ,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id ORDER BY items.id DESC LIMIT 8 ";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$items=$stmt->fetchAll();




 ?>

 <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option py-3" style="margin-top: -10px">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                        	<i class="fa fa-home" style="font-size: 18px">&nbsp;Home&nbsp;</i></a>
                        	<span><i class="fas fa-chevron-right"></i>
                        		All Items
                        	</span>

                      
                    </div>
  
                </div>

            </div>

        </div>
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


</div>












<?php 
include "include/footer.php";

 ?>