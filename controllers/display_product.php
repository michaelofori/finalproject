<?php
require("../classes/product_class.php");

// insert
function selectAllProductCtr(){
    $display= new product_class();
    return $display->select_allproduct_cls();
}
?>