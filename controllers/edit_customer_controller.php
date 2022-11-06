<?php

require('../classes/customer_class.php');

    function editContact_ctr($customer_id,$customer_name,$customer_country, $customer_city,
    $customer_contact){
        $editCustomer = new customerClass();

        return $editCustomer->editCustomer_cls($customer_id,$customer_name,$customer_country, $customer_city,
        $customer_contact);
    }
?>    