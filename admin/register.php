<?php 
session_start();
if (!isset($_SESSION['loginuser'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="signup.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                  <input type="file"  name="image">
                    <?php 
                  if (isset($_SESSION['img_error_msg'])) {
                    ?>
                    <small class="text-danger"><?php echo $_SESSION['img_error_msg']; ?></small>
                    <?php 
                  } 
                  unset($_SESSION['img_error_msg']);


                  ?>
                </div> 
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="name" placeholder="Enter your name" value="<?php if(isset($_SESSION['old_name'])) echo $_SESSION['old_name']?>">
                  <?php 
                  if (isset($_SESSION['name_error_msg'])) {
                    ?>
                    <small class="text-danger"><?php echo $_SESSION['name_error_msg']; ?></small>
                    <?php 
                  } 
                  unset($_SESSION['name_error_msg']);
                   unset($_SESSION['old_name']);
                  ?>

                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" name="phone" placeholder="Enter your phone" value="<?php if(isset($_SESSION['old_phone'])) echo $_SESSION['old_phone']?>">
                    <?php 
                     if(isset($_SESSION['phone_error_msg'])){?>
                      <small class="text-danger"><?php echo $_SESSION['phone_error_msg']; ?></small>


                     <?php }
                     unset($_SESSION['phone_error_msg']);
                           unset($_SESSION['old_phone']);
                      ?>
                </div>
                
                 <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Enter your email" value="<?php if(isset($_SESSION['old_email'])) echo $_SESSION['old_email']?>">
                    <?php 
                  if (isset($_SESSION['email_error_msg'])) {
                    ?>
                    <small class="text-danger"><?php echo $_SESSION['email_error_msg']; ?></small>
                    <?php 
                  } 
                  unset($_SESSION['email_error_msg']);
                        unset($_SESSION['old_email']);


                  ?>
                </div>
                 <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="pwd" placeholder="Enter your password" value="<?php if(isset($_SESSION['old_pwd'])) echo $_SESSION['old_pwd']?>">
                    <?php 
                  if (isset($_SESSION['pwd_error_msg'])) {
                    ?>
                    <small class="text-danger"><?php echo $_SESSION['pwd_error_msg']; ?></small>
                    <?php 
                  } 
                  unset($_SESSION['pwd_error_msg']);
                        unset($_SESSION['old_pwd']);


                  ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="user_pwd" placeholder="Enter Confirm password" value="<?php if(isset($_SESSION['old_cpwd'])) echo $_SESSION['old_cpwd']?>">
                    <?php 
                  if (isset($_SESSION['cpwd_error_msg'])) {
                    ?>
                    <small class="text-danger"><?php echo $_SESSION['cpwd_error_msg']; ?></small>
                    <?php 
                  } 
                  unset($_SESSION['cpwd_error_msg']);
                        unset($_SESSION['old_cpwd']);


                  ?>
                </div>
               
                     <div class="form-group">
                  <textarea class="form-control" placeholder="Address" name="address"><?php if(isset($_SESSION['old_address'])) echo $_SESSION['old_address']?></textarea>
                  <?php 
                    if (isset($_SESSION['address_error_msg'])) {
                  ?>
                  <small class="text-danger"><?php echo $_SESSION['address_error_msg']; ?></small>
                <?php 
                  }
                  unset($_SESSION['address_error_msg']);
                  unset($_SESSION['old_address']);


                 ?>
                </div>
                              
                <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php 
}else{
    header("location:index.php");
}

 ?>