<?php
require("../classes/product_class.php");

// insert
function selectAllCtr(){
    $display= new product_class();
    return $display->select_allbrand_cls();
}