<?php
//make the controller aware of the existense of the class
require('../classes/product_class.php');

function update_brand_ctr($brand_id,$brand_name){
    $editbrand = new product_class();
    return $editbrand->update_brand_cls($brand_id,$brand_name);  
}

?>

