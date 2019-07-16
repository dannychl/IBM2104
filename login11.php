<?php
	session_start();
	if(isset($_GET['submitted'])){

		

		$conn = new mysqli("localhost", "root", "", "project");
		if($conn->connect_error)
		{
			die("Cannot connect to database");
		}
		$email = $_GET['email'];
		$pass = $_GET['pass'];

		$pass = $conn->real_escape_string($_GET['pass']);
		
		$sql = "SELECT id, admin, name FROM user WHERE email = '$email' AND pass = '$pass'";
		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			$_SESSION["loged_in"] = true;
			$row = $result->fetch_assoc();
			$_SESSION["admin_loged_in"] = $row['admin'];
			$_SESSION["user_id"] = $row["id"];

			if($_SESSION["admin_loged_in"])
			{
				echo '
				<script>window.alert("Welcome back, '.$row["name"].' (admin)")
				location.href="'.$_SESSION["self"].'"</script>';
			}
			else
			{
				echo '
				<script>window.alert("Welcome back, '.$row["name"].'")
				location.href="'.$_SESSION["self"].'"</script>';
			}
			
		}
		else
		{
			header("Location: login_failed.php");
		}
		
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
					<img src="Image/pic1.jpg" alt="Member">
				</div>
				<form class="login100-form validate-form" action="login11.php" method="get">
					<i class="fa fa-times" aria-hidden="true" style="float:right"></i>
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
						<input class="input100" type="text" name="pass" placeholder="Password">
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
						<a class="txt2" href="signUp1.php">
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