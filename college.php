<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "testing";

  $id = $_GET['id'];
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM college_details WHERE college_id = '$id'";
  $result = $conn->query($sql);

  include 'header1.html';

  echo'
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';

  include 'headercss.html';        

  echo'    .breadcrumb{
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
          </head>
          <body>';
          

 include 'header2.php';


  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo'<div class="container border shadow-sm">
                <h3 class="ml-2">Why INTI?</h3>
                <div class="container ml-5 mr-5" style="width: auto">
                  <p>'.$row["description"].'</p>
                </div><br>

                <h3 class="ml-2">Overview</h3> 
                <div class="container">         
                  <table class="table table-bordered ml-5" style="width: 600px">
                  <tr>
                    <td><b>Institute Type</b></td>
                    <td>'.$row["type"].'</td>
                  </tr>
                  <tr>
                    <td><b>Intake</b></td>
                    <td>'.$row["intake"].'</td>
                  </tr>
                  <tr>
                    <td><b>Campus Location</b></td>
                    <td>'.$row["location"].'</td>
                  </tr>
                  <tr>
                    <td><b>No. of Courses Available</b></td>
                    <td>'.$row["no_of_course"].'</td>
                  </tr>
                  </table>
                </div><br>
              </div><br>

              <div class="container border shadow-sm">
                <h3 class="ml-2">Location</h3>
                <iframe frameborder="0" align="center" style="margin-bottom: 20px; width: 100%; height: 500px"
                  src="'.$row["map"].'"></iframe>
              </div><br>
               
               
               
              
              </body>';
    }
  }

  $conn->close();
?>