<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "project");

	if($conn->connect_error)
	{
		die("Cannot connect to the database". $conn->connect_error);
	}

	include ("header1.html");
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
			<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px"
				<div class="container" style="margin: 100px 0px 0px 200px">
					<div class="row">
						<div class="col-md-8" style="width: 60%; right:80px">';

	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
			echo '
		    	<table class="table" style="margin-left: 200px; margin-top: 30px; border: 2px solid black">
					<tbody>
		    		<tr style="height: 150px;">
					  	<td style="width: 200px"><br>Username: ' . $row["username"] . '
					  	<br>Name: '.$row["firstname"].' '.$row["lastname"].'</td>
				  	</tr></tbody></table>';
			echo $row['email'];
			echo '<br>'. $row['admin'].'<br>';
		}
	}

	echo '
			</div>';
?>