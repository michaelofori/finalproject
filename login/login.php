<!doctype html>
<html lang="en">

<head>
	<title>Login 09</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Shop PN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/zeus.jpg);"></div>
						<h3 class="text-center mb-0">Login</h3>
						<p class="text-center"></p>

						<form action="../actions/loginprocess.php" method="post"  class="login-form">

							

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-address-card"></span></div>
								<input type="email" class="form-control" placeholder="email" name="customer_email" required>
							</div>

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-key"></span></div>
								<input type="password" class="form-control" placeholder="Password" id= "customer_pass" name="customer_pass" required>
							</div>

							<div class="form-group">
							<span id="wrong_pass_alert"></span>
								<button type="submit" id="login_user" name="login_user"  
								class="btn form-control btn-primary rounded submit px-3">Get Started</button>
							</div>
						</form>

						<div class="w-100 text-center mt-4 text">
							<p class="mb-0">Don't have an account?</p>
							<a href="register.php">Sign In</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>