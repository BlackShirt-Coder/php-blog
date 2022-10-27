<?php include_once "CheckGen/session.php"?>
<?php include_once "CheckGen/postGenerator.php"?>
<div class="container">
    <div class="row mt-3">
           <?php include_once "sidebar.php"?>
        </div>
        <div class="p-0 col-9 posts">
        <?php
        if(!isset($_SESSION['user'])){
          showAllPost(1);
        }
        else{
         showAllPost(2);
        }
        ?>
        </div>
    </div>
</div>