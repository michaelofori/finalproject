<?php
//make the controller aware of the existense of the class
require('../classes/product_class.php');

//edit, select/ update/ delete function

function delCategory_ctr($cat_id){
   
    $delCategory = new product_class();

    return $delCategory->deleteCategory_cls($cat_id);

}
?>

