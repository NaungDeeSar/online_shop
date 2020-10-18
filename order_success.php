<?php 
include "include/header.php";
include "admin/db_connect.php";

 ?>


	<div class="container my-5">
		 <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row py-3 my-5">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html">
                        	<i class="fa fa-home" style="font-size: 20px;color:#29975A"></i></a>
                      <i class="fas fa-chevron-right"></i> <span class="text-muted">Order Success</span>
                       
                    </div>
  
                </div>

            </div>

        </div>
    </div>
		<div class="row ">
			<div class="col-12 col-md-12 text-center">
				<h3 class="text-muted text-success">Your Order is Successfully!</h3>
			<p class="text-muted">Yor order is submitted successfully. We will deliver to you within three days. Thank you.</p>
			<a href="products.php" class="btn btn-outline-danger">Continue Shopping</a>
				
				


			</div>
		</div>
	</div>
<?php 
include "include/footer.php";

 ?>