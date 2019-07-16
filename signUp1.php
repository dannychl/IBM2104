<?php 
	session_start();
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','project');
	try{
		//"mysql:host=localhost;dbname=stationary"
		$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
		$conn = new PDO($dsn, DB_USER, DB_PASS);
	}
	catch(exception $e)
	{
		echo "Unable to connect to database";
	}
	if(isset($_POST['submitted'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$psw_repeat = $_POST['psw-repeat'];
	$phone = $_POST['phone'];
	$date= $_POST['date'];
	$gender = $_POST['gender'];

	if(!empty($email) || !empty($psw) || !empty($psw_repeat) || !empty($phone) || !empty($dateOfBirth) || !empty($gender)){
		$message="";
		$message1="";
		$check=true;


		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $message = "Invalid email format"; 
		  $check=false;
		}	

		if($check)
		{
			$sql1 = "SELECT * from user";
				$query1 = $conn -> prepare($sql1);
				$query1->execute();
				$results=$query1->fetchAll(PDO::FETCH_OBJ);
					if($query1->rowCount() > 0){
						foreach($results as $result){
		                    if($result->email == $email){
								$message = "Email cannot be same.";
								$check=false; 
							}
		                }
					}
		}
		
		if($psw!=$psw_repeat){
			$message1="**Password and confirm password must be same";
			$check=false;
		}
		
		if($check){
			$sql2="INSERT INTO user(name, email, pass, gender, phone, dob) VALUES('$name', '$email','$psw','$gender','$phone','$date')";
			$query2 = $conn->prepare($sql2);
			$query2->execute();
			echo "<script language='javascript'>";
			echo "alert('Successfully register')";
			echo "</script>";		
			header("refresh:0;url=login11.php");
		}
		//$stmt->close();
		//$conn->close();
	}else{
		echo "<script language='javascript'>";
		echo "alert('All field are required')";
		echo "</script>";		
		header("refresh:2;url=signUp1.php");
		die();
		}
	}
	?>
	<head>
	<link rel="stylesheet" type="text/css" href="SignUp.css">
	</head>
	<body>
	<div class="limiter">
		<div class="container-signUp">
			<div class="wrap-login100">
	<form action="signUp1.php" method="post" >
	<h1 style="text-align:center">SignUp Form</h1>
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Name</b></label>
    <input type="text" name="name" placeholder="Enter Name" required>

    <label for="username"><b>Email</b></label>
    <input type="text" name="email" placeholder="Enter Email" required>    
    <?php
		if(isset($_POST['submitted'])){
			echo '<span style="color:red">'.$message.'</span><br><br>';
		}
	?>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <?php
		if(isset($_POST['submitted'])){
			echo '<span style="color:red">'.$message1.'</span><br><br>';
		}
	?>
	<label for="phone"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number (e.g 012-34567890)" name="phone" required>   
	
	<label for="dateOfBirth"><b>Date Of Birth: (DD-MM-YYYY)</b></br></label>
	<input type="date" name="date" placeholder="(DD-MM-YYYY)">
		
	<br><br>
	
	<label for="gender"><b>Gender </b></label>
    <input type="radio"  name="gender" value="M" required>Male
	<input type="radio"  name="gender" value="F" required>Female
	
    <label>
	<br><br>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <a href="login11.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn" name="submitted">Sign Up</button>
    </div>
			</div>
		</div>
	  </div>
	</div>
</form>	
</body>

