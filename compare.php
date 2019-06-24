<?php

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
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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

					td{
						width: 200px; 
						height: 100px; 
						margin: 20px 20px 20px 20px;
						font-size: 20px;
						text-align: center;
					}

					::placeholder{
						color: #C2C2C2;
					}
					';
	include ("header2.html");

	echo '
				</style>
				</head>
				<body>
				<div class="container mt-5" style="height: 200px">
				<h1 class="chgFontFamily" style="margin-top: 50px; font-family: arial"><a href="compare.php">Comparision</a></h1>
				</div>

				<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">


				<table border=2 style="margin: 80px 50px 20px 50px">
				<tr>
				<td style="width: 200px; height: 100px"></td>';
				$sql = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'college'";
				$result = $conn->query($sql);

				while($col = $result->fetch_assoc()){
					echo "<td><center>".$col['COLUMN_NAME']."</center></td>";
				}
				echo "</tr>";


				$sql = "SELECT * FROM college";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc())
				{
					echo '	<tr>
								<td><img src="'.$row["picsource"].'" style="width: 200px; height: 100px; margin: 20px 20px 20px 20px;"></td>
								<td>'.$row["id"].'</td>
								<td>'.$row["name"].'</td>
								<td>'.$row["location"].'</td>
								<td>'.$row["rating"].'</td>
								<td>'.$row["picsource"].'</td
								<td>'.$row["altimg"].'</td>
							</tr>';
				}
					
	echo'		
				</table>
				</div>
				</body>
				</html>';



mysqli_close($conn);
?>