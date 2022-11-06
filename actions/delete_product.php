<?php
 include("../controllers/delete_product.php");
 if(isset($_POST['delete'])){
    $product_id = $_POST['product_id'];

    delProduct_ctr($product_id);

 header('Location:../admin/viewproduct.php');
 }

?>