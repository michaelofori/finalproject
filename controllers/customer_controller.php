<?php
//make the controller aware of the existense of the class
require('../classes/customer_class.php');

//edit, select/ update/ delete function

function registerCustomer_ctr($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city,
$customer_contact,$customer_image,$user_role){
    //create instance of the class
    $addcustomer = new customerClass();

    return $addcustomer->registerCustomer_cls($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city,
    $customer_contact,$customer_image,$user_role);

    
    header('Location:../login/login.php');

}


?>


