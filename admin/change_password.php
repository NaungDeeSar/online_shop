


<script src="js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {

include 'include/header.php';

$msg="";
if(isset($_POST['change_pwd'])){
    $id=$_SESSION['loginuser']['id'];
    $pwd1=$_POST['password1'];
    $pwd2=$_POST['password2'];
if($pwd1 !=$pwd2){
    $msg= "Password not match";
}elseif($pwd1==null || $pwd2==null){
    $msg="Plz Enter new password";
}else{
    $sql="UPDATE users SET password =$pwd1 WHERE id=:id";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}

}





?>
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Change Password</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center">
Use the form below to change your password. Your password cannot be the same as your username.</p>
<form method="POST">
<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
<br>
<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
<alert class="text-danger"><?php echo $msg; ?></alert>
<br>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password" name="change_pwd">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>
   


<?php include 'include/footer.php';
}else{
  header("location:../front_end/index.php");
}


 ?>