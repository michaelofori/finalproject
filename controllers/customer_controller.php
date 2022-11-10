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
   

}

function editContact_ctr($customer_id,$customer_name,$customer_country, $customer_city,
$customer_contact){
    $editCustomer = new customerClass();

    return $editCustomer->editCustomer_cls($customer_id,$customer_name,$customer_country, $customer_city,
    $customer_contact);
}

function selectOneEmail_ctr($customer_email){
    $oneemail = new customerClass();
    return $oneemail->selectOneEmail($customer_email);
}

function deleteCustomer_cls($customer_id){
    $deleteCustomer = new customerClass();
     return $deleteCustomer->deleteCustomer_cls($customer_id);

}

?>


