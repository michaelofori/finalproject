<?php
 include("../controllers/product_controller.php");

 if(isset($_POST['edit'])){
    $product_id = $_POST['product_id'];
    $product_title = $_POST['product_title']; 
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

   if(update_product_ctr($product_id,$product_title,$product_price,$product_desc,$product_keywords)==TRUE){
    header('Location:../admin/viewproduct.php');
   }else{
    echo "Unable to edit";
   }
    
  
 } else if(isset($_POST['edit_image'])){
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $product_id = $_POST['product_id'];
    $img=$_POST['product_image'];

    $output_dir = "../images/product/";/* Path for file upload */
    $RandomNum  = time();
    $ImageName  = str_replace(' ','-',strtolower($_FILES['product_image']['name'][0]));
    $ImageType = $_FILES['product_image']['type'][0];
    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt = str_replace('.','',$ImageExt);
    $ImageName=preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
    
    if(empty($ImageName)!=TRUE){
        
        unlink("../images/product/".$img);
        move_uploaded_file($_FILES["product_image"]["tmp_name"][0],$output_dir."/".$NewImageName );
        if(update_image_ctr($product_id,$NewImageName)==TRUE){
            header('Location:../admin/viewproduct.php');
        }else{
            echo "unable to edit image";
        }
    }
 }
?>