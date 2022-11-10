<?php
session_start();
   if (empty($_SESSION['customer_id'])  and empty($_SESSION['customer_name'])and   empty($_SESSION['customer_email'])  and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../view/home.php');
   };

require('../controllers/selectoneproduct.php');

if (isset($_POST['edit'])){
    $product_id = $_POST['product_id'];
    
    $result=selectOneProductCtr($product_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/formcss/css/bootstrap.min.css">
  <title>Form</title>
</head>

<body>
  <br>
  <label for="product_title">Update Product</label><br>
  <form action="../actions/edit_product.php" method="post" enctype="multipart/form-data">
    <!-- update name -->
    <input type="hidden" name="product_id" value=" <?php  echo $result[0]['product_id']; ?> ">
    <input type="hidden" name="image" value=" <?php  echo $result[0]['product_image']; ?> ">
 
    <!-- contact -->

    <div class="mb-3">
    <input type="hidden" name="product_id" value=" <?php  echo $result[0]['product_id']; ?> ">
    
									<label for="description" class="form-label">Product Title</label>
									<!-- <textarea class="form-control" id="description" name="product_title" rows="1"></textarea> -->
                  <input type="text" value=" <?php  echo $result[0]['product_title']; ?> " id="product_title" name="product_title" id="product_title"><br> 
								</div>

								<div class="mb-3">
									<label for="price" class="form-label">Product price</label>
									<!-- <input type="number" class="form-control" id="price" name="product_price" aria-describedby="emailHelp"> -->
                  <input type="text" value=" <?php  echo $result[0]['product_price']; ?> " id="product_price" name="product_price" id="product_price"><br>
								</div>

								<div class="mb-3">
									<label for="description" class="form-label">Product Description</label>
									<!-- <textarea class="form-control" id="description" name="product_desc" rows="3"></textarea> -->
                  <input type="text" value=" <?php  echo $result[0]['product_desc']; ?> " id="product_desc" name="product_desc" id="product_desc"><br>
								</div>

                <div class="mb-3">
									<label for="description" class="form-label">Product Cat</label>
									<!-- <textarea class="form-control" id="description" name="product_desc" rows="3"></textarea> -->
                  <input type="text" value=" <?php  echo $result[0]['product_cat']; ?> " id="product_cat" name="product_cat" id="product_cat"><br>
								</div>
                <div class="mb-3">
									<label for="description" class="form-label">Product Brand</label>
									<!-- <textarea class="form-control" id="description" name="product_desc" rows="3"></textarea> -->
                  <input type="text" value=" <?php  echo $result[0]['product_brand']; ?> " id="product_brand" name="product_brand" id="product_brand"><br>
								</div>

                

								<!-- <select class="form-select" aria-label="Default select example" name="status" id="cat"> -->
								
								<!-- </select> -->
								<div class="mb-3">
									<label for="formFile" class="form-label">Product image</label>
									<input class="form-control" value=" <?php  echo $result[0]['product_image']; ?> " name="product_image" type="file"  id="image">
								</div>

								<!-- accept="image/*" -->
								<div class="mb-3">
									<label for="description" class="form-label">Product Keyword</label>
									<!-- <textarea class="form-control" id="description" name="product_keywords" rows="1"></textarea> -->
                  <input type="text" value=" <?php  echo $result[0]['product_keywords']; ?> " id="product_keywords" name="product_keywords" id="product_keywords"><br>
								</div>
    
    <!-- submit button -->
    <input type="submit" value="update" name="edit">
  </form>
</body>
</html>