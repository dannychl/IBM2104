<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";
//jibai
  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
  	die("Connection error". $conn->connect_error);
  }

  if(isset($_POST['id'])){
  $id = $_POST['id'];

  $sql = "DELETE FROM college_detail WHERE college_id='$id'";
  $conn->query($sql);
  $sql = "DELETE FROM course WHERE college_id='$id'";
  $conn->query($sql);
  $sql = "DELETE FROM review WHERE college_id='$id'";
  $conn->query($sql);
 	$sql = "DELETE FROM stars WHERE collegeID='$id'";
 	$conn->query($sql);
 	$sql = "DELETE FROM college WHERE id='$id'";
 	$conn->query($sql);    
			      echo"
			      <script>
			      alert('Deleted');
			      location.href='yp.php?';
			      </script>";
  }
  else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>