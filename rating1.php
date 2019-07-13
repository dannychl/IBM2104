<?php	
session_start();

	$conn = new mysqli('localhost', 'root', '','project');
	if(isset($_POST['save']))
	{
		$uID = $conn->real_escape_string($_POST['uID']);
		$ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
		$ratedIndex++;


		$checkCollege = $_GET['id'];
		$checkUser = $_GET['cid'];

		$result = $conn->query("SELECT * FROM stars WHERE collegeID = $checkCollege AND userID = $checkUser");
			if ($result->num_rows == 0){
				$conn->query("INSERT INTO stars(rateIndex, collegeID, userID) VALUES ('$ratedIndex', ' $checkCollege', '$checkUser')");
				$sql =$conn->query(" SELECT collegeID FROM stars ORDER BY id DESC LIMIT 1");
				$uData = $sql->fetch_assoc();
				$uID = $uData['collegeID'];
			}
			else
			{	
				if($conn->query("UPDATE stars SET rateIndex = '$ratedIndex' WHERE collegeID = $checkCollege AND userID = $checkUser")){
					echo "success";
				}
				else
					echo "failed".$conn->error;
			}
		
		exit(json_encode(array('id' => $uID)));
	}	

	$sql = $conn->query("SELECT collegeID FROM stars WHERE collegeID = ".$_GET['id']."");
	$numR = $sql->num_rows;

	$sql = $conn -> query("SELECT SUM(rateIndex) AS total FROM stars WHERE collegeID = ".$_GET['id']."");

	$rData = $sql-> fetch_array();
	$total = $rData['total'];

	$avg = $total / $numR;
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<meta name ="viewport"
		content="width-device-width, user-scalable = no, initial-scale= 1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv"X-UA-Compatible" content="ie-edge">
	<title>Rating System</title>
	<script src="https://kit.fontawesome.com/9d2c85f7cd.js"></script>
</head>
<style>
.fa-star{
	text-shadow: 3px 3px 10px grey;
	font-size: 25px;
}

</style>
<body>
	<h2> Rating System </h2>
	<div align="center" style="background:rgba(207, 207, 207, 1); border-radius: 10px;margin-left:-1%; margin-top:-0.5%; width: 180px; padding:5px;">
		<i class = "fa fa-star fa-2x" data-index="0"></i>
		<i class = "fa fa-star fa-2x" data-index="1"></i>
		<i class = "fa fa-star fa-2x" data-index="2"></i>
		<i class = "fa fa-star fa-2x" data-index="3"></i>
		<i class = "fa fa-star fa-2x" data-index="4"></i>
		<br><br>
		<?php
		echo "Average Rating: ";
		echo (round($avg,2));
		echo '<script>localStorage.setItem("cID", '.$_GET["cid"].');</script>';
		?>
	</div>
	<script 
		src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo@qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="crossorigin="anonymous">
	</script>
	<script>
		var ratedIndex = -1;
		var cID =0;
		$(document).ready(function(){
			resetStarColors();
			
			if(localStorage.getItem('ratedIndex')!= null){
				setStars(parseInt(localStorage.getItem('ratedIndex')));
				cID = localStorage.getItem('cID');
			}
			
			$('.fa-star').on('click', function(){
				ratedIndex = parseInt($(this).data('index'));
				localStorage.setItem('ratedIndex', ratedIndex);
				alert("haha" + cID);
				saveToTheDB();
			});
			
			$('.fa-star').mouseover(function(){
				resetStarColors();
				var currentIndex = parseInt($(this).data('index'));
				setStars(currentIndex);
			});
		
			$('.fa-star').mouseleave(function(){
				resetStarColors();
				
				if (ratedIndex !=-1)
						setStars(ratedIndex);
			});
		});
		function saveToTheDB(){
			$.ajax({
				url:"rating2.php?uid="+$_SESSION['user_id']+"&cid=" + cid,
				method: "POST",
				dataType: 'json',
				data: {
					save: true,
					uID: uID,
					ratedIndex: ratedIndex
				}, success :function(r){
					uID = r.id;
					localStorage.setItem('uID',uID);
				}
				});
		}
		
		function setStars(max){
			for (var i=0; i<=max; i++)
				$('.fa-star:eq('+i+')').css('color', 'yellow');
		}
		function resetStarColors(){
			$('.fa-star').css('color','white');
		}
	</script>
</body>
</html>