<?php
 include("../controllers/edit_product.php");

 if(isset($_POST['edit'])){
    $product_id = $_POST['product_id'];
    $product_title = $_POST['product_title']; 
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
   //  $product_image = $_POST['product_image'];
    $product_keywords = $_POST['product_keywords'];

    $image = $_FILES['product_image']["name"];
    $tmp = $_FILES['product_image']["tmp_name"];
    function upload_file($directory,$subdir,$tempname,$image){
        //check if the directory exists 
        //Then upload the file into the directory
        $folder = "../$directory/$subdir/".$image;
        if (!file_exists("../$directory/$subdir/")){
            @mkdir("../$directory/$subdir/",0777);
           
            echo("Folder created");
            move_uploaded_file($tempname,$folder);
            return $folder;
        }
        else{
            move_uploaded_file($tempname,$folder); 
            return $folder;
        }
        return false;
       
    }

    $product_image=upload_file("Images","product",$tmp,$image);


    if(
      update_product_ctr($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_keywords,$product_image) == true
      ){
         header('Location:../admin/viewproduct.php');
 
      } else{

      echo "cannot insert";

      }

 };
//  header('Location:../admin/viewproduct.php');
 
?>