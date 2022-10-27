<?php include_once "CheckGen/session.php" ?>
<?php include_once "view/top.php" ?>
<?php include_once "view/nav.php" ?>
<?php include_once "view/header.php" ?>
<?php include_once "CheckGen/postGenerator.php" ?>
<?php
if (isset($_SESSION['user'])) {
    if (!($_SESSION['user'] =='admin1')) {
        header("Location:index.php");
    }

}
else{
    header("Location:index.php");
}
?>
<div class="container">
    <div class="row mt-3">
        <?php include_once "sidebar.php" ?>
    </div>
    <div class="p-0 col-9 posts">

        <?php
        showAllPosts();
        ?>

    </div>
</div>

<?php
function showAllPosts()
{
    $query = "SELECT * FROM post";
    $result = mysqli_query(dbConnect(), $query);
    foreach ($result as $data) {
        $pid = $data["id"];
        echo "
            <div class='card' style='width:100%;margin-bottom:10px;'>
                <div class='card-body'>
                    <h3 class='card-title'>" . $data['title'] . "</h3>
                    <p class='card-text'>" . substr($data['content'], 0, 100) . "
                       </p>
                    <div class='float-end'>
                        <a href='editPost.php?id=$pid' class='btn btn-info '>Edit</a>
                    </div>
                </div>
            </div>
";

    }

}

?>


