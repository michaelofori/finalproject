<?php

// a class that extends the database connection and contains product methods
// : add product brand/ add product category, add category etc.
require('../settings/db_class.php');

class cart_class extends db_connection{

    
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
  


}


?>