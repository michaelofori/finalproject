<?php
// creates an instance of the product class and runs the methods
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

  function select_onecat_ctr($cat_id){
    $onecat= new product_class();
    return $onecat->select_onecat_cls($cat_id);
}
  
  function select_all_categories_ctr(){
    $allcategories=new product_class();
    return $allcategories->select_allcategories_cls();
  }

  //--Insert Product--//
  function add_product_ctr($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
    $addproduct=new product_class();
    return $addproduct->add_product_cls($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);
  }

  function select_allproduct_ctr(){
    $allproducts=new product_class();
    return $allproducts->select_allproduct_cls();
  }

  function select_oneproduct_ctr($product_id){
    $oneproduct= new product_class();
    return $oneproduct->select_oneproduct_cls($product_id);
}

function search_product_ctr($product_brand){
  $searchProduct = new product_class(); 
  return $searchProduct->search_product_cls($product_brand);
}
?>