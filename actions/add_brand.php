//this processes the add brand just like login/register.
// calls the product controller class

<?php

include("../controllers/product_controller.php");

//collecting from data
    if(isset($_POST['brand'])){
        $brand_name = $_POST['brand_name'];
       
  
        addBrandctr($brand_name);


       header ('Location:../admin/grids.php');


    }


 


?>