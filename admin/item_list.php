
<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h2 class="h3 mb-0 text-gray-700" style="font-family: sans-serif;">
	<a href="index.php"><i class="fas fa-tachometer-alt"></i></a>&nbsp;&nbsp;<i class="fas fa-arrow-right" style="font-size: 20px"></i>&nbsp;&nbsp;Item List</h2>
	<a href="create_item.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i> Add Item</a>
</div>
<hr>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Items List</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Code</th>
						<th>Price</th>
						<th>Option</th>
						
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Code</th>
						<th>Price</th>
						<th>Option</th>
						
					</tr>
				</tfoot>
				<tbody>

					<?php 

					$sql="SELECT * FROM items";
					$stmt=$pdo ->prepare($sql);
					$stmt ->execute();
					$items=$stmt->fetchAll();
					$i=0;
					foreach ($items as $item) {	
						$i++;

						?>

						<td><?php echo $i; ?></td>
						<td><?php echo $item['name']; ?></td>
						<td><?php echo $item['codeno']; ?></td>
						<td>
							<?php if($item['discount']){
								echo $item['discount']."Ks";

								?>
								<del><?php echo $item['price']."Ks"; ?></del>

								
								<?php
							}else{
								echo $item['price']."Ks";
							} ?>
						</td>
						<td><a href="item_detail.php?id=<?php echo $item['id']?>" class="btn btn-outline-primary btn-sm">Detail</a>
						 <a href="item_edit.php?id=<?php echo $item['id'] ?>" class="btn btn-outline-warning btn-sm">Edit</a>
							
							
							<a onclick="javaScript: return confirm('Are You Sure You Want To Delete')" href="item_delete.php?id=<?php echo $item['id'] ?>" class="btn btn-outline-danger btn-sm" >Delete</a>
						</td>

						</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include 'include/footer.php';
}else{
  header("location:../index.php");
}


 ?>




