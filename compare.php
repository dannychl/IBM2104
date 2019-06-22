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

	$sql = "SELECT * FROM college";
	$result = $conn->query($sql);
	$id_from_database = [];
	while($row = $result->fetch_assoc())
	{
		$id_from_database[$row["id"]] = $row["name"];
	}
	

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

					::placeholder{
						color: #C2C2C2;
					}
					';
	//include ("header2.html");

$str = <<<EOD
</style>
</head>
<body>
<div class="container mt-5" style="height: 200px">
<h1 class="chgFontFamily" style="margin-top: 50px; font-family: arial"><a href="compare.php">Comparision</a></h1>
</div>

<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">

<form action="compare.php" method="get">

<button onclick="deleteTable()" type="button" class="btn btn-success mybutton">&#x2212</button>							
<button onclick="addTable()" type="button" class="btn btn-success mybutton" style="margin-left: 0px;">&#x2b</button>

<button type="submit" class="btn btn-success mybutton" style="width: 200px; height: 50px; border-radius: 20px">Compare</button>
<input type="hidden" name="compare" value="true">
</form>
<table>
<tr id="addTable">
</tr>

</table>

</div>

</body>
<script>
function addTable(){
document.getElementById("addTable").innerHTML += 
"<td><select name='collegeid'><?php {echo '<option value=$key>$value</option>'; }?></select></td>";
}

function deleteTable(){
document.getElementById("addTable").innerHTML = 
"<td>" +
"<select name='collegeid'>" +
"<option value='1'>INTI</option>" +
"<option value='2'>SEGI</option>" +
"<option value='3'>TARC</option>" +
"<option value='4'>Sunway</option>" +
"<option value='5'>Disted</option>" +
"</select>" +
"</td>";
}
</script>
</html>
EOD;

echo $str;
mysqli_close($conn);
?>