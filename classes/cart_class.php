<?php

// a class that extends the database connection and contains product methods
// : add product brand/ add product category, add category etc.
require('../settings/db_class.php');

class cart_class extends db_connection{

  function get_customers_cls($customer_id){

    $sql ="SELECT * FROM `customer` WHERE customer_id='$customer_id'";

    return $this->db_fetch_one($sql);
}
    
//cart
function add_cart_cls($p_id,$ip_add,$c_id,$qty){
    $sql = "INSERT INTO `cart` (`p_id`,`ip_add`,`c_id`,`qty`)
      VALUES ('$p_id','$ip_add','$c_id','$qty')";
  return $this->db_query($sql);
  }


  function select_onecart_cls($c_id){
    $sql = "SELECT * FROM `cart` WHERE `c_id` = '$c_id'";
    return $this->db_fetch_all($sql);   
  }
  
  function select_allcart_cls(){
    $sql = "SELECT * FROM `cart`";
  return $this->db_fetch_all($sql);
  }
  
  function deleteCat_cls($p_id,$c_id){
    $sql= "DELETE FROM `cart` WHERE `p_id`='$p_id' AND `c_id` = '$c_id'";
    return $this-> db_query($sql);
  
  }
  
  function increase_cart_cls($p_id,$c_id){
    $sql = "UPDATE `cart` SET qty = (qty + 1) WHERE `p_id`='$p_id' AND `c_id`='$c_id'";
    return $this->db_query($sql);
  }
  
  function decrease_cart_cls($p_id,$c_id){
    $sql = "UPDATE `cart` SET qty =(qty - 1)WHERE `p_id`='$p_id' AND `c_id`='$c_id'";
    return $this->db_query($sql);
  }

  function update_cart_qty_cls($p_id,$c_id){
    $sql ="UPDATE `cart` SET qty= qty+1 WHERE `p_id` = '$p_id' AND `c_id`='$c_id'";

    return $this->db_query($sql);

}

function update_cart_qty_del_cls($p_id,$c_id){
    $sql ="UPDATE `cart` SET qty= qty-1 WHERE `p_id` = '$p_id' AND `c_id` ='$c_id'";

    return $this->db_query($sql);

}

function count_cart_cls($c_id){
  $sql ="SELECT SUM(qty) FROM `cart` WHERE `c_id`='$c_id'";

  return $this->db_fetch_all($sql);

}
  
  // function get_cart_count_cls($c_id){
  //   return $this->db_count(select_onecart_cls($c_id));
  // }
  
  function get_user_cart_cls($c_id){
    
    $sql ="SELECT * FROM `cart` inner join `products` on 	cart.p_id=products.product_id WHERE `c_id`='$c_id'";
    return $this->db_fetch_all($sql);
  }
  function get_user_cls($c_id){
  $sql = "SELECT * FROM customer WHERE customer_id = '$c_id' LIMIT 1";
  $data =$this->db_fetch_one($sql);
  
  return $data;
  }
  
  function delete_user_from_cart_cls($cid){
    $sql = "DELETE FROM `cart` WHERE `c_id`='$cid'";
    return $this->db_query($sql);
}

function select_already_existing_products_cls($p_id,$c_id){
  $sql = "SELECT `p_id`,`c_id` FROM `cart` WHERE `p_id`='$p_id' AND `c_id`='$c_id'";

  return $this->db_fetch_all($sql);
}

function get_from_cart_cls($a){
  $sql = "SELECT products.product_price*cart.qty ,cart.qty, products.product_id,products.product_title ,products.product_desc, products.product_image,products.product_price FROM cart  
  INNER JOIN products ON cart.p_id = products.product_id WHERE cart.c_id ='$a'";

  return $this->db_fetch_all($sql);

}
  

function total_cart_price_cls($a){
  $sql = "SELECT SUM(cart.qty*products.product_price) FROM `cart` INNER JOIN `products` ON cart.p_id = products.product_id WHERE cart.c_id ='$a'";

  return $this->db_fetch_one($sql);

  
}

//orders

function insert_orders_cls($customer_id,$invoice_no,$order_date,$order_status){
  $sql="INSERT INTO `orders` (`customer_id`,`invoice_no`,`order_date`,`order_status`) 
  VALUES ('$customer_id','$invoice_no','$order_date','$order_status')";
  return $this->db_query($sql);
}


function insert_payments_cls($amt,$customer_id,$order_id,$payment_date){


  $sql="INSERT INTO `payment`(`amt`, `customer_id`, `order_id`, `currency`, `payment_date`) 
  VALUES ('$amt','$customer_id','$order_id','GHS','$payment_date')";

  return $this->db_query($sql);
}

function get_order_date(){
  $sql="SELECT `order_date` from `order`s ORDER BY `order_id` DESC LIMIT 1";
  return $this->db_fetch_one($sql);
}


function get_order_id(){
  $sql="SELECT order_id from orders ORDER BY order_id DESC LIMIT 1";
  return $this->db_fetch_one($sql);

}

function get_cart_details($c_id){
  $sql="SELECT `p_id`, `qty` FROM `cart` WHERE `c_id`='$c_id'";
  return $this->db_fetch_one($sql);
  }

function get_last_order_cls($invoice){
  $sql ="SELECT * FROM `orders` WHERE `invoice_no`= '$invoice'";
  return $this->db_fetch_one($sql);
  
  }

  function select_cart_user_cls($c_id){
    $sql = "SELECT * FROM `cart`  WHERE `c_id` = '$c_id' ";
  return $this->db_fetch_all($sql);
   
    
}

function insert_order_details_cls($order_id,$product_id,$qty){
  $sql= "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$order_id','$product_id','$qty')";
  return $this->db_query($sql);
}



}


?>