<?php
session_start();
if (empty($_SESSION['customer_id'])  and empty($_SESSION['customer_name']) and   empty($_SESSION['customer_email'])  and empty($_SESSION['user_role'] != 1)) {
  header('Location:../view/home.php');
};

require('../controllers/product_controller.php');

if (isset($_POST['edit'])) {
  $cat_id = $_POST['cat_id'];
  $result = select_onecat_ctr($cat_id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin-Edit Category</title>
  <link rel="icon" href="../images/k.png" type="image/gif">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="../css/formcss/css/bootstrap.min.css"> -->

  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <!-- Bootstrap Core CSS -->
  <link href="../css/admincss/css/bootstrap.css" rel='stylesheet' type='text/css' />

  <!-- Custom CSS -->
  <link href="../css/admincss/css/style.css" rel='stylesheet' type='text/css' />

  <!-- font-awesome icons CSS -->
  <link href="../css/admincss/css/font-awesome.css" rel="stylesheet" />
  <!-- //font-awesome icons CSS -->

  <!-- side nav css file -->
  <link href='../css/admincss/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
  <!-- side nav css file -->

  <!-- js-->
  <script src="../css/admincss/js/jquery-1.11.1.min.js"></script>
  <script src="../css/admincss/js/modernizr.custom.js"></script>

  <!--webfonts-->
  <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet" />
  <!--webfonts-->

  <!-- Metis Menu -->
  <script src="../css/admincss/js/metisMenu.min.js"></script>
  <script src="../css/admincss/js/custom.js"></script>
  <link href="../css/admincss/css/custom.css" rel="stylesheet" />
  <!--//Metis Menu -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body class="cbp-spmenu-push">
  <div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <!--left-fixed -navigation-->
      <aside class="sidebar-left">
        <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="brand.php"><span class="fa fa-area-chart"></span> Kemdar <span class="dashboard_text">Design dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="brand.php">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-laptop"></i>
                  <span>Brand</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="grids.php"><i class="fa fa-angle-right"></i> View Brands</a></li>
                  <li><a href="addbrand.php"><i class="fa fa-angle-right"></i> Add Brand</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-book"></i>
                  <span>Category</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="viewcategory.php"><i class="fa fa-angle-right"></i> View Category</a></li>
                  <li><a href="addbrand.php"><i class="fa fa-angle-right"></i> Add Category</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-book"></i>
                  <span>Product</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="viewproduct.php"><i class="fa fa-angle-right"></i> View Product</a></li>
                  <li><a href="addproduct.php"><i class="fa fa-angle-right"></i> Add Product</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-edit"></i> <span>Purchase</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="forms.php"><i class="fa fa-angle-right"></i> Orders</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </nav>
      </aside>
    </div>
    <!--left-fixed -navigation-->

    <!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">

        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->

        <div class="clearfix"> </div>
      </div>
      <div class="header-right">


        <!--search-box-->
        <div class="search-box">
          <form class="input">
            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
            <label class="input__label" for="input-31">
              <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
              </svg>
            </label>
          </form>
        </div>
        <!--//end-search-box-->

        <div class="profile_details">
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img">
                  <span class="prfil-img"><img src="../css/admincss/images/2.jpg" alt=""> </span>
                  <div class="user-name">

                    <span><?php

                          if (!empty($_SESSION['customer_name'])) {
                            echo $_SESSION['customer_name'];
                          } ?></span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>
                </div>
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
                <?php echo "<li> <a href='../actions/logout.php' onclick='onsignout()' ><i class='fa fa-sign-out'></i> Logout</a> </li>"; ?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="media">

          <h2 class="title1">Update Category</h2>
          <div class="bs-example5 widget-shadow" data-example-id="default-media">
            <!-- Button trigger modal -->
            <form action="../actions/edit_category.php" method="post">
              <!-- update name -->
              <div class="mb-3">
                <input type="hidden" name="cat_id" value=" <?php echo $result['cat_id']; ?> ">
                <label for="title" class="form-label">Previous Category name</label>
                <input type="text" class="form-control" placeholder=" <?php echo $result['cat_name']; ?> " id="cat_name" name="cat_name" id="cat_name"><br>
                <!-- contact -->
              </div>
              <!-- submit button -->
              <input class='btn btn-primary' type="submit" value="update" name="edit">
            </form>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
  <div class="footer">
    <p>&copy; 2022 Middlemen Dashboard. All Rights Reserved | <a href="https://www.instagram.com/p/Cd8ftLBMd4u/?igshid=YmMyMTA2M2Y=" target="_blank">Middlemen</a></p>
  </div>
  <!--//footer-->
  </div>

  <!-- side nav js -->
  <script src='../css/admincss/js/SidebarNav.min.js' type='text/javascript'></script>
  <script>
    $('.sidebar-menu').SidebarNav()
  </script>
  <!-- //side nav js -->

  <!-- Classie -->
  <!-- for toggle left push menu script -->
  <script src="../css/admincss/js/classie.js"></script>
  <script>
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
      showLeftPush = document.getElementById('showLeftPush'),
      body = document.body;

    showLeftPush.onclick = function() {
      classie.toggle(this, 'active');
      classie.toggle(body, 'cbp-spmenu-push-toright');
      classie.toggle(menuLeft, 'cbp-spmenu-open');
      disableOther('showLeftPush');
    };

    function disableOther(button) {
      if (button !== 'showLeftPush') {
        classie.toggle(showLeftPush, 'disabled');
      }
    }
  </script>
  <!-- //Classie -->
  <!-- //for toggle left push menu script -->

  <!--scrolling js-->
  <script src="../css/admincss/js/jquery.nicescroll.js"></script>
  <script src="../css/admincss/js/scripts.js"></script>
  <!--//scrolling js-->

  <!-- Bootstrap Core JavaScript -->
  <script src="../css/admincss/js/bootstrap.js"> </script>

</body>

</html>