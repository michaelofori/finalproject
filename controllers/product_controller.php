<?php
// creates an instance of the product class and runs the methods
// 

require('../classes/product_class.php');


//This function call the  insert brand class and pass the data into it

function addBrandctr($brand_name){
    $add_clr= new product_class();
    return $add_clr->add_brand_cls($brand_name);

    header ('Location:../admin/brand.php');

}

function oneBrandctr($brand_id){
    $one_clr= new product_class();
    return $one_clr->select_onebrand_cls($brand_id);

}


function select_all_brands_ctr(){
    $allbrands=new product_class();
    return $allbrands->select_allbrand_cls();
  }
  
  //--Insert Category--//
  function add_category_ctr($cat_name){
    $addcategory=new product_class();
    return $addcategory->add_categories_cls($cat_name);
  }
  
  //--Select All Categories--//
  function select_all_categories_ctr(){
    $allcategories=new product_class();
    return $allcategories->select_allcategories_cls();
  }






?>