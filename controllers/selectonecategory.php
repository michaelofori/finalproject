<?php
require("../classes/product_class.php");

// insert
function selectOneCategoryCtr($cat_id){
    $display= new product_class();
    return $display->select_onecat_cls($cat_id);
    
}
?>