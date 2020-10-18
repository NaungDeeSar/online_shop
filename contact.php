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
                      <i class="fas fa-chevron-right"></i> <span class="text-muted">Contact</span>
                       
                    </div>
  
                </div>

            </div>

        </div>
    </div>
    <div class="row">
    	<div class="col-md-5">
    		<h4 class="text-muted py-3">Contact Us</h4>
    		<i class="fas fa-home my-2" style="font-size: 20px">  Address</i>
    		<p>U Yae Khel Street, Yangon, Yangon</p>
    		<hr>

    		<i class="fas fa-phone my-2" style="font-size: 20px">  Phone</i>
    		<p>+5925999999</p>
    		<hr>
    		<i class="far fa-envelope-open my-2" style="font-size: 20px">  Email</i>
    		<p>onlineshop2020@gmail.com</p>
    		
    	</div>
    	<div class="col-md-7">
    		<h4 class="text-muted py-3">Tell Us Your Message</h4>
    		<form>
    			<div class="form-group">
    				<label>Your Name:</label>
    				<input type="text" name="" class="form-control">
    			</div>
    			<div class="form-group">
    				<label>Your Email:</label>
    				<input type="email" name="" class="form-control">
    			</div>
    			<div class="form-group">
    				<label>Your Subject:</label>
    				<input type="text" name="" class="form-control">
    			</div>
    			<div class="form-group">
    				<label>Your Name:</label>
    				<textarea class="form-control">
    					
    				</textarea>
    			</div>
    			<input type="submint" value="Send Message" class="btn btn-primary">
    		</form>
    	</div>
    </div>
		
	</div>







<?php 
include "include/footer.php";

 ?>