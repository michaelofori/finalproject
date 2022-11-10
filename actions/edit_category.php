<?php
 include("../controllers/product_controller.php");
 if(isset($_POST['edit'])){
    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name']; 
    update_category_ctr($cat_id,$cat_name);
 };
 header('Location:../admin/viewcategory.php');
?>