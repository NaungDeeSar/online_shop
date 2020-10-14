
<?php 
include 'include/header.php';


?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Brand List</h1>
	<a href="addbrand.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i> Add Brand</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Brand List</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Photo</th>
					
						<th>Option</th>
						
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Photo</th>
					
						<th>Option</th>
						
					</tr>
				</tfoot>
				<tbody>

					<?php 

					$sql="SELECT * FROM brands";
					$stmt=$pdo ->prepare($sql);
					$stmt ->execute();
					$brands=$stmt->fetchAll();
					$i=0;
					foreach ($brands as $brand) {	
					  $i++;

					 ?>
					
							<td><?php echo $i; ?></td>
							<td><?php echo $brand['name']; ?></td>
							<td>

								<img src="<?php echo $brand['photo'] ?>" class='img-fluid' style="width: 90px;height: 90px; border:2px double #999;border-radius: 50px; text-align: center;">
								</td>
							
							<td>

								 <a href="brand_edit.php?id=<?php echo $brand['id'] ?>" class="btn btn-outline-warning btn-sm">Edit</a>
								  <a onclick="javaScript: return confirm('Are You Sure You Want To Delete')" href="brand_delete.php?id=<?php echo $brand['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a></td>

						</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>





<?php include 'include/footer.php' ?>