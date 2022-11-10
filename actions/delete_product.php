<?php
 include("../controllers/product_controller.php");
 
 $oldimage=$_POST['image'];

 if(isset($_POST['delete'])){
    $product_id = $_POST['product_id'];

    delProduct_ctr($product_id);

    unlink($oldimage);

 header('Location:../admin/viewproduct.php');
 }

?>