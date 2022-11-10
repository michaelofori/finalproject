<?php
 include("../controllers/product_controller.php");
 if(isset($_POST['delete'])){
    $brand_id = $_POST['brand_id'];

 delBrand_ctr($brand_id);

 header('Location:../admin/grids.php');
 }

?>