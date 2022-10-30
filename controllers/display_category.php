<?php
require("../classes/product_class.php");

// insert
function selectAllCategoryCtr(){
    $display= new product_class();
    return $display->select_allcategories_cls();
}

?>