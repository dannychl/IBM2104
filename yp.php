<?php
	session_start();
	$_SESSION["self"] = $_SERVER["PHP_SELF"];
	if(isset($_GET['searched']) && !empty($_GET['search_content']))
	{
		$search_content = trim($_GET['search_content']);

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project";

		//start connection with sql
		$conn = new mysqli($servername, $username, $password, $dbname);

		//check connection
		if($conn->connect_error)
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT DISTINCT college.id, college.name, college.logo_source, college.altimg, college_detail.location
			FROM ((college
			INNER JOIN college_detail ON college.id = college_detail.college_id)
			INNER JOIN course ON college.id = course.college_id)
			WHERE UPPER(course.name) LIKE UPPER('%$search_content%') OR UPPER(college.name) LIKE ('%$search_content%') OR UPPER(college_detail.location) LIKE UPPER('%$search_content%');";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
			{
				include ('collegeSearchTillTableTag.php');
			    // output data of each row
			    while($row = $result->fetch_assoc())
			    {
			    	$sql1 = $conn->query("SELECT collegeID FROM stars WHERE collegeID = ".$row["id"]."");
				    $numR = $sql1->num_rows;

				    $sql1 = $conn -> query("SELECT SUM(rateIndex) AS total FROM stars WHERE collegeID = ".$row["id"]."");

				    $rData = $sql1-> fetch_array();
				    $total = $rData['total'];
				    if($numR == 0){
				      $avg = 0;
				    }
				    else{
				      $avg = $total / $numR;
				    }  

			    	echo '
			    	<table class="table table-hover zoomin" style="margin-left: 200px; margin-top: 30px; border: 2px solid black">
						<tbody>
				    		<tr class="clickable-row" data-href="newINTI.php?cid='.$row["id"].'" style="height: 150px;">
							  	<td style="width: 390px"><img src="'. $row["logo_source"] .'" alt="' . $row["altimg"] . '" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
							  	<td><br>' . $row["name"] . '
							  	<br><span style="color: #B7B7B7">Rating: ' . (round($avg,2)) . '</span><br><span class="material-icons" style="color: #B7B7B7; font-size: 20px;">place</span><span style="color: #B7B7B7">' . $row["location"] . '</span>
							  	<br><a href="newINTI.php" class="btn btn-success" style="margin-top: 10px; float: right;" title="See More">See More --></a></td>
						  	</tr>
						  </tbody>
					</table>';
			    }  

			    echo '
					</div>
					</div>			   
					</div>
					</div>';
				include ("footer.html");
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