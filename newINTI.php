<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

  $id = $_GET['cid'];

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
  	die("Connection error". $conn->connect_error);
  }
  else{
    $sql = "SELECT * FROM college WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
      	echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
              <link rel="shortcut icon" type="image/jpg" href="icon.jpg"/>
              <title>'.$row["name"].'</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
              <script src="https://kit.fontawesome.com/9d2c85f7cd.js"></script>
              <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo@qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="crossorigin="anonymous"></script>
              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

              include('headercss.html');
              echo
              '.breadcrumb{
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

            include('header2.php');
            echo '                  
              <div class="container-fluid">
                <img src="'.$row["bannersource"].'" style="height: 400px;width: 100%">

                <div class="media" style="padding-left: 200px;">
                  <img src="'.$row["picsource"].'" class="align-self-bottom rounded-0 border shadow-sm" style="margin-top: -50px; width: 150px;">
                  <div class="media-body" style="margin: 10px">
                    <h3>'.$row["name"].'</h3>';
      }
    }

  $result = $conn->query("SELECT COUNT(*) AS noOfCourse FROM course WHERE college_id='$id'");
  $row = $result->fetch_assoc();
  $noOfCourse = $row['noOfCourse'];

    $sql = "SELECT * FROM college_detail WHERE college_id = '$id'";
    $result = $conn->query($sql);

  	if ($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()) {
        echo'<p>'.$row["location"].'</p>
                  </div>
                </div>
              </div><br>';
        if(isset($_SESSION["user_id"]))

        {
          echo '<script>localStorage.setItem("uID", '.$_SESSION["user_id"].');</script>';
          echo '<script>localStorage.setItem("cID", '.$_GET["cid"].');</script>';
          echo '
            <div class="container" style="background:rgba(207, 207, 207, 1)">
            <i class = "fa fa-star fa-2x" data-index="0"></i>
            <i class = "fa fa-star fa-2x" data-index="1"></i>
            <i class = "fa fa-star fa-2x" data-index="2"></i>
            <i class = "fa fa-star fa-2x" data-index="3"></i>
            <i class = "fa fa-star fa-2x" data-index="4"></i>
            </div><br>';
  
            include ("ratingscript.js");
          }
      	echo '
          <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Reviews</a>
              </li>
            </ul>
          </div><br>

          <div class="tab-content">
            <div id="home" class="container tab-pane active">
              <div class="container border shadow-sm">
                <h3 class="ml-2">Why Us?</h3>
                <div class="container ml-5 mr-5" style="width: auto">
                  <p>'.$row["description"].'</p>
                </div><br>

                <h3 class="ml-2">Overview</h3> 
                <div class="container">         
                  <table class="table table-bordered ml-5" style="width: 600px">
                  <tr>
                    <td><b>Rating</b></td>';
    $sql1 = $conn->query("SELECT collegeID FROM stars WHERE collegeID = ".$_GET['cid']."");
    $numR = $sql1->num_rows;

    $sql1 = $conn -> query("SELECT SUM(rateIndex) AS total FROM stars WHERE collegeID = ".$_GET['cid']."");

    $rData = $sql1-> fetch_array();
    $total = $rData['total'];

    if($numR == 0){
      $avg = 0;
    }
    else{
      $avg = $total / $numR;
    }                

          echo          '<td>'.(round($avg,2)).'</td>
                  </tr>
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
                    <td>'.$noOfCourse.'</td>
                  </tr>
                  </table>
                </div><br>
              </div><br>

              <div class="container border shadow-sm">
                <h3 class="ml-2">Gallery</h3>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px;">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ul>
                  
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="carousel-item-1.png" width="1100" height="800">
                    </div>
                    <div class="carousel-item">
                      <img src="carousel-item-2.png" width="1100" height="800">
                    </div>
                    <div class="carousel-item">
                      <img src="carousel-item-3.png" width="1100" height="800">
                    </div>
                  </div>
                  
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
              </div><br>

              <div class="container border shadow-sm">
                <h3 id="address" class="ml-2">Location</h3>
                <iframe frameborder="0" align="center" style="margin-bottom: 20px; width: 100%; height: 500px"
                  src="'.$row["map"].'"></iframe>
              </div><br>

              <div class="container border shadow-sm mb-5">
                <h3 class="ml-2">Request Information</h3> 
                <form class="ml-5 mr-5" style="width: auto">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Email">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control" id="nationality">
                          <option hidden>-----Nationality-----</option>
                          <option>Malaysian</option>
                          <option>Non-Malaysian</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control" id="nationality">
                          <option hidden>-----Course Name-----</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-check">
                    <label class="form-check-label">
                     <input type="checkbox" class="form-check-input" value="">By submitting this form, I agree to the terms & conditions.
                    </label>
                  </div>

                  <button type="button" class="btn btn-success">Request Now</button>
                </form><br>
              </div>
            </div>';       
    }
  }

  $sql = "SELECT * FROM course WHERE college_id = '$id'";
  $result = $conn->query($sql);
  
  echo '<div id="menu1" class="container tab-pane fade mb-5">';
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo '<div class="media border p-3">
                <div class="media-body">
                  <h4>'.$row["name"].'</h4>
                  <p>'.$row["level"].' | '.$row["duration"].' Months | RM '.$row["fee"].' | '.$row["mode"].'</p>
                </div>
                <button type="button" class="align-self-center btn btn-success">Apply Now</button>
              </div>';
      }
    }
  echo'</div>';

  

  $sql = "SELECT review.time, review.comment, user.username FROM review INNER JOIN user ON review.user_id = user.id WHERE college_id = '$id' ";
  $result = $conn->query($sql);
  
  echo '<div id="menu2" class="container tab-pane fade mb-5">';
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo '<div class="media border p-3">
                <img src="img_avatar3.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                  <h5>#'.$row["username"].'<small><i> added on '.$row["time"].'</i></small></h5 >
                  <p>'.$row["comment"].'</p>
                </div>
              </div>';
      }
    }
  if(isset($_SESSION["user_id"]))
  { 
  echo '<div class="media border p-3">
           <img src="img_avatar3.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
           <div class="media-body">
             <form action="addReview.php" method="post">
               <input type="hidden" name="id" value="'.$id.'">
               <input type="text" class="form-control" name="comment" placeholder="Enter your review here..." style="height: 100px">
               <button type="submit" class="float-sm-right btn btn-success">Submit</button>
             </form>
           </div>
         </div>';
   echo'</div>';
  }

if(isset($_SESSION["admin_loged_in"]))
    {
      if($_SESSION["admin_loged_in"])
      {
        echo '
          <form action="deleteCollege.php" method="post">
            <input type="hidden" name="id" value="'.$id.'">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        ';
      }
}

  echo'</div></body>';
}
 	$conn->close();
 ?>