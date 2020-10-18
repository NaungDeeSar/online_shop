<?php 
session_start();
include "admin/db_connect.php";


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>OnlineShop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/animate.css">
	<style type="text/css">
.search-container input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  width:85%;
  border:2px solid #F8F9FA;
  
}

.search-container button {  
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background:red;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.search-container button i{
	color: #fff;
}

 .search-container button:hover {
  background: #E60000;
}

@media screen and (max-width: 600px) {
 .search-container {
    float: none;
  }
 .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
   input[type=text] {
    border: 1px solid #ccc;  
  }
}


	</style>

</head>
<body>

<div class="container-fluid bg-danger top-header">
	<div class="container text-white">
		<div class="row">
			<div class="col-6 col-md-8 ">
				
				<div class="float-left my-1">
					<a href="" class="text-white ">
						<i class="fas fa-phone">&nbsp;&nbsp;+5925999999</i>
					</a>&nbsp;&nbsp;
					<a href="" class="text-white">
						<i class="far fa-envelope-open">&nbsp;&nbsp;onlineshop2020@gmail.com</i>
					</a>
				</div>
			</div>
			<div class="col-6 col-md-4">
				<div class="flog-right">
					
                                    	<a href="https://www.twitter.com" class="" title="twitter">
                                    		<i class="fab fa-twitter"></i>
                                    	</a>
                                    	<a href="https://www.google.com" class="" title="google">
                                    		<i class="fab fa-google"></i>
                                    	</a>
                                    	<a href="https://www.instagram.com" class="" title="instagram">
                                    		<i class="fab fa-instagram"></i>
                                    	</a>
                                    	<a href="https://www.facebook.com" class="" title="facebook">
                                    		<i class="fab fa-facebook-f"></i>
                                    	</a>
				</div>
				
			</div>
		</div>
		

	</div>
	
</div>

		<div class="menu1">
			<div class="container">
				
			<div class="row">
			<div class="col-12 col-md-12 col-lg-3">
				
			
				<p class="text-muted my-1">
					<div class="img  header-img10 my-2">
						<a href="index.php"  class="menu2">Dvgxlxm</a>
					</div>
				</p>
			</div>
			<div class="col-12 col-md-12 col-lg-5 my-3"> 
				<div class="search-container menu3">
					<form action="search.php" method="POST">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

			</div>
			<div class="col-12 col-md-12 col-lg-4 my-3 py-3">
				<nav class="nav menu4">
					<div class="login">
						<?php 
               if(isset($_SESSION['loginuser']['name'])){
               	?>
              
               	<li class="nav-item dropdown">
               		<a class="nav-link dropdown-toggle my-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               			<?php echo $_SESSION['loginuser']['name']; ?>
               		</a>
               		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
               			<a class="dropdown-item" href="#">Profile</a>
               			<a class="dropdown-item" href="#">Setting</a>
               			<div class="dropdown-divider"></div>
               			<a class="dropdown-item" href="admin/logout.php">Logout</a>
               		</div>
               	</li>

              <?php }else{ ?>
						<li><a class="" href="admin/login.php">
							<i class="far fa-user fa-1x"></i>&nbsp;&nbsp;Login</a></li>
							<span class="text-muted font-weight-bold">/</span>
							<li><a class="" href="admin/register.php">Register</a></li>

<?php } ?>

						</div>

						<div class="header-cart ml-3">
							<li>
								<a class="" href="#" id="count">
									<span class="p1 fa-stack has-badge" id="item_count1" data-count="0">
										<i class="far fa-heart"></i>

									</span>

								</a>
							</li>
							<li>
								<a class="" href="checkout.php" id="count">
									<span class="p1 fa-stack has-badge" id="item_count" data-count="0">
										<i class="fas fa-shopping-bag"></i>

									</span>

								</a>
							</li>

						</div>




					</nav>



				</div>
			</div>
			</div>
		</div>
	

	<!-- Navigation -->
<nav class="navbar navbar-expand-lg  navbar-light py-2 menu">
	<div class="container">
		<a href="index.php">
			<!-- <h3 class="text-muted" >
				E-COMMERCE 	</h3> -->
		<!-- <img src="img/log.png" class="img-fluid" width="200px"> -->
	</a>
						
			<button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="index.php" class="nav-link my-1">HOME</a></li>
					
				 	<li class="nav-item dropdown">
               		<a class="nav-link dropdown-toggle my-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               			CATEGORIES
               		</a>
               		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
               			<?php 
                              $sql="SELECT * FROM categories";
                              $stmt=$pdo->prepare($sql);
                              $stmt->execute();
                              $cats=$stmt->fetchAll();
                              foreach ($cats as $cat) {
                              	
                          
						 ?>
               			<a class="dropdown-item font-weight-bold" href="category.php?id=<?php echo $cat['id']; ?>">
               			<?php echo $cat['name']; ?></a>
               			<?php } ?>
               			
               		</div>
               	</li>
				<li class="nav-item"><a href="about.php" class="nav-link my-1">ABOUT</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link my-1">CONTACT</a></li>	

				

              
			<!-- <li class="nav-item"><a href="#" class="nav-link my-1">
					<i class="fas fa-search"></i>
				</a></li>
				
				<li class="nav-item">
					<a href="checkout.php" class="nav-link" id="count">
					<span class="p1 fa-stack has-badge" id="item_count" data-count="0">
						<i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse"></i> 
					</span>
					
				</a>
			</li> -->
			</ul>
			
		</div>
	</div>

</nav>