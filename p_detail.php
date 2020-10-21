<?php 
include "include/header.php";
include "admin/db_connect.php";
$id=$_GET['id'];

$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name ,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id 
WHERE items.id=:item_id ";
$stmt=$pdo->prepare($sql);
$stmt->bindParam('item_id',$id);
$stmt->execute();
$items=$stmt->fetch(PDO::FETCH_ASSOC);

?>

	

<!-- Page Content -->
<div class="container" style="margin-top: -90px">

  
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row py-3 my-3">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                        	<i class="fa fa-home"></i> Home</a>
                       &nbsp;<i class="fas fa-chevron-right"></i> <a href="#">&nbsp;<?=$items['c_name'] ?></a> 
                        <span class="text-muted"> &nbsp; <i class="fas fa-chevron-right"></i> &nbsp;<?=$items['name'] ?></span>
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
                    <img src="admin/<?php echo $items['photo'] ?>" class="img-fluid">
            
            	</div>
               
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3><?=$items['name'] ?></h3>
                       
                        <div class="product__details__price">
                            <?php if($items['discount']){
                                echo $items['discount']."Ks";
                             ?>                           
                             <span><?=$items['price'] ?>MMK</span>
                         <?php }else{
                            echo $items['discount']."Ks";
                         } ?>
                         </div>
                       
                       <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" name="" id="qty" class="form-control w-50">
                            </div>
                            
                            <button 
                             class="btn btn-danger   addtocart" data-id="<?= $items['id'] ?>" data-name="<?= $items['name'] ?>" data-price="<?= $items['price'] ?>" data-discount="<?= $items['discount'] ?>"


                            >Add To Cart</button>
                       
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
                                <p><?=$items['description'] ?></p>
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

<?php 
$id=$_GET['id'];
$sql="SELECT * FROM subcategories INNER  JOIN categories ON categories.id=subcategories.category_id  WHERE categories.id=:c_id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':c_id',$id);
$stmt->execute();
$subcategories=$stmt->fetchAll();

 ?>


<?php
                foreach ($subcategories as $subcategory) {
                    $sub_id=$subcategory['id'];

                    $sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id WHERE items.subcategory_id=:sub_id";
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindParam(':sub_id',$sub_id);
                    $stmt->execute();
                    $items=$stmt->fetchAll();

                    foreach ($items as $item) {     
                ?>
        
        <div class="col-6 col-md-6 col-lg-3 py-2">
            <div class="card">
                <div class="card_img">
                    <a href="p_detail.php?id=<?php echo $item['id'] ?>">
                        <img src="admin/<?php echo $item['photo'] ?>" class="image card-img-top border" alt="...">
                    </a>
                    
                </div>

                <div class="card-body">
                    <h5 class="my-1 text-muted"><?php echo $item['name'] ?></h5>
                    <!-- <h5 class="my-1 text-muted"><?php echo $item['c_name'] ?></h5>  -->
                    
                    <p class="my-2  font-weight-bold" style="color:#29927D">
                            <?php if($item['discount']){
                                echo $item['discount']."Ks";

                                ?>
                                <del class="text-danger"><?php echo $item['price']."Ks"; ?></del>

                                
                                <?php
                            }else{
                                echo $item['price']."Ks";
                            } ?>
                    </p>
                    
                    <div class="row text-center">
                            <div class="col-6 col-md-6 ">                               
                                <a href="" class="text-decoration-none text-dark view_detail" data-target="#detailModal" data-toggle="modal" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>" data-brand="<?= $item['brand_name'] ?>" data-subcategory="<?= $item['sub_name'] ?>" data-description="<?= $item['description'] ?>" data-photo="<?= $item['photo'] ?>">
                                
                                    <i class="fas fa-eye fa-lg  py-3 "></i>
                                </a>
                            </div>
                            <div class="col-6 col-md-6">                        

                                <a href="javascript:void(0)" class="text-decoration-none text-dark  addtocart" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>">
                                    <i class="fas fa-cart-plus fa-lg py-3 text-info"></i>
                                
                                    
                                </a>

                            </div>
                        </div>


                </div>

                        

                    
            </div>
        </div>
    <?php }
} ?>
 
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<br>
<br>
<?php 
include "include/footer.php";

 ?>