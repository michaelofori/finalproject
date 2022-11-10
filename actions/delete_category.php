<?php
 include("../controllers/product_controller.php");
 if(isset($_POST['delete'])){
    $cat_id = $_POST['cat_id'];

    delCategory_ctr($cat_id);

 header('Location:../admin/viewcategory.php');
 }

?>