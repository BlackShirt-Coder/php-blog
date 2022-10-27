<?php include_once "view/top.php" ?>
<?php include_once "view/nav.php" ?>
<?php include_once "view/loginForm.php"   ?>
<?php include_once "CheckGen/member.php"   ?>

<?php
if(isset($_POST['login'])){
   $email= $_POST['email'];
   $password=$_POST['password'];
   if( emailCheck($email) == 1 && passCheck($password) == 1 && passwordCheck($password)== 1){
        loginUser($email);

       if ($_SESSION['user'] === "admin1") {
           header("Location:admin.php");
       } else {
           header("Location:index.php");
       }
   }
   else{
       echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
 User Name or Password Wrong!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>';
   }
}



?>














<?php include_once "view/footer.php"?>
<?php include_once "view/bottom.php" ?>


