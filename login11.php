<?php
	if(isset($_POST['submitted'])){
		header("Location: homepage.php");
} else {
	echo'<!DOCTYPE html>
		<head>
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		</head>
		<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="lmage/pic1.jpg" alt="Member">
				</div>

				<form class="login100-form validate-form" action="login11.php" method="post">
					<span class="login100-form-title">
						<b>Member Login</b>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: e.g(abc@gmail.com)">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
						<input type="hidden" name="submitted" value="true">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password ?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="js/main.js"></script>
		</body>';
	}
?>