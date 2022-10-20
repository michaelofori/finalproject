<?php

include("../controllers/customer_controller.php");


session_start();

// initializing variables
$customer_email = "";


$errors = array();

if(isset($_POST['login_user'])){
    $customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
    $customer_pass = mysqli_real_escape_string($conn, $_POST['customer_pass']);

    if (empty($customer_email)) {
        array_push($errors, "Email is required");
    }
    if (empty($customer_pass)) {
        array_push($errors, "Password is required");
    }


    if (count($errors) == 0) {
        $customer_pass = ($customer_pass);
        $query = "SELECT * FROM customer WHERE customer_email='$customer_email' AND customer_pass='$customer_pass'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['customer_email'] = $customer_email;
            $_SESSION['success'] = " ";
            header('location:../view/home.php');
        } else {
            array_push($errors, "Wrong email/password combination");
        }
    }





}



?>