<?php
require("../classes/product_class.php");

// insert
function selectOnebrandCtr($brand_id){
    $display= new product_class();
    return $display->select_onebrand_cls($brand_id);
    
}
?>