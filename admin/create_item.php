
<?php 
include 'include/header.php';


?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Item Create</h1>
	<a href="item_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i> Go back</a>
</div>

<div class="row">
	<div class="offset-md-2 col-md-8">
		<form method="POST" action="additem.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name"> Item Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="photo"> Item Photo</label><br>
				<input type="file" name="photo">
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
						<input type="number" name="price" placeholder="Unit Price" class="form-control">
					</div>
					<div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="profile-tab">
						<input type="number" name="discount" placeholder="discount" class="form-control">
					</div>

				</div>
			</div>
			<div class="form-group">
				<label for="brand"> Brand</label>
				<select name="brand" class="form-control">
					<option>selection brand</option>
					<?php 
					$sql="SELECT * FROM brands";
					$stmt=$pdo->prepare($sql);
					$stmt->execute();
					$brands=$stmt->fetchAll();
					foreach ($brands as  $brand) {
					   $brand_id=$brand['id'];
					   $brand_name=$brand['name'];
					
					 ?>
					<option value="<?php echo $brand_id; ?>"><?php echo $brand_name; ?></option>
				<?php } ?>
				</select>
				
			</div>
			<div class="form-group">
				<label for="name"> Subcategory</label>
				
				<select name="subcategory" class="form-control">
					<option>selection Subcategory</option>
					<?php 
					$sql="SELECT * FROM subcategories";
					$stmt=$pdo->prepare($sql);
					$stmt->execute();
					$subcats=$stmt->fetchAll();
					foreach ($subcats as  $subcat) {
					   $subcat_id=$subcat['id'];
					   $subcat_name=$subcat['name'];
					
					 ?>
					<option value="<?php echo $subcat_id; ?>"><?php echo $subcat_name; ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="Description"> Description</label>
				<textarea class="form-control" name="description">

				</textarea>
			</div>

			<input type="submit" name="" value="Save" class="btn btn-primary float-right">
		</form>

	</div>


</div>



<?php include 'include/footer.php' ?>