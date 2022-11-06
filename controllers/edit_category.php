<?php
//make the controller aware of the existense of the class
require('../classes/product_class.php');

function update_category_ctr($cat_id,$cat_name){
    $editcategory = new product_class();
    return $editcategory->update_category_cls($cat_id,$cat_name);  
}
?>