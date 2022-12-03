<?php
include("../controllers/product_controller.php");
    if(isset($_POST['category'])){
        $cat_name = $_POST['cat_name'];
    
        add_category_ctr($cat_name);

       header ('Location:../admin/viewcategory.php');
    }
?>