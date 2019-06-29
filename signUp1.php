<?php 
	echo'
	<head>
	<link rel="stylesheet" type="text/css" href="signUp.css">
	</head>
	<body>
	<h1>SignUp Form</h1>
<form action="Registration.php" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" name="username" placeholder="Enter Username" >    
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" >
    
	<label for="phone"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number (e.g 012-34567890)" name="phone" >   
	
	<label for="dateOfBirth"><b>Date Of Birth: (DD-MM-YYYY)</b></br></label>
    
		<td>
		<select name=\"day\">
			for ($day = 1; $day <= 31; $day++){
			<option value=\"$day\">$day</option>"
		}
		</select>
								
		<select name=\"month\">
			for ($month = 1; $month <= 12; $month++){
			<option value=\"$month\">$month</option>
		}
		</select>
								
		<select name=\"year\">
			for ($year = 1900; $year <= 2019; $year++){
		<option value=\"$year\">$year</option>
		}
		</select>
		</td>
		
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
      <button type="button" class="cancelbtn" onclick="location.href =login11.php">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>	</body>'
?>	
