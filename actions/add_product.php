//this processes the add products just like login/register.
// calls the product controller class
// Source : https://www.codexworld.com/store-retrieve-image-from-database-mysql-php/

<?php

include("../controllers/product_controller.php");
    if(isset($_POST['product'])){
        $product_cat = $_POST['product_cat'];
        $product_brand = $_POST['product_brand'];
        $product_title = $_POST['product_title'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_keywords = $_POST['product_keywords'];



        // $status = 'error'; 
        // if(!empty($_FILES["product_image"]["name"])) { 
        //     // Get file info 
        //     $fileName = basename($_FILES["product_image"]["name"]); 
        //     $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
        //     // Allow certain file formats 
        //     $allowTypes = array('jpg','png','jpeg','gif'); 
        //     if(in_array($fileType, $allowTypes)){ 
        //         $image = $_FILES['product_image']['tmp_name']; 
        //         $imgContent = addslashes(file_get_contents($image)); 
             
        //         // Insert image content into database 
        //         // $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
        //         add_product_ctr($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);
                 
        //         if($insert){ 
        //             $status = 'success'; 
        //             $statusMsg = "File uploaded successfully."; 
        //         }else{ 
        //             $statusMsg = "File upload failed, please try again."; 
        //         }  
        //     }else{ 
        //         $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        //     } 
        // }else{ 
        //     $statusMsg = 'Please select an image file to upload.'; 
        // } 

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
   
        add_product_ctr($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);
 
       header ('Location:../admin/viewproduct.php');

    }

?>