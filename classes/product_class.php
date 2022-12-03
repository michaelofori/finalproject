<?php
// a class that extends the database connection and contains product methods
// : add product brand/ add product category, add category etc.
require('../settings/db_class.php');

class product_class extends db_connection{
    // /This function inserts the brand name into the brand table
        function add_brand_cls($brand_name){
        $sql = "INSERT INTO `brands` (`brand_name`)
  				VALUES ('$brand_name')";
		return $this->db_query($sql);
    }
      // The functions selects one brand from the database based on the id
      function select_onebrand_cls($brand_id){
        $sql = "SELECT * FROM `brands` WHERE `brand_id` = '$brand_id'";
        return $this->db_fetch_one($sql);   
    }
     // The functions selects all brands 
     function select_allbrand_cls(){
        $sql = "SELECT * FROM `brands`";
		return $this->db_fetch_all($sql);
    }
      // The functions update one brand from the database based on the id
      function update_brand_cls($brand_id,$brand_name){
        $sql = "UPDATE `brands` SET `brand_name` = '$brand_name' WHERE `brand_id` = '$brand_id'";
        return $this->db_query($sql);
    }
    //delete
    function deletebrand_cls($brand_id){
      //write the sql
      $sql= "DELETE FROM `brands` WHERE `brand_id` = '$brand_id' ";
      //execute the sql
      return $this-> db_query($sql);

 }


      // this function insert into the category table
      function add_categories_cls($cat_name){
        $sql = "INSERT INTO `categories` (cat_name) VALUES ('$cat_name')";
        return $this->db_query($sql);
    }
    //This function select one from the category table by the cat id
    function select_onecat_cls($cat_id){
        $sql = "SELECT * FROM `categories` WHERE `cat_id` = '$cat_id'";
        return $this->db_fetch_one($sql);
    }
    function select_allcategories_cls(){
        $sql = "SELECT * FROM `categories`";
		return $this->db_fetch_all($sql);
    }
    function update_category_cls($cat_id,$cat_name){
        $sql = "UPDATE `categories` SET `cat_name` = '$cat_name' WHERE `cat_id` = '$cat_id'";
        return $this->db_query($sql);
    }
      //delete
      function deleteCategory_cls($cat_id){
        $sql= "DELETE FROM `categories` WHERE `cat_id` = '$cat_id'";
        return $this-> db_query($sql);
   }

      

    //Products
    function add_product_cls($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
        $sql = "INSERT INTO `products` (`product_cat`,`product_brand`,`product_title`,`product_price`,`product_desc`,`product_image`,`product_keywords`)
        VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
    return $this->db_query($sql);    
    }
    function select_allproduct_cls(){
        $sql = "SELECT * FROM `products`";
		    return $this->db_fetch_all($sql);
    }
    function select_oneproduct_cls($product_id){
        $sql = "SELECT * FROM `products` WHERE `product_id` = '$product_id'";
        return $this->db_fetch_one($sql);   
  }
  function update_product_cls($product_id,$product_title,$product_price,$product_desc,$product_keywords){
    $sql = "UPDATE `products` SET  `product_title`= '$product_title', `product_price`= '$product_price', 
    `product_desc`= '$product_desc',`product_keywords`= '$product_keywords' WHERE `product_id` = '$product_id'";
    return $this->db_query($sql);
  }

  function search_product_cls($product_brand){
    $sql = "SELECT * FROM `products` WHERE `product_title` LIKE '%$product_brand%'";
    return $this->db_fetch_all($sql);
  }   
   //delete
   function deleteProduct_cls($product_id){
    //write the sql
    $sql= "DELETE FROM `products` WHERE `product_id` = '$product_id'";
    //execute the sql
    return $this-> db_query($sql);
}

function update_product_image_cls($product_id,$product_image){
  $sql="UPDATE `products` SET `product_image`='$product_image' WHERE `product_id` = '$product_id'";
  return $this->db_query($sql);
}

}

?>
