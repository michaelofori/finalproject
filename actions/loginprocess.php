<?php

// include("../controllers/customer_controller.php");
include("../controllers/select_one_email.php");



// session_start();

// initializing variables

$customer_email = $_POST["customer_email"];
$customer_pass2 = $_POST["customer_pass"];


// $errors = array();

if(isset($_POST['login_user'])){
    // $customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
    // $customer_pass = mysqli_real_escape_string($conn, $_POST['customer_pass']);

    // if (empty($customer_email)) {
    //     array_push($errors, "Email is required");
    // }
    // if (empty($customer_pass)) {
    //     array_push($errors, "Password is required");
    // }


    // if (count($errors) == 0) {
        if(selectOneEmail_ctr($customer_email)!=false){
            $check=selectOneEmail_ctr($customer_email);
            $customer_pass = $check["customer_pass"];
            if (password_verify($customer_pass2,$customer_pass)){
                session_start();
      $_SESSION['customer_id'] = $result['customer_id'];
      $_SESSION['custmer_name'] = $result['customer_name'];
      $_SESSION['customer_email'] = $result['customer_email'];
      header('Location:../view/home.php');
    }
    else{
      session_start();
      $_SESSION['error'] = 'Invalid login details!';    
      header('Location:../login/login.php');
    }  
  }
  else{
    session_start();
    $_SESSION['error'] = 'Invalid login details!';    
    header('Location:../login/login.php');
  }  
}


else {
  
  header('Location:../Login/login.php');

            }
        // }

        // $customer_pass = ($customer_pass);
        // $query = "SELECT * FROM customer WHERE customer_email='$customer_email' AND customer_pass='$customer_pass'";
        // $results = mysqli_query($conn, $query);
        // if (mysqli_num_rows($results) == 1) {
        //     $_SESSION['customer_email'] = $customer_email;
        //     $_SESSION['success'] = " ";
        //     header('location:../view/home.php');
        // } else {
        //     array_push($errors, "Wrong email/password combination");
        // }



        ?>
