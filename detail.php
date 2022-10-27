
<?php include_once "CheckGen/session.php" ?>
<?php include_once "view/top.php" ?>
<?php include_once "view/nav.php" ?>
<?php include_once "view/header.php" ?>
<?php include_once "CheckGen/postGenerator.php" ?>

<?php
$id= $_GET['id'];
showSinglePost($id);
?>

<?php include_once "view/footer.php" ?>
<?php include_once "view/bottom.php" ?>


