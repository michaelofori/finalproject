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
        return $this->db_fetch_all($sql);
        
    }

     // The functions selects all brands 
     function select_allbrand_cls(){
        $sql = "SELECT * FROM `brands`";
		return $this->db_fetch_all($sql);
        // return $data;
    }

      // The functions update one brand from the database based on the id
      function update_brand_cls($brand_id,$brand_name){
        $sql = "UPDATE `brands` SET `brand_name` = '$brand_name' WHERE `brand_id` = '$brand_id'";
        return $this->db_query($sql);
      
    }

      // this function insert into the category table
      function add_categories_cls($cat_name){
        $sql = "INSERT INTO `categories` (cat_name) VALUES ('$cat_name')";

        return $this->db_query($sql);
    }

    //This function select one from the category table by the cat id
    function select_onecat_cls($cat_id){
        $sql = "SELECT * FROM `categories` WHERE `cat_id` = '$cat_id'";
        return $this->db_fetch_all($sql);

    }

    function select_allcategories_cls(){
        $sql = "SELECT * FROM `categories`";
		return $this->db_fetch_all($sql);

    }
    
    function update_category_cls($cat_id,$cat_name){
        $sql = "UPDATE `categories` SET `cat_name` = '$cat_name' WHERE `cat_id` = '$cat_id'";
        return $this->db_query($sql);
    }

    function insert_prod_cls($brand,$cat,$title,$pNum,$pDesc,$pKey,$image){
        $sql = "INSERT INTO products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords)
        VALUES ('$brand','$cat','$title','$pNum','$pDesc','$image','$pKey')";
    return $this->db_query($sql);    
    }

    function select_prod_cls(){
        $sql = "SELECT * FROM products";
		$data =$this->db_fetch_all($sql);

        return $data; 
    }

    function select_oneprod_cls($pid){
        $sql = "SELECT * FROM products WHERE product_id = '$pid'";
        $data= $this->db_fetch_one($sql);

        return $data;
  }

  function update_product_cls($prod_id,$brand,$cat,$title,$pNum,$pDesc,$pkey,$folder_path){
    $sql = "UPDATE products
    SET product_brand = '$brand', product_cat= '$cat',product_title= '$title', 
    product_price= '$pNum',product_desc= '$pDesc',product_keywords= '$pkey',product_image= '$folder_path'
    WHERE product_id = '$prod_id'";

    return $this->db_query($sql);

  }

  function search_product_cls($brand){
    $sql = "SELECT * FROM products WHERE product_title LIKE '%$brand%'";
    $data= $this->db_fetch_all($sql);
    return $data;
  }
      
}
?>