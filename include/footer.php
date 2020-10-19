
<div class="container">
	<div class="row ">
		<div class="col-12 col-md-4 py-2">
			<div class="row">
				<div class="col-4">
					<img src="images/delivery.png">
				</div>
					<div class="col-8">
						<h4 class="text-dark">Door to Door Delivery</h4>
						<h6 class="text-muted">On-time Delivery</h6>
					</div>
			</div>			

		
		</div>	
			<div class="col-12 col-md-4 py-2">
				<div class="row">
					<div class="col-4">
						<span class="fa-stack fa-2x bg-light" style="border-radius: 50px;width: 85px; height: 85px">

							<i class="fas fa-headphones-alt fa-stack-1x my-2" style="color: #F7951D;font-size:45px"></i>
						</span>
					</div>
					<div class="col-8">
						<h4>Customer Service</h4>
						<p class="text-muted">Hotline: <span class="text-danger">09-97999998</span></p>
					</div>
				</div>	
			
		</div>
		<div class="col-12 col-md-4 py-2">
			<div class="row">
				<div class="col-4">
					<img src="images/return.png">
				</div>
				<div class="col-8">
					<h4>Satisfication</h4>
					<p class="text-muted">3 Day Return</p>
				</div>	
			</div>
			
		</div>
	
		
	</div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-light pt-4 mt-5" style="border-top: 2px solid green">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4 class="text-muted ml-2">Promotion</h4>
				<nav class="nav my-3">
					<a class="nav-link btn btn-outline-info ml-1 my-1" href="index.php">New Arrival</a>
					<a class="nav-link btn btn-outline-warning ml-1 my-1" href="product.php">All Items</a>

					<a class="nav-link btn btn-outline-info ml-1 my-1" href="index.php">Best Seller</a>
					<a class="nav-link btn btn-outline-warning ml-1 my-1" href="index.php">Lastest Itmes</a>
					<a class="nav-link btn btn-outline-info ml-1 my-1" href="index.php">Brand Stores</a>
					
				</nav>

			</div>
			<div class="col-md-4">
				<h4 class="text-muted ml-3">Category</h4>
				<?php 
				$sql="SELECT * FROM categories";
				$stmt=$pdo->prepare($sql);
				$stmt->execute();
				$cats=$stmt->fetchAll();
				foreach ($cats as $cat) {


					?>
					<a class="dropdown-item text-muted font-weight-bold my-1" href="category.php?id=<?php echo $cat['id']; ?>">
						<?php echo $cat['name']; ?></a>
					<?php } ?>



				</div>
				<div class="col-md-4">
					<h4 class="text-muted">Newsletter</h4>
					<form action="" class="my-3">


						<div class="email-box my-2">

							<input class="form-control w-50" type="email" name="" value="" placeholder="Enter your email">
							<button class="btn btn-danger my-2" type="button" name="button">Subscribe</button>
						</div>
					</form>
					<br>
					<a href="" class="text-decoration-none wrapper">
						<span class="fa-stack fa-1x">
							<i class="fas fa-circle fa-stack-2x text-primary"></i>

							<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
						</span>

					</a>
					<a href="" class="text-decoration-none wrapper">
						<span class="fa-stack fa-1x">
							<i class="fas fa-circle fa-stack-2x text-info"></i>                       

							<i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
						</span>

					</a>
					<a href="" class="text-decoration-none wrapper">
						<span class="fa-stack fa-1x">
							<i class="fas fa-circle fa-stack-2x text-success"></i>

							<i class="fas fa-envelope  fa-stack-1x fa-inverse"></i>
						</span> 
					</a>
					<a href="" class="text-decoration-none wrapper">
						<span class="fa-stack fa-1x">
							<i class="fas fa-circle fa-stack-2x text-warning"></i>

							<i class="fab fa-instagram-square fa-stack-1x fa-inverse"></i>
						</span>

					</a>

				</div>
			</div>
		</div>
		<hr>
		<h5 class="text-center text-white text-muted">@2020 onlineshopping</h5>
	</footer>

	<!-- Detail Modal -->
	<!-- Detail Modal -->
	<div class="modal fade" id="detailModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="" class="img-fluid pimg">
						</div>
						<div class="col-md-6">
							
							
							
							<h3 class="psubcategory text-muted"></h3>
							<h3 class="pbrand text-muted"></h3>
							<div>
								<h3 class="pprice">						
								</h3>
								<del class="pdiscount text-danger"></del>
							</div>

							<p class="pdescription"></p>

							<div class="form-group">
								<label for="qty">Qty</label>
								<input type="number" name="" id="qty" class="form-control w-50">
							</div>
							
							<button class="btn btn-outline-success addtocart cart_data">Add To Cart</button>

						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>





<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="bootstrap/js/script.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>

<script type="text/javascript">
	$(window).on("scroll", function () {
		if ($(window).scrollTop() >= 80) {
			$('.menu1').addClass('header-fixed');

		}
		else {
			$('.menu1').removeClass('header-fixed');
		}


	});
	$(window).on("scroll", function () {

		if ($(window).scrollTop() >= 80) {
			$('.menu3').addClass('search-bar');

		}else {
			$('.menu3').removeClass('search-bar');
		}

		if ($(window).scrollTop() >= 80) {
			$('.menu4').addClass('login-cart');

		}else {
			$('.menu4').removeClass('login-cart');
		}


		if ($(window).scrollTop() >= 80) {
			$('.menu2').addClass('header-img');

		}else {
			$('.menu2').removeClass('header-img');
		}



	});
</script>