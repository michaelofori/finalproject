<?php
// creates an instance of the product class and runs the methods
require('../classes/cart_class.php');


//cart

function add_cart_ctr($p_id,$ip_add,$c_id,$qty){
   
    $add_cart_clr= new cart_class();
    return  $add_cart_clr->add_cart_cls($p_id,$ip_add,$c_id,$qty);
  
  }

  function select_one_cart_ctr($c_id){
    $one_cart= new cart_class();
  
    return $one_cart->select_onecart_cls($c_id);
  }

  function select_all_cart_ctr(){
    $all_cart= new cart_class();
  
    return $all_cart->select_allcart_cls();
  }

  function del_cart_ctr($p_id,$c_id){
    $delcart = new cart_class();
    return $delcart->deleteCat_cls($p_id,$c_id);
  }
    
  function increase_cart_qty($p_id,$c_id){
    $increase_cart= new cart_class();
    return $increase_cart->increase_cart_cls($p_id,$c_id);
  }

  function decrease_from_cart($p_id,$c_id){
    $decrease_cart= new cart_class();
    return $decrease_cart->decrease_cart_cls($p_id,$c_id);
  }

  function select_user_cart($c_id){
    $sele_user_cart= new cart_class();
    return $sele_user_cart->get_user_cart_cls($c_id);
  }

  
  function get_user_ctr($c_id){
    $select_contr= new cart_class();
    return   $select_contr->get_user_cls($c_id);

  }
  
  function delete_user_from_cart_ctr($cid){
    $select_contr= new cart_class();
    return  $select_contr->delete_user_from_cart_cls($cid);
    
  }

  function update_cart_qty_ctr($p_id,$c_id){
    $updatecart=new cart_class();
    return $updatecart ->update_cart_qty_cls($p_id,$c_id);
  }

  function update_cart_qty_del_ctr($p_id,$c_id){
    $updatedrecrease= new cart_class();
    return $updatedrecrease-> update_cart_qty_del_cls($p_id,$c_id);

  }

  function count_cart_cls($c_id){
    $count=new cart_class();
    return $count -> count_cart_cls($c_id);

  }
 

  function select_already_existing_products_ctr($p_id,$c_id){
    $allready = new cart_class();
    return $allready -> select_already_existing_products_cls($p_id,$c_id);
  }

  function get_from_cart_ctr($a){
    $get_add = new cart_class();
    
    return $get_add->get_from_cart_cls($a);
    
    }
  

?>