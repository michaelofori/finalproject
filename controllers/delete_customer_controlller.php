<?php

require('../classes/customer_class.php');

function deleteCustomer_cls($customer_id){

    $deleteCustomer = new customerClass();

     return $deleteCustomer->deleteCustomer_cls($customer_id);

}
?>