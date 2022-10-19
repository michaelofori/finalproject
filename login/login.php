<!-- Source: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->

<?php 
    include('../settings/db_cred.php')
?>



<!DOCTYPE html>
<html>

<head>
    <title>User Login Page</title>
    <style>
    .background {
        background-image: url("https://images.unsplash.com/photo-1551522435-a13afa10f103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80");
   
    }
  </style>
    <link rel="stylesheet"  href="../css/formcss/css/style_login.css">
</head>

<body class="background">
    <div class="header" style="background-color:blue;" >
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user" style="background-color:blueviolet;">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>

</html>