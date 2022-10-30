<?php
require('../classes/customer_class.php');

function selectOneEmail_ctr($customer_email){

    $oneemail = new customerClass();

    return $oneemail->selectOneEmail($customer_email);

    

}

































?>