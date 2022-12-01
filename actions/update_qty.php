<?php
require ("../controllers/cart_controller.php");
session_start();
$cid =$_SESSION['customer_id'];
if (isset($_POST['inputbx'])) {
    $id = $_POST['pid'];
   $add =update_cart_qty_ctr($id,$cid); 
}
elseif(isset($_POST['inputbx2']))
{
    $id2 = $_POST['pid2'];
    $check = update_cart_qty_ctr($p_id,$c_id);
   $number = $check['qty'];
        if ($number==1) {
            del_cart_ctr($id2,$cid);
        }
        else {
            update_cart_qty_del_ctr($id2,$cid);
        }
}
else{
    echo"non";
}
?>