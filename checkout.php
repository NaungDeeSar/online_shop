<?php 
include "include/header.php";
include "admin/db_connect.php";

 ?>


	<div class="container" style="margin-top: -90px">
		 <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row py-3 my-3">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html">
                        	<i class="fa fa-home"></i> Home</a>
                      <i class="fas fa-chevron-right"></i> <span class="text-muted">Shopping Cart</span>
                       
                    </div>
  
                </div>

            </div>

        </div>
    </div>
		<div class="row ">
			<div class="col-12 col-md-12">
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Item Name</th>
							<th scope="col">Price</th>
							<th scope="col">Qty</th>
							<th scope="col">Subtotal</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
				<div class="form-group">
					<label>Notes</label>
					<textarea class="form-control notes"></textarea>
					<input type="hidden" name="" class="total">
				</div>
				<a href="products.php" class="btn btn-success">Continue Shopping</a>

				<?php  
					if (isset($_SESSION['loginuser'])) {
					
				?>

				<button class="btn btn-warning float-right buy_now">Buy Now</button>
				<?php  }else{
				 echo '<a href="admin/login.php"  class="btn btn-warning float-right">Login to buy</a>';
				}



					?>


			</div>
		</div>
	</div>







<?php 
include "include/footer.php";

 ?>