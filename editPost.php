<?php include_once "CheckGen/session.php" ?>

<?php include_once "view/top.php" ?>
<?php include_once "view/nav.php" ?>
<?php include_once "view/header.php" ?>
<?php include_once "CheckGen/postGenerator.php" ?>
<div class="container">
    <div class="row mt-3">
        <?php include_once "sidebar.php"  ?>
    </div>
<?php
$id = $_GET['id'];
show($id);


function show($id)
{
    $query = "SELECT * FROM post WHERE id=$id";
    $result = mysqli_query(dbConnect(), $query);
    foreach ($result as $data) {
        $title = $data['title'];
        $type = $data['type'];
        $writer = $data['writer'];
        $img = $data['img_link'];
        $content = $data['content'];
        echo "
        
    <div class='p-0 col-9 posts justify-content-end border border-1 rounded p-5'>
        <form action='' class='w-100' method='post' enctype='multipart/form-data'>
            <h2 class='text text-info'>Welcome Admin</h2>
            <div class='form-group' style='width:100%'>
                <label for='postTitle' class='text py-2'>Post Title</label>
                <input type='text' class='form-control' id='postTitle' name='title' autocomplete='off' required
                       value='$title'>
            </div>
            <div class='form-group' style='width:100%'>
                <label for='postType' class='text py-2'>Post Type</label>
                <select name='postType' id=postType' class='form-control'>
                    <option value='1'>Free Posts</option>
                    <option value='2'>Paid Posts</option>
                </select>
            </div>
            <div class='form-group' style='width:100%'>
                <label for='postWriter' class='text py-2'>Post Writer</label>
                <input type='text' class='form-control' id='postWriter' name='writer' required value='$writer'>
            </div>
            <div class='form-group' style='width:100%'>
                <label for='picture' class='text py-2'>Post Writer</label>
                <input type='file' class='form-control' id='picture' name='pic'  value=''>
            </div>
            <div class='form-group' style='width:100%'>
                <label for='contents' class='text py-2'>Contents</label>
                <textarea name='contents' id='contents' cols='30' rows='10' class='form-control' required >$content</textarea>
            </div>
            
            <img src='assets/upload/$img' style='width:300px;' class='mt-5 rounded'>
            <div class='form-group mt-3' style='width:100%;display:flex;justify-content:end;'>
                <input type='submit' value='Update' class='btn btn-primary mx-1' name='update'>
                <input type='submit' value='Cancel' class='btn btn-outline-primary mx-1' name='cancel'>
                  <input type='hidden' name='old' value='assets/upload/$img'>
            </div>
           
        </form>
    </div>
</div>
</div>";


    }
}

?>
    <?php
    function updateQuery($id, $pic)
    {
        $title = $_POST['title'];
        $type = $_POST['postType'];
        $writer = $_POST['writer'];
        $content = $_POST['contents'];
        $pic = $pic;
        $query = "UPDATE post set title='$title',type=$type,writer='$writer',content='$content',img_link='$pic' WHERE id=$id;";
        $bol = mysqli_query(dbConnect(), $query);
        if($bol){
            echo "<script>alert('Update Successful');</script>";
        }
        else{
            echo "<script>alert('Failed To Update Data');</script>";

        }
    }

    if (isset($_POST['update'])) {
        if ($_FILES['pic']['name'] == NULL) {

            $old_photo = $_POST['old'];
            $old_photo = substr($old_photo, 14, 100);
            $id = $_GET['id'];
            updateQuery($id,$old_photo);

        } else {

            $new_tmp = $_FILES['pic']['tmp_name'];
            $new_pic = $_FILES['pic']['name'];
            $new_pic = mt_rand(time(), time() * time()) . $new_pic;
            move_uploaded_file($new_tmp,"assets/upload/$new_pic");
            $id = $_GET['id'];
            updateQuery($id, $new_pic);
        }

    }
    ?>

<?php include_once "view/footer.php" ?>
<?php include_once "view/bottom.php" ?>

