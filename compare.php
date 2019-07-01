<?php
	session_start();
	$_SESSION["self"] = $_SERVER["PHP_SELF"];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testing";

	//start connection with sql
	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error)
	{
	    die("Connection failed: " . $conn->connect_error);
	}

	//$id_from_database = [];
	/*while($row = $result->fetch_assoc())
	{
		$id_from_database[$row["id"]] = $row["name"];
	}*/
	

	/*foreach ($id_from_database as $key => $value) {
		echo "The name for ".$key." is ".$value."<br>";
	}*/


	include ("header1.html");
	echo   '
				<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<!-- Popper JS -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
				
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

	include ("headercss.html");
	echo '							
					button.mybutton{
						width: 50px;
						height: 50px;
						margin: 50px 0px 0px 50px;
					}

					td.setCenter{
						width: 200px; 
						height: 100px; 
						margin: 20px;
						font-size: 20px;
						text-align: center;
					}

					.table_border{
						border-collapse: separate;
						border-spacing:;
					}

					::placeholder{
						color: #C2C2C2;
					}
					
					</style>
					</head>
					<body class="change">';
	include ("header2.php");

	echo '
				</style>
				</head>
				<body>
				<div class="container mt-5" style="height: 200px">
				<h1 class="chgFontFamily" style="margin-top: 50px; font-family: arial"><a href="compare.php">Comparision</a></h1>
				</div>

				<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">


				<table border=2 align="center" class="table_border" style="margin-top: 80px; margin-bottom: 20px;" >
				<tr>
				<td style="width: 200px; height: 100px"></td>
					<td class="setCenter">Rating</td>
					<td class="setCenter">Type</td>
					<td class="setCenter">Intake</td>
					<td class="setCenter">Location</td>
					<td class="setCenter">Course</td>';
				//$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'college'";
				/*$sql = "SELECT college.name, college_details.type, college_details.intake, college_details.location FROM college_details INNER JOIN college ON college_details.college_id = college.id;";
				$result = $conn->query($sql);

				while($col = $result->fetch_assoc()){
					echo "<td><center>".$col['COLUMN_NAME']."</center></td>";
				}*/
				echo "</tr>";


				$sql = "SELECT college.id, college.picsource, college.rating, college_details.type, college_details.intake, college_details.location FROM college_details INNER JOIN college ON college_details.college_id = college.id";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc())
				{
					echo '	<tr>
								<td class="setCenter"><img src="'.$row["picsource"].'" style="width: 250px; height: 100px; margin: 20px 20px 20px 20px;"></td>
								<td class="setCenter">'.$row["rating"].'</td>
								<td class="setCenter">'.$row["type"].'</td>
								<td class="setCenter">'.$row["intake"].'</td>
								<td class="setCenter">'.$row["location"].'</td>
								<td style="margin: 20px; font-size: 20px; padding-left: 30px">';
					$sql1 = "SELECT course.course_name FROM course INNER JOIN college ON course.college_id = college.id";
					$result1 = $conn->query($sql1);
					$i = 0;
					while($row1 = $result1->fetch_assoc())
					{
						echo ''.$row1["course_name"].'<br>';
						$i++;
						if($i==2)
						{
							echo '<a href="college.php?id='.$row["id"].'">More...</a>';
						}
					}
								
					echo '</td></tr>';
				}
					
	echo'		
				</table>
				</div>
				</body>
				</html>';



mysqli_close($conn);
?>