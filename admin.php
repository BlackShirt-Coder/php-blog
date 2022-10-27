<?php include_once "CheckGen/session.php" ?>

<?php include_once "view/top.php" ?>
<?php include_once "view/nav.php" ?>
<?php include_once "view/header.php" ?>
<?php include_once "CheckGen/postGenerator.php" ?>
<?php
if(isset($_SESSION['user'])){
   if(!($_SESSION['user']=='admin1')){
       header("Location:index.php");
   }
}
else{
    header("Location:index.php");
}
?>
<div class="container">
    <div class="row mt-3">
        <?php include_once "sidebar.php"  ?>
    </div>
        <div class="p-0 col-9 posts justify-content-end border border-1 rounded p-5">
            <form action="" class="w-100" method="post" enctype="multipart/form-data">
                <h2 class="text text-info">Welcome Admin</h2>
                <div class="form-group" style="width:100%">
                    <label for="postTitle" class="text py-2">Post Title</label>
                    <input type="text" class="form-control" id="postTitle" name="title" autocomplete="off" required>
                </div>
                <div class="form-group" style="width:100%">
                    <label for="postType" class="text py-2">Post Type</label>
                    <select name="postType" id=postType" class="form-control">
                        <option value="1">Free Posts</option>
                        <option value="2">Paid Posts</option>
                    </select>
                </div>
                <div class="form-group" style="width:100%">
                    <label for="postWriter" class="text py-2">Post Writer</label>
                    <input type="text" class="form-control" id="postWriter" name="writer" required>
                </div>
                <div class="form-group" style="width:100%">
                    <label for="picture" class="text py-2">Post Writer</label>
                    <input type="file" class="form-control" id="picture" name="pic" required>
                </div>
                <div class="form-group" style="width:100%">
                    <label for="contents" class="text py-2">Contents</label>
                    <textarea name="contents" id="contents" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group mt-3" style="width:100%;display:flex;justify-content:end;">
                    <input type="submit" value="Post" class="btn btn-primary mx-1" name="post">
                    <input type="submit" value="Cancel" class="btn btn-outline-primary mx-1" name="cancel">

                </div>
            </form>
        </div>
    </div>
</div>


<?php include_once "view/footer.php" ?>
<?php include_once "view/bottom.php" ?>
