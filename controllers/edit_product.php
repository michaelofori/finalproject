<?php
//make the controller aware of the existense of the class
require('../classes/product_class.php');

function update_product_ctr($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
    $editproduct = new product_class();
    return $editproduct->update_product_cls($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);  
}

?>