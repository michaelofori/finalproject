<?php
include("../controllers/product_controller.php");
    if(isset($_POST['product'])){
        $allowTypes = array('jpg','png','jpeg','gif'); 
        $product_cat = $_POST['product_cat'];
        $product_brand = $_POST['product_brand'];
        $product_title = $_POST['product_title'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_keywords = $_POST['product_keywords'];

        $output_dir = "../images/product/";/* Path for file upload */
        $RandomNum   = time();
        $ImageName      = str_replace(' ','-',strtolower($_FILES['product_image']['name'][0]));
        $ImageType      = $_FILES['product_image']['type'][0];
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt=str_replace('.','',$ImageExt);
        $ImageName=preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        $ret[$NewImageName]= $output_dir.$NewImageName;


        move_uploaded_file($_FILES["product_image"]["tmp_name"][0],$output_dir."/".$NewImageName );
        if(add_product_ctr($product_cat,$product_brand,$product_title,$product_price,$product_desc,$NewImageName,$product_keywords)==TRUE){
            echo "<script>alert('Product Addded successfully')</script>";
            header ('Location:../admin/viewproduct.php');
        }
        else{
            echo "<script>alert('Product not submitted')</script>";
            header('Location:../admin/addproduct.php');
            
        }

        }
        else{
        header('Location:../admin/addproduct.php');
    }
?>