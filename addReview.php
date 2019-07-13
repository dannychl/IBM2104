<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
  	die("Connection error". $conn->connect_error);
  }
  else{
    $id = $_POST['id'];
    $comment = $_POST['comment'];
    $time = date("y-m-d");

    $sql = "INSERT INTO review (time, comment, college_id)
            VALUES ('$time', '$comment', '$id');";

    if ($conn->query($sql)) {
      echo"
      <script>
      alert('Added');
      window.location.href='newINTI.php?id=$id';
      </script>";
    }
    else {
      echo"<script>alert('Error');</script>";
      echo mysqli_error($conn);
    }

    $conn->close();

  }
?>