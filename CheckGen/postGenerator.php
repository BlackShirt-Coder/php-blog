<?php include_once "CheckGen/dbHacker.php" ?>
<?php
if (isset($_POST['post'])) {
    $title = $_POST['title'];
    $postType = $_POST['postType'];
    $writer = $_POST['writer'];
    $contents = $_POST['contents'];
    function imgGenerator($img)
    {
        $img_tmp = $img['tmp_name'];
        $img_name = $img['name'];
        $img = mt_rand(time(), time() * time()) . $img_name;
        return $img;
    }


    function insertPost($title, $postType, $writer, $contents)
    {
        $db = dbConnect();
        $time = getTimeNow();
        $file = $_FILES["pic"];
        $img_link = imgGenerator($file);
        move_uploaded_file($file['tmp_name'], "./assets/upload/$img_link");
        $query = "INSERT INTO post values(0,'$title','$postType','$writer','$contents','$img_link','$time');";
        $result = mysqli_query($db, $query);
        if ($result) {
            echo '<div style="height:50px!important;" class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
 Posted Successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>';
        } else {
            echo '<div style="height:50px!important;" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
 Failed To Post!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>';
        }
    }

    insertPost($title, $postType, $writer, $contents);


}

function showAllPost($type)
{
    if ($type == 1) {
        $query = "SELECT * FROM post where type=1";
        $result = mysqli_query(dbConnect(), $query);
        foreach ($result as $data) {
            $pid = $data["id"];
            echo "
            <div class='card' style='width: 26rem;margin-bottom:10px;'>
                <div class='card-body'>
                    <h3 class='card-title'>" . $data['title'] . "</h3>
                    <p class='card-text'>" . substr($data['content'], 0, 100) . "
                       </p>
                    <div class='float-end'>
                        <a href='detail.php?id=$pid' class='btn btn-info '>Details</a>
                    </div>
                </div>
            </div>
";

        }

    } else {
        $query = "SELECT * FROM post";
        $result = mysqli_query(dbConnect(), $query);
        foreach ($result as $data) {
            $pid = $data["id"];

            echo "
            <div class='card' style='width: 26rem;margin-bottom:10px;'>
                <div class='card-body'>
                    <h3 class='card-title'>" . $data['title'] . "</h3>
                    <p class='card-text'>" . substr($data['content'], 0, 100) . "
                       </p>
                    <div class='float-end'>
                        <a href='detail.php?id=$pid' class='btn btn-info '>Details</a>
                    </div>
                </div>
            </div>
";
        }
    }

}

function showSinglePost($id)
{
    $query = "SELECT * FROM post WHERE id=$id";
    $result = mysqli_query(dbConnect(), $query);
    foreach ($result as $data) {
        $pic = "./assets/upload/" . $data['img_link'];
        echo "
            <div class='card m-auto my-5 shadow-sm' style='width:85%;margin-bottom:10px;'>
                <div class='card-body'>
                    <div style='display:flex;justify-content: space-between;align-items: center'>
                     <h3 class='card-title'>" . $data['title'] . "</h3>
                    <h6 class='card-title'>" . $data['created_at'] . "</h6>
                     </div>  
                      <div style='display:flex;justify-content: space-between;align-items: center'>
                     <div class='picture my-3'><img src='$pic' class='rounded' style='width:400px;'></div>
                    <p class='card-text mx-3' style='text-align: justify;'>" . $data['content'] . "
                       </p>
                       </div>
                   <div style='display:flex;justify-content: space-between;align-items: center'>
                     <p class='text'>Author</p>   
                     <p class='text fw-bold text-uppercase'><i>" . $data['writer'] . "</i></p>
                     </div>
                 
                </div>
            </div>
";
    }
}

?>