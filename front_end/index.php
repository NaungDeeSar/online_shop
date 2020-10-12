<!DOCTYPE html>
<html>
<head>
	<title>OnlineShop</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>

	<!-- Navigation -->
<nav class="navbar navbar-expand-lg  navbar-light py-3 menu fixed-top">
	<div class="container">
		<a href="index.php">
		<img src="img/log.png" class="img-fluid" width="200px">
		</a>
						
			<button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Products</a>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Electronics</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">T-shirt</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="" class="nav-link">About</a></li>
				<li class="nav-item"><a href="" class="nav-link">Contact</a></li>	
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="#" class="nav-link">
					<i class="far fa-user"></i> 
				</a></li>
				<li class="nav-item"><a href="#" class="nav-link">
					<i class="fas fa-search"></i>
				</a></li>
				
				<li class="nav-item"><a href="checkout.php" class="nav-link" id="count">
					<span class="p1 fa-stack has-badge" id="item_count" data-count="0">
						<i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse"></i> 
					</span>
					
				</a>
			</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Carousel -->

	<div id="carouselExampleCaptions" class="carousel my-5 py-3" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/carousel/2.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/carousel/3.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/carousel/hero-2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	





<!-- Best Seller -->
<div class="container my-2">
	<h2 class="text-left">New Arrival</h2>
	<div class="progress" style="height: 4px;">
  <div class="progress-bar" role="progressbar" style="width:15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">  	
  </div>
</div>
<!-- 	<hr class="divider my-1"/> -->
</div>

<div class="container">
	<div class="row">
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/2.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>

				<div class="card-body text-center">
					<h5 class="my-1 text-muted">Red Camera</h5>
					
					<p class="my-2 text-dark font-weight-bold">400000 MMk <del class="text-danger">500000 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/5.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>

				<div class="card-body text-center">
					<h5 class="my-1 text-muted">Black Camera</h5>
					
					<p class="my-2 text-dark font-weight-bold">300000 MMk <del class="text-danger">400000 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/12.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>
				
				<div class="card-body text-center">
					<h5 class="my-1 text-muted">SD Card(32 G)</h5>
					
					<p class="my-2 text-dark font-weight-bold">5000 MMk <del class="text-danger">7500 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/b2.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>
				<div class="card-body text-center">
					<h5 class="my-1 text-muted">Shoe (women)</h5>
					
					<p class="my-2 text-dark font-weight-bold">15000 MMk <del class="text-danger">18000 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/large/f1.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>

				<div class="card-body text-center">
					<h5 class="my-1 text-muted">Canon Camera</h5>
					
					<p class="my-2 text-dark font-weight-bold">900000 MMk <del class="text-danger">1000000 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/large/f2.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>

				<div class="card-body text-center">
					<h5 class="my-1 text-muted">Galic Camera</h5>
					
					<p class="my-2 text-dark font-weight-bold">800000 MMk <del class="text-danger">900000 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/large/f3.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>
				<div class="card-body text-center">
					<h5 class="my-1 text-muted">DS Camera</h5>
					
					<p class="my-2 text-dark font-weight-bold">600000 MMk <del class="text-danger">710000 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-3 py-2">
			<div class="card">
				<div class="card_img">
					<img src="images/products/large/f1.jpg" class="image card-img-top border" alt="...">
					<a href="p_detail.php">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
						<span class="btn fa-stack fa-lg" title="View Detail">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					</a>
				</div>
			<div class="card-body text-center">
					<h5 class="my-1 text-muted">Camera</h5>
					
					<p class="my-2 text-dark font-weight-bold">450000 MMk <del class="text-danger">500000 MMK</del></p> 
					<button class="btn btn-outline-info btn-block">Add to Card</button>

				</div>
			</div>
		</div>
	</div>
<h2 class="text-center my-2">
		<button class="btn btn-outline-primary">view More....</button>
	</h2>

</div>



<!-- New Arrival -->


