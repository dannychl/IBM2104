<?php
	session_start();
	$_SESSION["self"] = $_SERVER["PHP_SELF"];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

	//start connection with sql
	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error)
	{
	    die("Connection failed: " . $conn->connect_error);
	}

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
						font-family:Sans-serif;
						text-align: center;
						border:2px solid;
					}

					td.setCenterZoom{
						width: 200px; 
						height: 100px; 
						margin: 20px;
						font-size: 20px;
						font-weight:bold;
						font-family:Sans-serif;
						text-align: center;
						border:2px solid;
						padding: 1px;
						transition: transform 1.0s;
					}

					td.setCenterZoom:hover{
						-ms-transform: scale(1.2); /* IE 9 */
						-webkit-transform: scale(1.2); /* Safari 3-8 */
						transform: scale(1.2); 
					}

					.table_border{
						border-collapse: separate;
						border-spacing:;
					}

					::placeholder{
						color: #C2C2C2;
					}

					.chgFontFamily{
						text-align:center;
						font-size: 5.0em;
						font-family: aerial;
						background-color:rgba(191, 191, 191, 1);
						width: 89vw;
						text-shadow: 2px 2px 4px;
						margin-left: -130px;
						text-decoration:none;
						 color: #000;
					}

					a.chgFontFamily{
						text-decoration:none;
					}

					.zoomin{
						padding: 1px;
						transition: transform 1.0s;
					}

					.zoomin:hover{
						-ms-transform: scale(1.2); /* IE 9 */
						-webkit-transform: scale(1.2); /* Safari 3-8 */
						transform: scale(1.2); 
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
				<div class="zoomin">
				<h1 class="chgFontFamily" style="margin-top: 50px;">Comparison</a></h1>
				</div></div>

				<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">


				<table border=2 align="center" class="table_border" style="margin: 80px 0px 20px 100px" >
				<tr>
				<td style="width: 200px; height: 100px ;border:2px solid"></td>
					<td class="setCenter"><b>Rating</b></td>
					<td class="setCenter"><b>Type</b></td>
					<td class="setCenter"><b>Intake</b></td>
					<td class="setCenter"><b>Location</b></td>
					<td class="setCenter"><b>Course</b></td>
				</tr>';


				$sql = "SELECT college.id, college.picsource, college_detail.type, college_detail.intake, college_detail.location FROM college_detail INNER JOIN college ON college_detail.college_id = college.id";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc())
				{
					$sql1 = $conn->query("SELECT collegeID FROM stars WHERE collegeID = ".$row["id"]."");
				    $numR = $sql1->num_rows;

				    $sql1 = $conn -> query("SELECT SUM(rateIndex) AS total FROM stars WHERE collegeID = ".$row["id"]."");

				    $rData = $sql1-> fetch_array();
				    $total = $rData['total'];

				    if($total!=0)
				    {
				    	$avg = $total / $numR;
				    }
				    else
				    {
				    	$avg = 0;
				    }
					echo '	<tr>
								<td class="setCenter"><img src="'.$row["picsource"].'" style="width: 100px; height: 100px; margin: 20px 20px 20px 20px;"></td>
								<td class="setCenter">'.round($avg,2).'</td>
								<td class="setCenter">'.$row["type"].'</td>
								<td class="setCenter">'.$row["intake"].'</td>
								<td class="setCenterZoom"><a href="newINTI.php?cid='.$row["id"].'#address">'.$row["location"].'</a></td>
								<td class="setCenterZoom">';
					$sql1 = "SELECT COUNT(DISTINCT course_id) FROM course INNER JOIN college ON course.college_id = ".$row["id"]."";
					$result1 = $conn->query($sql1);

					while($row1 = $result1->fetch_assoc())
					{
						echo '<a href="newINTI.php?cid='.$row["id"].'">'.$row1["COUNT(DISTINCT course_id)"].'</a>';
					}
								
					echo '</td></tr>';
				}
					
	echo'		
				</table>
				</div>';
	include("footer.html");



mysqli_close($conn);
?>