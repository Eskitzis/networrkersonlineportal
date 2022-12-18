<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginstyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="loginstyle/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginstyle/css/main.css">
    <link rel="stylesheet" href="https://peaceful-hypatia.185-207-107-69.plesk.page/styles/loginstyle.css">
    <link rel="icon" href="assets/logo.png">
    <title>Networrkers</title>
</head>
<body>
    
    <!--Start Login-->
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="process.php" method="POST">
					<span class="login100-form-title">
						G-Lampropoulos Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="user" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Passwort">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!--End Login-->


<!--===============================================================================================-->	
<script src="loginstyle/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/bootstrap/js/popper.js"></script>
	<script src="loginstyle/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="loginstyle/js/main.js"></script>


</body>
</html>