<?php
 include("../controllers/product_controller.php");
 
 if(isset($_POST['delete'])){
    $product_id = $_POST['product_id'];
    $img=$_POST['product_image'];

    if(unlink("../images/product/".$img)){
      if(delProduct_ctr($product_id)==TRUE){
         header('Location:../admin/viewproduct.php');
         }
   else{
      echo "Unable to delete image";
      }
   }
   else if(!unlink("../images/product/".$img)){
      if(delProduct_ctr($product_id)==TRUE){
         header('Location:../admin/viewproduct.php');
         }
       }
   }
   else{
      header('Location:../admin/viewproduct.php');
   }
?>