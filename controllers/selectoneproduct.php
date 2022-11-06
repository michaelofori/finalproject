<?php
require("../classes/product_class.php");

// insert
function selectOneProductCtr($product_id){
    $display= new product_class();
    return $display->select_oneproduct_cls($product_id);
    
}
?>