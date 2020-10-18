
<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

	include 'include/header.php';

	include 'db_connect.php';

	$id=$_GET['id'];

	$sql="SELECT item_order.*, items.name as item_name,items.discount as item_discount,items.price as item_price,orders.total as order_total,orders.voucherno as order_voucherno, orders.orderdate as order_date ,orders.created_at as order_create,users.name as user_name FROM item_order INNER JOIN items ON item_order.item_id=items.id INNER JOIN orders ON item_order.order_id=orders.id
	INNER JOIN users ON orders.user_id=users.id
	WHERE item_order.order_id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$orderdetails= $stmt->fetchAll();
	?>
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

		<a href="order_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-hand-point-left"></i>  Go Back</a>
	</div>
	<hr>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">

		<table class="table table-bordered">
			<thead>
				<tr>
					<th colspan="4">
						<table class="table table-borderless">
							<?php foreach ($orderdetails as $key => $orderdetail) {

							}
							?>

							<tr>
								<td>Cahser</td>
								<td>:</td>
								<td class="text-danger"><?php echo $orderdetail['user_name'] ?></td>
								<td>Date</td>
								<td>:</td>
								<td  class="text-danger"><?php echo $orderdetail['order_date'] ?></td>
							</tr>
							<tr>
								<td>Voucher_No</td>
								<td>:</td>
								<td  class="text-danger"><?php echo $orderdetail['order_voucherno'] ?></td>
								<td>Order_Time</td>
								<td>:</td>
								<td  class="text-danger"><?php echo $orderdetail['order_create'] ?></td>
							</tr>


						</table>

					</th>
				</tr>
				<tr>
					<th>Item Name</th>
					<th>Price</td>
						<th>Qty</th>
						<th>Amount</th>
					</tr>


				</thead>
				<tbody>
					<?php foreach ($orderdetails as $key => $orderdetail) {


						$price=$orderdetail['item_price'];
						$qty=$orderdetail['qty'];

						$total=$price*$qty;


						?>


						<tr>
							<td><?php echo $orderdetail['item_name'] ?></td>
							<td><?php echo $orderdetail['item_price']."Ks" ?></td>
							<td><?php echo $orderdetail['qty'] ?></td>
							<td><?php echo $total."Ks" ?></td>
						</tr>


					<?php } ?>
					<tr>
						<td colspan="2" rowspan="5">

							<h6>Total Amount</h6><br>
							<h6>Service Amount</h6><br>
							<h6>Discount Amount</h6><br>
							<h6>Tax Amount</h6><br>
							<h6>Net Amount</h6>
						</td>
						<td>:</td>
						<td><?php echo $orderdetail['order_total']."Ks" ?></td>
					</tr>
					<tr>

						<td>:</td>
						<td>0</td>
					</tr>
					<tr>

						<td>:</td>
						<td>0</td>
					</tr>
					<tr>

						<td>:</td>
						<td>Free</td>
					</tr>
					<tr>

						<td>:</td>
						<td><?php echo $orderdetail['order_total']."Ks" ?></td>
					</tr>

				</tbody>
			</table>



		</div>
		<?php include 'include/footer.php';
	}else{
		header("location:../index.php");
	}


	?>




