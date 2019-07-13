<?php
	session_start();

	$conn = new mysqli("localhost", "root", "", "project");

	if($conn->connect_error)
	{
		die("Cannot connect to the database". $conn->connect_error);
	}



	if(isset($_GET['promote']))
	{
		$sql = "UPDATE user SET admin = true WHERE id =".$_GET['promote'];
		$conn->query($sql);

		header("Location: userMaintenance.php");
	}
	else if(isset($_GET['demote']))
	{
		$sql = "UPDATE user SET admin = false WHERE id =".$_GET['demote'];
		$conn->query($sql);
		
		header("Location: userMaintenance.php");
	}
	else if((isset($_GET['delete'])))
	{
		$sql = "DELETE FROM user WHERE id =".$_GET['delete'];
		$conn->query($sql);
		
		header("Location: userMaintenance.php");
	}
	else
	{
		include ("header1.html");

		echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">';

		include ("headercss.html");

		echo '
				</style>
				</head>
				<body class="change">';

		include ("header2.php");

		$sql = "SELECT * FROM user";
		$result = $conn->query($sql);

		echo '<br><br><br><br><br>';
		echo '
				<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px; width: 90%"
					<div class="container" style="margin: 100px 0px 0px 200px">
						<div class="row">
							<div class="col-md-8" style="width: 60%; right:80px;">
								<form>';

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
				    	<table class="table" style="margin: 50px 0px 0px 350px; border: 2px solid black">
							<tbody>
				    		<tr style="height: 150px;">
							  	<td style="width: 500px; padding: 20px 50px 35px 50px">
							  		<br>Username: ' . $row["username"] . '
							  		<br><br>Name: '.$row["firstname"].' '.$row["lastname"].'<br><br>
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
				</form></div>';
	}
?>