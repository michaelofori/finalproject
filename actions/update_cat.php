<?php
include ("../controllers/product_controller.php");

//get the updated value and pass into t
if(isset($_POST['submit'])){
    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];   

    update_category_ctr($cat_id,$cat_name);
    header('Location: ../admin/viewcategory.php');
}