
<?php 
include 'include/header.php';
$id=$_GET['id'];

$sql="SELECT * FROM items WHERE id=:item_id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam('item_id',$id);
$stmt->execute();
$item=$stmt->fetch(PDO::FETCH_ASSOC);


?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Item Edit</h1>
	<a href="item_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>

<div class="row">
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="item_update.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
			<input type="hidden" name="codeno" value="<?php echo $item['codeno'] ?>">
			<div class="form-group">
				<label for="name"> Item Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $item['name'] ?>">
			</div>
			<div class="form-group">
				<label for="photo"> Item Photo</label><br>
				<input type="hidden" name="oldphoto" value="<?php echo $item['photo'] ?>">
				<input type="file" name="photo">
				<img src="<?php echo $item['photo'] ?>">
			</div>
			<div class="form-group">

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="price-tab" data-toggle="tab" href="#price" role="tab" aria-controls="price" aria-selected="true">Unit Price</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="discount-tab" data-toggle="tab" href="#discount" role="tab" aria-controls="discount" aria-selected="false">Discount</a>
					</li>

				</ul>
				<div class="tab-content py-2" id="myTabContent">
					<div class="tab-pane fade show active" id="price" role="tabpanel" aria-labelledby="home-tab">
						<input type="number" name="price" placeholder="Unit Price" class="form-control" value="<?php echo $item['price'] ?>">
					</div>
					<div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="profile-tab">
						<input type="number" name="discount" placeholder="discount" class="form-control" value="<?php echo $item['discount'] ?>">
					</div>

				</div>
			</div>
			<div class="form-group">
					<label for="brand">Brand</label>
					<select class="form-control" name="brand" id="brand">
						<option>Choose...</option>

						<?php 

							$sql="SELECT * FROM brands";
							$stmt=$pdo->prepare($sql);
							$stmt->execute();
							$brands=$stmt->fetchAll();

							foreach ($brands as $brand) {
								
						?>

						<option value="<?php echo $brand['id']; ?>" 
							<?php 
						if ($brand['id']==$item['brand_id']) {
							echo "selected";
						} ?>
						>
						<?php echo $brand['name']; ?>
							
						</option>

					<?php } ?>

					</select>
				
			</div>
			<div class="form-group">
				<label for="name"> Subcategory</label>
				
				<select name="subcategory" class="form-control">
				<option>Choose...</option>
					<?php 
					$sql="SELECT * FROM subcategories";
					$stmt=$pdo->prepare($sql);
					$stmt->execute();
					$subcats=$stmt->fetchAll();
					foreach ($subcats as  $subcat) {
					   $subcat_id=$subcat['id'];
					   $subcat_name=$subcat['name'];
					
					 ?>
					<option value="<?php echo $subcat_id; ?>"
						<?php 
						if($subcat['id']==$item['subcategory_id']){
							echo "selected";
						} ?> 


						>
					

						<?php echo $subcat_name; ?>
							
						</option>
				<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="Description"> Description</label>
				<textarea class="form-control" name="description">
                          <?php echo $item['description']; ?>
				</textarea>
			</div>

			<input type="submit" name="" value="update" class="btn btn-primary float-right">
		</form>

	</div>


</div>



<?php include 'include/footer.php' ?>