<?php
// include("../controllers/customer_controller.php");
include("../controllers/select_one_email.php");

$customer_email = $_POST["customer_email"];
$customer_pass2 = $_POST["customer_pass"];

if(isset($_POST['login_user'])){
   
        if(selectOneEmail_ctr($customer_email)!=false){
            $check=selectOneEmail_ctr($customer_email);
            $customer_pass = $check["customer_pass"];

            if (password_verify($customer_pass2,$customer_pass) and $check['user_role']==1){
                session_start();
                $_SESSION['customer_id'] = $check['customer_id'];
                $_SESSION['customer_name'] = $check['customer_name'];
                $_SESSION['customer_email'] = $check['customer_email'];
                header('Location:../admin/brand.php');
    }

    else if (password_verify($customer_pass2,$customer_pass) and $check['user_role']!=1) {
      session_start();
                $_SESSION['customer_id'] = $check['customer_id'];
                $_SESSION['customer_name'] = $check['customer_name'];
                $_SESSION['customer_email'] = $check['customer_email'];
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
?>