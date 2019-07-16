<?php
	session_start();
	function validate($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	if(isset($_POST['added_course']))
	{
		$_SESSION["self"] = $_SERVER["PHP_SELF"];
		//$target_dir = "Image/";
		$course_name = validate($_POST['course_name']);
		$mode = validate($_POST['mode']);
		$level = validate($_POST['level']);
		$duration = validate($_POST['duration']);
		$fee = validate($_POST['fee']);
		$id = validate($_POST['id']);

		$conn = new mysqli("localhost", "root", "", "project");

		if ($conn->connect_error) 
		{
			die("Connection failed: ".$conn->connect_error);
		}
		else
		{
			$sql = "INSERT INTO course (course_id, name, mode, level, duration, fee, college_id) VALUES ('','$course_name', '$mode', '$level', '$duration', '$fee', '$id')";

			 if ($conn->query($sql)) {
      			echo"
   		   		<script>
   		   		alert('Added');
   		   		location.href='newINTI.php?cid=$id';
  		   		</script>";
  		  	 }
   			 else {
      			echo"<script>
      			alert('Error');
      			location.href='newINTI.php?cid=$id';
      			</script>";
    		 }
		}
	}
	else
	{
		$id = $_POST['id'];

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
			<body style="background-color: #E5E5E5">';

		include 'header2.php';

		echo '
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h5>
			<div class="col-6" style="background-color: white; margin: 0px 80px 80px 400px; padding-top: 5px; padding-bottom: 50px; box-shadow: 3px 3px">
				<a href="addCourse.php"><h1 class="chgFontFamily" style="margin: 50px 0px 0px 265px">Add Course</h1></a>
				<form action="addCourse.php" method="post" enctype="multipart/form-data" style="margin: 100px 0px 0px 130px; background-color: white">

					<div class="spacing">Course Name: <input type="text" name="course_name" required style="margin-left: 83px"><br></div>

					<div class="spacing">Mode: 
						<select name="mode" style="margin-left: 152px; width: 223px">
							<option value="Full-Time">Full-Time</option>
							<option value="Part-Time">Part-Time</option>
						</select>
					</div>

					<div class="spacing">Level: 
						<select name="level" style="margin-left: 159px; width: 223px">
							<option value="Degree">Degree</option>
							<option value="Diploma">Diploma</option>
						</select>
					</div>

					<div class="spacing">Duration: 
						<select name="duration" style="margin-left: 126px; width: 223px">
							<option value=18>18 months</option>
							<option value=24>24 months</option>
							<option value=36>36 months</option>
						</select>
					</div>

					<div class="spacing">Fee: <input type="text" name="fee" required style="margin-left: 175px"><br></div>

					<button type="submit" class="btn btn-success" style="margin-left: 200px; padding-left: 20px; padding-right: 20px">Add Course</button>

					<input type="hidden" name="id" value="'.$id.'">
					<input type="hidden" name="added_course" value="true">		
				</form>
			</div>
			</h5>';

		include ("footer.html");
	}
?>