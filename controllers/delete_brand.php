<?php
//make the controller aware of the existense of the class
require('../classes/product_class.php');

//edit, select/ update/ delete function
function delBrand_ctr($brand_id){
   
    $delBrand = new product_class();

    return $delBrand->deletebrand_cls($brand_id);

}
?>

