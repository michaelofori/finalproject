<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
   if (empty($_SESSION['customer_id'])  and empty($_SESSION['customer_name'])and   empty($_SESSION['customer_email'])  and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../view/home.php');
   };
?>
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
	<!-- side nav css file -->

	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->

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
						<h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span> SnT<span class="dashboard_text">Design dashboard</span></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MAIN NAVIGATION</li>
							<li class="treeview">
								<a href="index.php">
									<i class="fa fa-dashboard"></i> <span>Dashboard</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-laptop"></i>
									<span>Books</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="grids.php"><i class="fa fa-angle-right"></i> View books</a></li>
									<li><a href="media.php"><i class="fa fa-angle-right"></i> Add book</a></li>
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

							<li class="treeview">
								<a href="#">
									<i class="fa fa-envelope"></i> <span>Feedback</span>
									<i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
								<ul class="treeview-menu">
									<li><a href="inbox.php"><i class="fa fa-angle-right"></i> Reviews</a></li>
									<li><a href="compose.php"><i class="fa fa-angle-right"></i> Issues </a></li>
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
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
									<div class="user-name">
										<?php
										
										?>
										<span><?php 
                                        
                                        if(!empty($_SESSION['customer_name'])){
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

								<?php 
								//echo "<li> <a href='#' onclick='onsignout()' ><i class='fa fa-sign-out'></i> Logout</a> </li>"; ?>
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
				<h2 class="title1">Reviews</h2>

			</div>
			<div class="col-md-8 compose-right widget-shadow">
				<div class="panel-default">
					<div class="panel-heading">
						Reviews
					</div>
					<div class="inbox-page">
						<h4>Recent</h4>
						<div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">


							<table class="table">
								<thead>
									<tr>
										<th scope="col">Reviewer Name</th>
										<th scope="col">Book Title</th>
										<th scope="col">Comment</th>
										<th scope="col">Number of stars </th>
									</tr>
								</thead>
								<tbody>
									<?php
									// $reviews = get_all_reviews_ctrl();
									// if ($reviews){
									// foreach ($reviews as $item) {


									// 	$user = get_user_name_by_id_ctrl($item["user_id"]);
									// 	$title = select_book_by_id_ctrl($item["book_id"])["title"];
									// 	$stars = $item["num_of_stars"];
									// 	$comment = $item["review_comment"];

									// 	echo "<tr>";
									// 	echo "<td>$user</td>\n";
									// 	echo "<td>$title</td>\n";
									// 	echo "<td>$comment</td>\n";
									// 	echo "<td>$stars</td>\n";
									// 	echo "</tr>";
									// }
									// } else {
									// 	echo "<tr><td></td><td></td><td>No Reviews yet</td><td></td></tr>";
									// }
									?>


								</tbody>
							</table>
							<?php
							echo("Coming Soon...");
							?>
						</div>


					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!--footer-->
	<div class="footer">
	<p>&copy; 2022 Middlemen Dashboard. All Rights Reserved |  <a href="https://www.instagram.com/p/Cd8ftLBMd4u/?igshid=YmMyMTA2M2Y=" target="_blank">Middlemen</a></p>
	</div>
	<!--//footer-->
	</div>

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->

	<!-- Classie -->
	<!-- for toggle left push menu script -->
	<script src="js/classie.js"></script>
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
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>

</body>

</html>