<div class="container my-5">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-6">
			<h4>Best Seller</h4>
			<div class="progress" style="height: 4px;">
				<div class="progress-bar" role="progressbar" style="width:20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

				</div>
			</div>
			<div class="card mb-3 text-decoration-none new_arrival my-3">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="images/products/large/f1.jpg" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title">Cameara</h5>
									<p class="card-text">This is a wider card with supporting text </p>
								</div>
								<div class="col-4 col-md-2">
									<button class="btn btn-outline-success btn-sm"><i class="fas fa-eye" data-target="#detailModal" data-toggle="modal"></i></button>

									<button class="btn btn-outline-success btn-sm mt-1"><i class="fas fa-cart-plus"></i></button>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 text-decoration-none new_arrival my-2">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="images/products/large/f3.jpg" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title">Canon</h5>
									<p class="card-text">This is a wider card with supporting text </p>
								</div>
								<div class="col-4 col-md-2">
									<button class="btn btn-outline-success btn-sm"><i class="fas fa-eye" data-target="#detailModal" data-toggle="modal"></i></button>

									<button class="btn btn-outline-success btn-sm mt-1"><i class="fas fa-cart-plus"></i></button>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 text-decoration-none new_arrival my-2">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="images/products/large/f2.jpg" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title">PSD</h5>
									<p class="card-text">This is a wider card with supporting text </p>
								</div>
								<div class="col-4 col-md-2">
									<button class="btn btn-outline-success btn-sm"><i class="fas fa-eye" data-target="#detailModal" data-toggle="modal"></i></button>

									<button class="btn btn-outline-success btn-sm mt-1"><i class="fas fa-cart-plus"></i></button>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-12 col-md-12 col-lg-6">
			<h4>Feature</h4>
			<div class="progress" style="height: 4px;">
				<div class="progress-bar" role="progressbar" style="width:15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

				</div>
			</div>
			<div class="card mb-3 text-decoration-none new_arrival my-3">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="images/products/large/f2.jpg" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title">Lemon</h5>
									<p class="card-text">This is a wider card with supporting text </p>
								</div>
								<div class="col-4 col-md-2">
									<button class="btn btn-outline-success btn-sm"><i class="fas fa-eye" data-target="#detailModal" data-toggle="modal"></i></button>

									<button class="btn btn-outline-success btn-sm mt-1"><i class="fas fa-cart-plus"></i></button>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 text-decoration-none new_arrival my-2">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="images/products/large/f1.jpg" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title">cameara</h5>
									<p class="card-text">This is a wider card with supporting text </p>
								</div>
								<div class="col-4 col-md-2">
									<button class="btn btn-outline-success btn-sm"><i class="fas fa-eye" data-target="#detailModal" data-toggle="modal"></i></button>

									<button class="btn btn-outline-success btn-sm mt-1"><i class="fas fa-cart-plus"></i></button>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 text-decoration-none new_arrival my-2">
				<div class="row no-gutters">
					<div class="col-4 col-md-3">
						<img src="images/products/large/f3.jpg" class="card-img" alt="...">
					</div>
					<div class="col-8 col-md-9 item_des">
						<div class="card-body">
							<div class="row">
								<div class="col-8 col-md-10 item-name">
									<h5 class="card-title">Lemon</h5>
									<p class="card-text">This is a wider card with supporting text </p>
								</div>
								<div class="col-4 col-md-2">
									<button class="btn btn-outline-success btn-sm"><i class="fas fa-eye" data-target="#detailModal" data-toggle="modal"></i></button>

									<button class="btn btn-outline-success btn-sm mt-1"><i class="fas fa-cart-plus"></i></button>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			
		</div>
		


	</div>
</div>
<!-- Footer -->
<footer class="container-fluid bg-light pt-4 mt-5">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
			<h4>About</h4>
			<p class="text-muted text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
		</div>
		<div class="col-md-4">
			<h4 class="">Category</h4>

			<a href="#">Home</a>
			<br>
			<a href="#">About</a>
			<br>
			<a href="#">product</a>
			<br>
			<a href="#">Contact</a>

		</div>
		<div class="col-md-4">
				<h4 class="">Newsletter</h4>
			<form action="">
    
      
      <div class="email-box">
        <i class="fas fa-envelope"></i>
        <input class="tbox" type="email" name="" value="" placeholder="Enter your email">
        <button class="btn btn1" type="button" name="button">Subscribe</button>
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
</footer>

<!-- Detail Modal -->
<div class="modal fade" id="detailModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Item Detail</h3>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="images/corret.png" class="img-fluid">
						</div>
						<div class="col-md-6">
							<h4>Item Infomations</h4>
							<p>Item Name: Carrot</p>
							<p>Item Price: 250 MMk</p>
							<p>Category: Vegetables</p>
							<div class="form-group">
								<label for="qty">Qty</label>
								<input type="number" name="" id="qty" class="form-control w-50">
							</div>
							<button class="btn btn-outline-success">Buy Now</button>
							<button class="btn btn-outline-success">Add To Cart</button>

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

<script type="text/javascript" src="main.js"></script>
</body>
</html>