<?php

include ("../controllers/cart_controller.php");
session_start();
if(isset($_POST['addtocart'])){
    $p_id = $_POST['p_id'];
    $c_id = $_SESSION['customer_id'];
    $qty = $_POST['qty'];
    
    add_cart_ctr($p_id,$_SERVER['REMOTE_ADDR'],$c_id,$qty);
    header('Location: ../view/cart.php');
}

?>