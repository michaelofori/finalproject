<?php
session_start();
   if (empty($_SESSION['customer_id'])  and empty($_SESSION['customer_name'])and   empty($_SESSION['customer_email'])  and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../view/home.php');
   };

require('../controllers/selectonebrand.php');

if (isset($_POST['edit'])){
    $brand_id = $_POST['brand_id'];
    $result=selectOnebrandCtr($brand_id);
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
  <label for="brand_name">Update brand</label><br>
  <form action="../actions/edit_brand.php" method="post">
    <!-- update name -->
    <input type="hidden" name="brand_id" value=" <?php  echo $result[0]['brand_id']; ?> ">
    <label for="pname">Brand name</label><br>
    <input type="text" placeholder=" <?php  echo $result[0]['brand_name']; ?> " id="brand_name" name="brand_name" id="brand_name"><br>
    <!-- contact -->
    
    <!-- submit button -->
    <input type="submit" value="update" name="edit">
  </form>
</body>
</html>