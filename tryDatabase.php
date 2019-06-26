<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM course WHERE college_id = '1' ";
  $result = $conn->query($sql);

  echo'<!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Bootstrap 4 Website Example</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <style>
          .breadcrumb{
            background-color: transparent;
            margin: 0;
            padding: 0;
          }
          .btn-success{
            margin: 10px;
          }
          .carousel-inner img{
            width: 100%;
            height: 100%;
          }
          .carousel-indicators li{
            box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5);    
          }
          .container{
            background-color: transparent;
            padding: 0;
          }
          .container-fluid{
            background-color: transparent;
            padding: 0;
          }
          .container-info{
            background-color: transparent;
            padding: 0;
          }
          .form-check-label{
            margin: 10px;
          }
          .form-group{
            margin: 10px;
          }
          </style>
        </head>';


  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo'<div class="media border p-3">
             <div class="media-body">
               <h4>'.$row["course_name"].'</h4>
               <p>'.$row["level"].' | '.$row["duration"].' Months | RM '.$row["fee"].' | '.$row["mode"].'</p>
              </div>
              <button type="button" class="align-self-center btn btn-success">Apply Now</button>
          </div>';
    }
  }

  $conn->close();
?>