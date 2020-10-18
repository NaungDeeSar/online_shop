
<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h2 class="h3 mb-0 text-gray-700" style="font-family: sans-serif;">
	<a href="index.php"><i class="fas fa-tachometer-alt"></i></a>&nbsp;&nbsp;<i class="fas fa-arrow-right" style="font-size: 20px"></i>&nbsp;&nbsp;Confirm Order List</h2>
	
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
						<th>User Name</th>
						<th>Voucherno</th>
						<th>Order Date</th>
						<th>Total</th>
						<th>Option</th>
						
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>User Name</th>
						<th>Voucherno</th>
						<th>Order Date</th>
						<th>Total</th>
						<th>Option</th>
						
					</tr>
				</tfoot>
				<tbody>
                     <?php  

							$num=1;

							$sql="SELECT orders.*,users.name as user_name FROM orders INNER JOIN users ON orders.user_id=users.id WHERE orders.status=:num";
							$stmt=$pdo->prepare($sql);
							$stmt->bindParam(':num',$num);
							$stmt->execute();
							$orders=$stmt->fetchAll();

							foreach ($orders as $order) {

						?>

						<tr>
							<td>1</td>
							<td><?=$order['user_name']?></td>
							<td><?=$order['voucherno']?></td>
							<td><?=$order['orderdate']?></td>
							<td><?=$order['total']."Ks" ?></td>
							<td>
								
								<a href="cancel.php?id=<?=$order['id']?>" class="btn btn-danger btn-sm">Delete</a>



							</td>



						</tr>

						<?php  
							}	
						?>


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




