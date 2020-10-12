
<?php 
include 'include/header.php';

?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Categories List</h1>
	<a href="addcategory.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i> Add Categoies</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Categories List</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Logo</th>
					
						<th>Option</th>
						
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Logo</th>
					
						<th>Option</th>
						
					</tr>
				</tfoot>
				<tbody>

					<?php 

					$sql="SELECT * FROM categories";
					$stmt=$pdo ->prepare($sql);
					$stmt ->execute();
					$items=$stmt->fetchAll();
					$i=0;
					foreach ($items as $item) {	
					  $i++;

					 ?>
					
							<td><?php echo $i; ?></td>
							<td><?php echo $item['name']; ?></td>
							<td>

								<img src="<?php echo $item['logo'] ?>" class='img-fluid' style="width: 90px;height: 90px; border:2px double #999;border-radius: 50px; text-align: center;">
								</td>
							
							<td>
								 <a href="#" class="btn btn-outline-warning btn-sm">Edit</a> <a href="cat_delete.php?id=<?php echo $item['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a></td>

						</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>





<?php include 'include/footer.php' ?>