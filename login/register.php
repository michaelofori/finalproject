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
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/zeroday.jpg);"></div>
						<h3 class="text-center mb-0">Welcome</h3>
						<p class="text-center">Sign in by entering the information below</p>

						<form action="../actions/registerprocess.php" method="post"  class="login-form">

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
								<input type="text" class="form-control" name="customer_name" placeholder="Full Name"  required>
							</div>

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-address-card"></span></div>
								<input type="email" class="form-control" placeholder="email" name="customer_email" required>
							</div>

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-key"></span></div>
								<input type="password" class="form-control" placeholder="Password" id= "customer_pass" name="customer_pass" required>
							</div>

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-key"></span></div>
								<input type="password" class="form-control" placeholder="Confirm Password" id="customer_pass2" name="customer_pass2" required onkeyup="validate_password()">
							</div>

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-globe"></span></div>
								<input type="text" class="form-control" placeholder="country" name="customer_country" required>
							</div>

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-paper-plane"></span></div>
								<input type="text" class="form-control" placeholder="city" name="customer_city" required>
							</div>

							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
								<input type="text" class="form-control" placeholder="contact" name="customer_contact" required pattern="[0-9]{10}" onkeypress='validate(event)' oninvalid="this.setCustomValidity('Phone number should be 10 numbers')" oninput="this.setCustomValidity('')" onkeypress='validate(event)'>
							</div>
  
							<!-- <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
							</div> -->

							<div class="form-group">
							<span id="wrong_pass_alert"></span>
								<button type="submit" id="register_user" name="register_user" onclick="wrong_pass_alert()" 
								class="btn form-control btn-primary rounded submit px-3">Get Started</button>
							</div>
						</form>

						<div class="w-100 text-center mt-4 text">
							<p class="mb-0">ALready have an account?</p>
							<a href="login.php">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script>
        function validate_password() {
 
            var pass = document.getElementById('customer_pass').value;
            var confirm_pass = document.getElementById('customer_pass2').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '☒ Use same password';
                document.getElementById('register_user').disabled = true;
                document.getElementById('register_user').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '🗹 Password Matched';
                document.getElementById('register_user').disabled = false;
                document.getElementById('register_user').style.opacity = (1);
            }
        }
 
        function wrong_pass_alert() {
            if (document.getElementById('customer_pass').value != "" &&
                document.getElementById('customer_pass2').value != "") {
                alert("Your response is submitted");
            } else {
                alert("Please fill all the fields");
            }
        }
    </script>

<script >
            function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
        </script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>