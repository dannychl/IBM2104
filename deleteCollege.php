<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
  	die("Connection error". $conn->connect_error);
  }

  $id = $_POST['id'];
 
  $sql = "DELETE FROM college_detail WHERE college_id='$id'";
  if ($conn->query($sql) === TRUE) {
    $sql = "DELETE FROM course WHERE college_id='$id'";
    if ($conn->query($sql) === TRUE) {
    	$sql = "DELETE FROM review WHERE college_id='$id'";
 		if ($conn->query($sql) === TRUE) {
 			$sql = "DELETE FROM stars WHERE collegeID='$id'";
 			if ($conn->query($sql) === TRUE) {
 				$sql = "DELETE FROM college WHERE id='$id'";
 				if ($conn->query($sql) === TRUE) {    
			      echo";
			      <script>
			      alert('Deleted');
			      location.href='yp.php?';
			      </script>";
			  	}
			}
		}
    }
  }
  else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>