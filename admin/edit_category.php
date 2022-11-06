<?php
session_start();
   if (empty($_SESSION['customer_id'])  and empty($_SESSION['customer_name'])and   empty($_SESSION['customer_email'])  and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../view/home.php');
   };

require('../controllers/selectonecategory.php');

if (isset($_POST['edit'])){
    $cat_id = $_POST['cat_id'];
    $result=selectOneCategoryCtr($cat_id);
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
  <label for="cat_name">Update Category</label><br>
  <form action="../actions/edit_category.php" method="post">
    <!-- update name -->
    <input type="hidden" name="cat_id" value=" <?php  echo $result[0]['cat_id']; ?> ">
    <label for="pname">Catergory name</label><br>
    <input type="text" placeholder=" <?php  echo $result[0]['cat_name']; ?> " id="cat_name" name="cat_name" id="cat_name"><br>
    <!-- contact -->
    
    <!-- submit button -->
    <input type="submit" value="update" name="edit">
  </form>
</body>
</html>