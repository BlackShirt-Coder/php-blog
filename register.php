

<?php include_once "view/top.php" ?>
<?php include_once "view/nav.php" ?>
<?php include_once "CheckGen/member.php"?>
<?php
if (isset($_POST['register'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    checkFactory($username,$email,$password);

    if ($_SESSION['user'] === "admin1") {
        header("Location:admin.php");
    } else {
        header("Location:index.php");
    }

}
?>

    <div class="container-fluid">
        <h2 class="text-center text-info mt-5">Register To Be Member</h2>
        <div class="row mt-5">
            <div class="col-8 offset-2 my-3">
                <div class="shadow-sm card p-5" style="height:350px;">
                    <form action="register.php" method="post" autocomplete="off">
                        <div class="row mt-5">
                            <div class="col-2">
                                <label for="user">User Name</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="username" id="user" class="form-control mb-4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="email" id="email" class="form-control mb-4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password" id="password" class="form-control mb-4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8" style="display:flex;justify-content: end;">
                                <input type="submit" value="Register" name="register" class=" text-white btn btn-info ">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once "view/footer.php" ?>
<?php include_once "view/bottom.php" ?>