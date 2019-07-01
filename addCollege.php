<?php
	session_start();
	if(isset($_POST['added_college']))
	{
		$target_dir = "Image/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$alt_img = $_POST['alt_img'];
		$college_name = $_POST['college_name'];
		$location = $_POST['location'];

		$uploadOk = true;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["added_college"])) 
		{
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) 
		    {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = true;
		    } 
		    else 
		    {
		       // echo "File is not an image.";
		        $uploadOk = false;
		    }
		}
		// Check if file already exists
		/*if (file_exists($target_file)) 
		{
		    echo "Sorry, file already exists.";
		    $uploadOk = false;
		}*/
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) 
		{
		    echo "Sorry, your file is too large.";
		    $uploadOk = false;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) 
		{
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = false;
		}
		// Check if $uploadOk is set to false by an error
		if ($uploadOk == false) 
		{
		    echo "Sorry, your file was not uploaded.";
		} 
		// if everything is ok, try to upload file
		else 
		{
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		    {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		        $conn = new mysqli("localhost", "root", "", "testing");

				if ($conn->connect_error) 
				{
					die("Connection failed: ".$conn->connect_error);
				}

				$sql = "INSERT INTO college (name, location, picsource, altimg) VALUES ('$college_name', '$location', '$target_file', '$alt_img')";
				
				if($conn->query($sql))
				{
					echo '
					<script>window.alert("Successfuly Added")
					location.href="addCollege.php"</script>';
				}
			} 
		    else 
		    {
		        echo "Sorry, there was an error uploading your file.";
		    }
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
				<form action="addCollege.php" method="post" enctype="multipart/form-data">
				    <div class="spacing">Select image to upload:
				    <input type="file" name="fileToUpload" id="fileToUpload"><br></div>
				
					<!--information-->
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