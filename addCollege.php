<?php
	if(isset($_GET['added_college']))
	{
		$logo_source = $_GET['logo_source'];
		$alt_img = $_GET['alt_img'];
		$college_name = $_GET['college_name'];
		$location = $_GET['location'];

		$conn = new mysqli("localhost", "root", "", "testing");

		if ($conn->connect_error) 
		{
			die("Connection failed: ".$conn->connect_error);
		}

		$sql = "INSERT INTO college (name, location, picsource, altimg) VALUES ('$college_name', '$location', '$logo_source', '$alt_img')";
		
		if($conn->query($sql))
		{
			echo '<script>window.alert("Successfuly Added")</script>';
		}
	}
	else
	{
		include 'header1.html';
		echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
		include 'headercss.html'; 

		echo '
			.spacing
			{
				margin-bottom: 10px;
			}
			</style>
			</head>
			<body class="change">';

		include 'header2.php';

		echo '
			<div class="container mt-5" style="height: 200px">
				<h1 class="chgFontFamily" style="margin-top: 50px"><a href="addCollege.php">College</a></h1>
			</div>

			<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">
				<form action="addCollege.php" method="get">
					<div class="spacing">Logo Source: <input type="text" name="logo_source" required><br></div>
					<div class="spacing">Alternate Image Name: <input type="text" name="alt_img" required><br></div>
					<div class="spacing">College Name: <input type="text" name="college_name" required><br></div>
					<div class="spacing">Location: <input type="text" name="location" required><br></div>
					<button type="submit" class="btn btn-success">ADD</button>
					<input type="hidden" name="added_college" value="true">		
				</form>
			</div>
		</body>';
	}
?>