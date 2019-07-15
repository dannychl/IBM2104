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
  else{
    $uid = $_SESSION['user_id'];
    $cid = $_POST['id'];
    $comment = $_POST['comment'];
    $time = date("y-m-d");

    $sql = "INSERT INTO review (time, comment, college_id, user_id)
            VALUES ('$time', '$comment', '$cid', '$uid');";

    if ($conn->query($sql)) {
      echo"
      <script>
      alert('Added');
      location.href='newINTI.php?cid=$cid';
      </script>";
    }
    else {
      echo"<script>
      alert('Error');
      location.href='newINTI.php?cid=$id';
      </script>";
    }

    $conn->close();

  }
?>