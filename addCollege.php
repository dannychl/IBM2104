<?php
	session_start();
	if(isset($_POST['added_college']))
	{
		$_SESSION["self"] = $_SERVER["PHP_SELF"];
		//$target_dir = "Image/";
		$target_file1 = /*$target_dir . */basename($_FILES["fileToUpload1"]["name"]);
		$target_file2 = /*$target_dir . */basename($_FILES["fileToUpload2"]["name"]);
		$target_file3 = /*$target_dir . */basename($_FILES["fileToUpload3"]["name"]);
		$alt_img = $_POST['alt_img'];
		$college_name = $_POST['college_name'];
		$location = $_POST['location'];
		$type = $_POST['type'];
		$intake = $_POST['intake'];
		$maplink = $_POST['maplink']."&output=embed";
		$description = $_POST['description'];

		$uploadOk = false;
		$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
		$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
		$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["added_college"])) 
		{
		    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
		    if($check !== false) 
		    {
		    	$check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
		    	if($check !== false)
		        {
		        	$check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
			    	if($check !== false)
			        {
			        	//echo "File is an image - " . $check["mime"] . ".";
	    		        $uploadOk = true;
			       	}
		       	}
		    }
		}

		if ($_FILES["fileToUpload1"]["size"] > 500000) 
		{
		    echo "Sorry, your file is too large.";
		    $uploadOk = false;
		}
		else if ($_FILES["fileToUpload2"]["size"] > 500000) 
		{
		    echo "Sorry, your file is too large.";
		    $uploadOk = false;
		}
		else if ($_FILES["fileToUpload3"]["size"] > 500000) 
		{
		    echo "Sorry, your file is too large.";
		    $uploadOk = false;
		}

		// Allow certain file formats
		if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
		&& $imageFileType1 != "gif" ) 
		{
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = false;
		}

		if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
		&& $imageFileType2 != "gif" ) 
		{
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = false;
		}

		if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
		&& $imageFileType3 != "gif" ) 
		{
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = false;
		}
		

		// Check if $uploadOk is set to false by an error
		if ($uploadOk == false) 
		{
		   	die("Failed to add the college");
		} 
		// if everything is ok, try to upload file
		else 
		{
		    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1) &&move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) 
		    {
		        $conn = new mysqli("localhost", "root", "", "project");

				if ($conn->connect_error) 
				{
					die("Connection failed: ".$conn->connect_error);
				}

				$sql = "INSERT INTO college (name, picsource, bannersource, altimg, logo_source) VALUES ('$college_name', '$target_file1', '$target_file2', '$alt_img', '$target_file3')";
				
				if($conn->query($sql))
				{
					$sql = "SELECT id FROM college ORDER BY id DESC LIMIT 1";
					if($conn->query($sql))
					{
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						$tempID = $row["id"];

						$result1 = $conn->query("SELECT detail_id FROM college_detail ORDER BY detail_id DESC LIMIT 1");
						$row1 = $result1->fetch_assoc();
						$tempID1 = $row1["detail_id"] + 1;

						$sql = "INSERT INTO college_detail (detail_id, description, type, intake, location, map, college_id) VALUES ('$tempID1', '$description', '$type', '$intake', '$location','$maplink', '$tempID')";
						if($conn->query($sql))
						{
							echo '
							<script>window.alert("Successfuly Added")
							location.href="addCollege.php"</script>';
						}
					}					
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
				<a href="addCollege.php"><h1 class="chgFontFamily" style="margin: 50px 0px 0px 265px">Add College</h1></a>
				<form action="addCollege.php" method="post" enctype="multipart/form-data" style="margin: 100px 0px 0px 130px; background-color: white">
				    <div class="spacing">Picture Source:
				    <input type="file" name="fileToUpload1" id="fileToUpload" required style="margin-left: 80px"><br></div>

				    <div class="spacing">Banner Source:
				    <input type="file" name="fileToUpload2" id="fileToUpload" required style="margin-left: 80px"><br></div>

				    <div class="spacing">Logo Source:
				    <input type="file" name="fileToUpload3" id="fileToUpload" required style="margin-left: 98px"><br></div>

					<div class="spacing">Alternate Image Name: <input type="text" name="alt_img" required style="margin-left: 6px"><br></div>

					<div class="spacing">College Name: <input type="text" name="college_name" required style="margin-left: 83px"><br></div>

					<div class="spacing">Location: <input type="text" name="location" required style="margin-left: 133px"><br></div>

					<div class="spacing">Type: 
						<select name="type" style="margin-left: 168px">
							<option value="Private College">Private</option>
							<option value="Public College">Public</option>
						</select>
					</div>

					<div class="spacing">Intake: <input type="text" name="intake" required style="margin-left: 155px"></div>

					<div class="spacing">Map Link: <input type="text" name="maplink" required style="margin-left: 127px"></div>

					<div class="spacing">Description: </div>

					<div><textarea class="spacing" name="description" rows="10" cols="50" placeholder="Description goes here..."></textarea></div>

					<button type="submit" class="btn btn-success" style="margin-left: 200px; padding-left: 20px; padding-right: 20px">ADD</button>
					<input type="hidden" name="added_college" value="true">		
				</form>
			</div>
			</h5>
		</body>';
	}
?>