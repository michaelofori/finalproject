//this processes the add brand just like login/register.
// calls the product controller class

<?php

include("../controllers/product_controller.php");
//collecting from data
    if(isset($_POST['category'])){
        $cat_name = $_POST['cat_name'];
    
        add_category_ctr($cat_name);

       header ('Location:../admin/viewcategory.php');

    }

?>