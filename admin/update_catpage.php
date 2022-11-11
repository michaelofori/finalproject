<?php
$cat_id=$_GET['cat_id'];
require ('../controllers/product_controller.php');

$cat_info=select_onecat_ctr($cat_id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Document</title>
</head>
<body>
<form class="col s12" action='../actions/update_cat.php' method='post'>
    <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" value="<?php echo($brand_info['cat_name']) ?>" name='bname' required>
          <label for="first_name">First Name</label>
        </div>
        <input type="hidden"  name="cat_id" value="<?php echo( $cat_id )?>">
    </div>

    
<button name= 'submit' type='submit'>Update</button>
</form>
</body>
</html>