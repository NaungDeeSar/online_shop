<?php 

session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

  include 'include/header.php';

  $sql="SELECT * FROM items";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $items=$stmt->fetchAll();


  $sql="SELECT * FROM categories";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $cats=$stmt->fetchAll();



  $sql="SELECT * FROM subcategories";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $subcats=$stmt->fetchAll();


  $sql="SELECT * FROM brands";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $brand=$stmt->fetchAll();


  $sql="SELECT * FROM orders";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $orders=$stmt->fetchAll();


  $sql="SELECT * FROM users";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $users=$stmt->fetchAll();



  $sql="SELECT * FROM orders where status=1";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $confirm_orders=$stmt->fetchAll();
 


?>

          

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      Total Items</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php echo count($items); ?></div>
                    </div>

                    <div class="col-auto">
                   <i class="fab fa-buffer fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Category</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                       <?php echo count($cats); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fab fa-microsoft fa-2x"></i>
                      <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>          

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                      subcategory</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                       <?php echo count($subcats); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-random fa-2x "></i><!-- 
                      <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger  shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Brands</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                       <?php echo count($brand); ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fab fa-pushed fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Users </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <?php echo count($users); ?>
                      </div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-user fa-2x"></i>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                      Order</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                             <?php echo count($orders); ?>
                          %</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="<?php echo count($orders)?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-sort-amount-up-alt fa-2x"></i>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                      Confirm Order</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <?php echo count($confirm_orders); ?>
                      </div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-check-square fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
          </div>

          <!-- Content Row -->

          <div class="row">

           

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                   
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Items
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Users
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Orders
                    </span>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-lg-8 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">

                  <h4 class="small font-weight-bold">Items<span class="float-right">
                   <?php echo count($items); ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>                </div>

                     <h4 class="small font-weight-bold">Category<span class="float-right">
                     <?php echo count($cats); ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>            




                  <h4 class="small font-weight-bold">Sub Category <span class="float-right">
                    <?php echo count($subcats); ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width:80%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Brands <span class="float-right">
                    <?php echo count($brand); ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Users <span class="float-right">
                    <?php echo count($users); ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <h4 class="small font-weight-bold">Orders <span class="float-right">
                    <?php echo count($orders); ?>%</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>


                 
                </div>

              </div>

              
             
            </div>
          </div>

         

           
        

<?php  
  include 'include/footer.php';

}else{
  header("location:../index.php");
}
?>