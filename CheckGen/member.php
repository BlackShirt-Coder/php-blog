<?php include_once "CheckGen/session.php"?>
<?php include_once "dbHacker.php"?>
<?php
function checkFactory($username,$email,$password){

   if(userCheck($username)==1 && emailCheck($email)==1 && passCheck($password)==1){
       insertCheck($username,$email,$password);
       setSession('user',$username);
       setSession('email',$email);
   }
   else{
       echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
  Authentication Failed.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>';
   }
}
function userCheck($user){
    if(strlen($user)>=6){
        $bol=preg_match('/^[^0-9][A-Za-z0-9\s*_*]+$/',$user);
      return  $bol? 1:0;
    }
    else{
       echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">User Name must be 6 characters
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}


function emailCheck($email){
  if(strlen($email)>11){
     $bol=preg_match('/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{3}$/',$email);
     return $bol? 1:0;
  }
  else{

      echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
  Email must be over 11 characters
  </div>
</div>';
  }
}
function passCheck($pass){
    if(strlen($pass)>=6){
       $bol= preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*(_|[^\w]))/',$pass);
       return $bol? 1:0;

    }
    else{
        echo "password must be at least 6 characters";
    }
}
function loginUser($email){
    $query="SELECT name from members where email='$email'";
    $result=mysqli_query(dbConnect(),$query);
    if(mysqli_num_rows($result)>0){
        foreach($result as $user){
             $name=$user['name'];
             setSession('user',$name);
             header("Location:index.php");
        }
    }
    else{
        echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
 User Does Not Exist!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>';
    }
}
function passwordCheck($pass){
   $pass= encodePass($pass);
   $query="SELECT password from members where password='$pass'";
   $result= mysqli_query(dbConnect(),$query) ;
   if(mysqli_num_rows($result) > 0){
       return 1;
   }
   else{
       echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
 Authentication Failed!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>';
   }
}
?>




