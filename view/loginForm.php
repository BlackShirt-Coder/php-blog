<h2 class="text-center text-info mt-5">Login To See Special Posts</h2>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-8 offset-2 my-3">
            <div class="shadow-sm card p-5" style="height:300px;">
                <form action="login.php" method="post" autocomplete="off">
                    <div class="row mt-5">
                        <div class="col-2">
                            <label for="email" class="text">Email</label>
                        </div>
                        <div class="col-8">
                            <input type="email" name="email" id="user" class="form-control mb-4" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="password" class="text">Password</label>
                        </div>
                        <div class="col-8">
                            <input type="password" name="password" id="password" class="form-control mb-4" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <input type="submit" value="Login" name="login" class="text-white btn btn-info">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>