<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blog');
function dbConnect()
{
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno() > 0) {
        echo "connection error";
    } else {
        return $db;
    }
}

function insertCheck($username, $email, $password)
{
    $query = "select * from members where email='$email';";
    $db = mysqli_query(dbConnect(), $query);
    if (mysqli_num_rows($db) > 0) {
        echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   Email is already exist!!
  </div>
</div>';
    } else {
        $time = getTimeNow();
        dataInsert($username, $email, $password, $time);
    }

}

function encodePass($pass)
{
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);
    return $pass;
}

function getTimeNow()
{
    return date('Y:m:d H:m:s', time());
}


function dataInsert($username, $email, $password, $time)
{
    $password = encodePass($password);
    $query = "insert into members values(0,'$username','$email','$password','$time','$time');";
    $res = mysqli_query(dbConnect(), $query);
    echo $res ? 1 : 0;
    if ($res == 1) {
        echo '<div style="height:80px!important;" class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
Register Successful!
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>';
        header("Location:index.php");
    } else {
        echo '<div style="height:80px;!important;" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
Failed to register</div>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>';
    }

}

;


