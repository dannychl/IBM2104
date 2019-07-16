<?php
	session_start();

	$conn = new mysqli("localhost", "root", "", "project");

	if($conn->connect_error)
	{
		die("Cannot connect to the database". $conn->connect_error);
	}

	if(isset($_POST['promote']))
	{
		$sql = "UPDATE user SET admin = true WHERE id =".$_POST['promote'];
		$conn->query($sql);

		header("Location: userMaintenance.php#".$_POST['promote']);
	}
	else if(isset($_POST['demote']))
	{
		$sql = "UPDATE user SET admin = false WHERE id =".$_POST['demote'];
		$conn->query($sql);
		
		header("Location: userMaintenance.php#".$_POST['demote']);
	}
	else if((isset($_POST['delete'])))
	{
		$sql = "DELETE FROM stars WHERE userid =".$_POST['delete'];
		$conn->query($sql);
		$sql = "DELETE FROM review WHERE user_id =".$_POST['delete'];
		$conn->query($sql);
		$sql = "DELETE FROM user WHERE id =".$_POST['delete'];
		$conn->query($sql);
		
		header("Location: userMaintenance.php");
	}
	else
	{
		include ("header1.html");

		echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">';

		include ("headercss.html");

		echo '
		.outerContainer{
			width:1500px;
			margin:auto;
			border: 3px solid black;
			margin-top: 8%;
			margin-bottom:8%;
		}

		h1.chgFontFamily{
			text-align:center;
			font-size: 5.0em;
			font-family: aerial;
			background-color:rgba(191, 191, 191, 1);
			width: 89vw;
			text-shadow: 2px 2px 4px;
			text-decoration:none;
			color: #000;
		}

		.zoom{
			padding: 2px;
			transition: transform 1.0s;
		}

		.zoom:hover{
			-ms-transform: scale(1.2); /* IE 9 */
			-webkit-transform: scale(1.2); /* Safari 3-8 */
			transform: scale(1.2); 
		}
		</style>
		</head>
		<body class="change">';

		include ("header2.php");

		$sql = "SELECT * FROM user";
		$result = $conn->query($sql);
		echo '
		<div class= "zoom">
			<h1 class="chgFontFamily" style="margin: 80px 0px 0px 80px; margin-top:6% ; margin-bottom: -3%">User Maintenance</h1>
		</div>
		<div class= "outerContainer">
				<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px; width: 90%"
					<div class="container" style="margin: 170px 0px 0px 200px">
						<div class="row">
							<div class="col-md-8" style="width: 70%; right:130px;">
								<form action="userMaintenance.php" method="post">';

		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{	
				if($row["id"] != $_SESSION["user_id"])
				{
					if($row["admin"])
						$admin = "True";
					else
						$admin = "False";

					echo '

				    	<table class="table" style="margin: 50px 0px 0px 350px; border: 3px solid black">
							<tbody>
				    		<tr style="height: 150px;" id="'.$row["id"].'">
							  	<td style="width: 500px; padding: 20px 50px 35px 50px">
							  		<br>Name: ' . $row["name"] . '
							  		<br><br>Date Of Birth: '.$row["dob"].'<br><br>
							  		Admin: '.$admin.'
							  	</td>

							  	<td style="width: 100%;float: right; padding-top: 110px; margin-right: 50px">
							  		<button type="submit" name="promote" value='.$row["id"].' class="btn btn-success" style="margin-right: 20px">Promote</button>
							  		<button type="submit" name="demote" value='.$row["id"].' class="btn btn-warning" style="margin-right: 20px">Demote</button>
							  		<button type="submit" name="delete" value='.$row["id"].' class="btn btn-danger">Delete</button>
							  	</td>

						  	</tr></tbody></table>';
				}
			}
		}

		echo '
				</form></div></div>';

		$conn->close();
	}
?>