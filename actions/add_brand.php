<?php
include("../controllers/product_controller.php");
    if(isset($_POST['brand'])){
        $brand_name = $_POST['brand_name'];
        
        addBrandctr($brand_name);

       header ('Location:../admin/grids.php');

    }
?>