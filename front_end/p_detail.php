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
			<img src="img/log.png" class="img-fluid" style="width: 20%">			
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
						<li><a href="#">Page 1-1</a></li>
						<li><a href="#">Page 1-2</a></li>
						<li><a href="#">Page 1-3</a></li>
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


	

<!-- Page Content -->
<div class="container">

  
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option py-1">
        <div class="container">
            <div class="row py-3 my-3">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html">
                        	<i class="fa fa-home"></i> Home</a>
                       &nbsp;<i class="fas fa-chevron-right"></i> <a href="#">&nbsp;Electronics </a> 
                        <span class="text-muted"> &nbsp; <i class="fas fa-chevron-right"></i> &nbsp;Digital Camera Canon</span>
                    </div>
  
                </div>

            </div>

        </div>
    </div>

    <!-- Breadcrumb End -->
     <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
            	<div class="col-lg-6">
            		 <div class="text-center" style="border: 1px solid red; height: 250px">
                    <img src="images/products/1.jpg" class="img-fluid img1 ">
                    <img src="images/products/2.jpg" class="img-fluid img1">
                    <img src="images/products/3.jpg" class="img-fluid img1">
                    <img src="images/products/4.jpg" class="img-fluid img1">
                         
                     </div>
            	
            			
            	
            		
    
  <div class="text-center detail_img my-3">
  	 <img class="demo" onclick="currentDiv(1)" src="images/products/1.jpg" class="img-fluid">
  <img class="demo" onclick="currentDiv(2)" src="images/products/2.jpg" class="img-fluid" >
  <img class="demo" onclick="currentDiv(3)" src="images/products/3.jpg" class="img-fluid">
  <img class="demo" onclick="currentDiv(4)" src="images/products/4.jpg" class="img-fluid">
  	
  </div>
 
  <script>
                var Index=1;
                showIndex(Index);
                    function plusDivs(n){
                        showIndex(Index +=n);
                    }
                    function currentDiv(n){
                        showIndex(Index=n);
                    }
                    function showIndex(n){
                        var i;
                        var x=document.getElementsByClassName("img1");
                        var dots=document.getElementsByClassName("demo");
                    if(n>x.length){
                        Index=1;
                    }
                        if(n<1){
                            Index=x.length;
                        }
                       for(i=0; i<x.length;i++){
                           x[i].style.display="none";
                       }
                        for(i=0;i<dots.length;i++){
                            dots[i].className=dots[i].className.replace("");
                        }
                        x[Index-1].style.display="block";
                        dots[Index-1].className="";
                        
                        
                        
                        }
                </script>
            	</div>
               
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>Digital Camera Canon</h3>
                       
                        <div class="product__details__price">700000 MMK <span> 800000 MMK</span></div>
                        <p class="text-muted">Nemo enim ipsam voluptatem quia aspernatur aut odit aut loret fugit, sed quia consequuntur
                        magni lores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="product__details__button">
                            <div class="quantity">
                                <span class="my-1">QTY</span>
                                
                                    <select class="form-control">
                                    	<option>1</option>
                                    	<option>2</option>
                                    	<option>3</option>
                                    </select>
                               </div>

                            <a href="#" class="btn cart-btn my-4"><span class="icon_bag_alt"></span> Add to cart</a>
                            
                        </div>
                       
                    </div>


                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav1 nav-tabs" role="tablist">
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1 active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                            </li>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h4>Description</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <h4>Specification</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <h4>Reviews ( 2 )</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- Product Details Section End -->

  

  <!-- Related Projects Row -->
  <h3 class="">Related Products</h3>
                   <div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" style="width:17%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">  	
  </div>
</div>

  <div class="row my-4">

    <div class="col-md-3 col-sm-6 mb-4">
     <div class="card">
                <div class="card_img">
                    <img src="images/products/3.jpg" class="image card-img-top border" alt="...">
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
                    <h5 class="my-1 text-muted">GS Camera</h5>
                    
                    <p class="my-2 text-dark font-weight-bold">900000 MMk </p> 
                    <button class="btn btn-outline-info btn-block">Add to Card</button>

                </div>
            </div>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
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
                    <h5 class="my-1 text-muted"> Camera</h5>
                    
                    <p class="my-2 text-dark font-weight-bold">500000 MMk </p> 
                    <button class="btn btn-outline-info btn-block">Add to Card</button>

                </div>
            </div>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
    	<div class="card">
                <div class="card_img">
                    <img src="images/products/4.jpg" class="image card-img-top border" alt="...">
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
                    
                    <p class="my-2 text-dark font-weight-bold">600000 MMk</p> 
                    <button class="btn btn-outline-info btn-block">Add to Card</button>

                </div>
            </div>
    </div>
    <div class="col-md-3 col-sm-6 mb-4">
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
                    
                    <p class="my-2 text-dark font-weight-bold">400000 MMk </p> 
                    <button class="btn btn-outline-info btn-block">Add to Card</button>

                </div>
            </div>
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->


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