<?php
// creates an instance of the product class and runs the methods
require('../classes/product_class.php');

//Brand class Ctr
function addBrandctr($brand_name){
    $add_clr= new product_class();
    return $add_clr->add_brand_cls($brand_name);
    header ('Location:../admin/brand.php');
}

function oneBrandctr($brand_id){
    $one_brand= new product_class();
    return $one_brand->select_onebrand_cls($brand_id);
}


function select_all_brands_ctr(){
    $allbrands=new product_class();
    return $allbrands->select_allbrand_cls();
  }

 

  function update_brand_ctr($brand_id,$brand_name){
    $editbrand = new product_class();
    return $editbrand->update_brand_cls($brand_id,$brand_name);  
}

function delBrand_ctr($brand_id){
  $delBrand = new product_class();
  return $delBrand->deletebrand_cls($brand_id);
}
  
  //--Category Ctr--//
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

  function update_category_ctr($cat_id,$cat_name){
    $editcategory = new product_class();
    return $editcategory->update_category_cls($cat_id,$cat_name);  
}

function delCategory_ctr($cat_id){
  $delCategory = new product_class();
  return $delCategory->deleteCategory_cls($cat_id);
}
  //--Product Ctr--//
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


function update_product_ctr($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
  $editproduct = new product_class();
  return $editproduct->update_product_cls($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);  
}

function search_product_ctr($product_brand){
  $searchProduct = new product_class(); 
  return $searchProduct->search_product_cls($product_brand);
}

function delProduct_ctr($product_id){
  $delProduct = new product_class();
  return $delProduct->deleteProduct_cls($product_id);
}
?>