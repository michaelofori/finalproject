

<?php

include("../controllers/customer_controller.php");

// $errors = array();

if(isset($_POST['register_user'])){

    $customer_name = $_POST["customer_name"];
    $customer_email = $_POST["customer_email"];
    $customer_pass = $_POST["customer_pass"];
    $customer_pass=password_hash($customer_pass,PASSWORD_DEFAULT);
    $customer_country = $_POST["customer_country"];
    $customer_city = $_POST["customer_city"];
    $customer_contact = $_POST["customer_contact"];
    $user_role = 2;

    registerCustomer_ctr($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city,
     $customer_contact,$user_role);


    header ('Location:../login/login.php');



}

?>
