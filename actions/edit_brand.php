<?php
 include("../controllers/edit_brand.php");
 if(isset($_POST['edit'])){
    $brand_id = $_POST['brand_id'];
    $brand_name = $_POST['brand_name']; 
    update_brand_ctr($brand_id,$brand_name);
 };
 header('Location:../admin/grids.php');
?>