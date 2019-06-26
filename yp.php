<?php
	session_start();
	if(isset($_GET['searched']) && !empty($_GET['search_content']))
	{
		$search_content = trim($_GET['search_content']);
		$_SESSION["search_content"] = $search_content;

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "testing";

		//start connection with sql
		$conn = new mysqli($servername, $username, $password, $dbname);

		//check connection
		if($conn->connect_error)
		{
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM college WHERE UPPER(name) LIKE UPPER('%$search_content%') OR UPPER(location) LIKE UPPER('%$search_content%') OR rating = '$search_content'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
			{
				include ('collegeSearchTillTableTag.php');
			    // output data of each row
			    while($row = $result->fetch_assoc()) 
			    {
			    	echo '
			    	<table class="table table-hover zoomin" style="margin-left: 200px; margin-top: 30px; border: 2px solid black">
						<tbody>
				    		<tr class="clickable-row" data-href="college.php?id='.$row["id"].'" style="height: 150px;">
							  	<td style="width: 390px"><img src="'. $row["picsource"] .'" alt="' . $row["altimg"] . '" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
							  	<td><br>' . $row["name"] . '
							  	<br><span style="color: #B7B7B7">Rating: ' . $row["rating"] . '</span><br><span class="material-icons" style="color: #B7B7B7; font-size: 20px;">place</span><span style="color: #B7B7B7">' . $row["location"] . '</span>
							  	<br><a href="college.html" class="btn btn-success" style="margin-top: 10px; float: right;" title="See More">See More --></a></td>
						  	</tr>
						  </tbody>
					</table>';

			       /* echo "id: " . $row["id"]. "<br>Name: " . $row["name"]. "<br>Location: " . $row["location"]. "<br>Rating: " . $row["rating"] . "<br>Pic Source: " . $row["picsource"] . "<br>";*/
			    }  

			    include ('collegeSearchEndTag.html');
			} 
			else
			{
			    
			    echo"	<script>
			    			window.alert('No target found');
			    		</script>";

			    include ('collegeSearch.php');
			}

			mysqli_close($conn);

	}
	else
	{
		include ('collegeSearch.php');
	}
	

?>