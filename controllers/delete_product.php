<?php
//make the controller aware of the existense of the class
require('../classes/product_class.php');

//edit, select/ update/ delete function
function delProduct_ctr($product_id){
   
    $delProduct = new product_class();

    return $delProduct->deleteProduct_cls($product_id);
}
?>

