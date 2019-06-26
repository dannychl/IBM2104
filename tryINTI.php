<?php
  echo '<!DOCTYPE html>
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
        </head>
        <body>         
          <ul class="breadcrumb ml-5">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Institution</a></li>
            <li class="breadcrumb-item active">INTI</a></li>
          </ul>

          <div class="container-fluid">
            <img src="INTI-banner.jpg" style="width: 100%">

            <div class="media" style="padding-left: 200px;">
              <img src="INTI-logo.jpg" class="align-self-bottom rounded-0 border shadow-sm" style="margin-top: -50px; width: 150px;">
              <div class="media-body" style="margin: 10px">
                <h3>INTI International College Penang</h3>
                <p>Penang | ***** | Reviews</p>
              </div>
            </div>
          </div><br>

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

            <!-- Tab panes -->
          <div class="tab-content">
            <div id="home" class="container tab-pane active">
              <div class="container border shadow-sm">
                <h3 class="ml-2">Why INTI?</h3>
                <div class="container ml-5 mr-5" style="width: auto">
                  <p>INTI International University is located at Putra Nilai, Negeri Sembilan. Once known as the INTI University College, their partnership with the Laureate International Universities allows the once university college an upgrade to full university status in 2010. The university now offers a wide range of programmes ranging from pre-university and foundation studies to postgraduate degrees. INTI has a total of 6 campuses throughout Malaysia. Under the partnership with the Laureate International Universities, students at INTI IU are provided an international exposure as courses will be learned together with international students and guests lecturers from across the world. INTI students can opt for a full semester abroad in one of the Laureate Institutions as they study in INTI.</p>
                </div><br>

              <h3 class="ml-2">Overview</h3> 
                <div class="container">         
                  <table class="table table-bordered ml-5" style="width: 600px">
                  <tr>
                    <td><b>Institute Type</b></td>
                    <td>Private College</td>
                  </tr>
                  <tr>
                    <td><b>Intake</b></td>
                    <td>January, April, May, August</td>
                  </tr>
                  <tr>
                    <td><b>Campus Location</b></td>
                    <td>Penang</td>
                  </tr>
                  <tr>
                    <td><b>No. of Courses Available</b></td>
                    <td>TBC</td>
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
                <h3 class="ml-2">Location</h3>
                <iframe frameborder="0" align="center" style="margin-bottom: 20px; width: 100%; height: 500px"
                  src="https://maps.google.it/maps?q=INTI International College Penang&output=embed"></iframe>
              </div><br>

              <div class="container border shadow-sm">
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
            </div>

            <div id="menu1" class="container tab-pane fade">
              <div class="container border shadow-sm">
                <h3 class="ml-2">Courses</h3>
                <div class="row m-5">
                  <div class="col-sm-6">
                    Jump To:
                    <select class="center" name="area" style="width: 200px">
                      <option hidden>Area of Study</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    Filter By:
                    <select class="center" name="level" style="width: 200px">
                      <option hidden>Level of Study</option>
                    </select>
                  </div>
                </div>
                <div class="container mt-3">
                  <div class="media border p-3">
                    <div class="media-body">
                      <h4>Bachelor Of Information Technology (University Of Wollongong, Uow)</h4>
                      <p>36 Months | RM 79,500 | Full Time | Jan</p>
                    </div>
                    <button type="button" class="align-self-center btn btn-success">Apply Now</button>
                  </div>
                  <div class="media border p-3">
                    <div class="media-body">
                      <h4>Bachelor Of Computer Science (University Of Wollongong, Uow)</h4>
                      <p>36 Months | RM 79,500 | Full Time | Jan</p>      
                    </div>
                    <button type="button" class="align-self-center btn btn-success">Apply Now</button>
                  </div>
                  <div class="media border p-3">
                    <div class="media-body">
                      <h4>Bachelor Of Computer Science (Hons) In Network & Mobile Computing</h4>
                      <p>36 Months | RM 58,470 | Full Time | Jan, May & Aug</p>      
                    </div>
                    <button type="button" class="align-self-center btn btn-success">Apply Now</button>
                  </div>
                  <div class="media border p-3">
                    <div class="media-body">
                      <h4>Bachelor Of Business Information Technology (Hons)</h4>
                      <p>36 Months | RM 58,470 | Full Time | Jan</p>      
                    </div>
                    <button type="button" class="align-self-center btn btn-success">Apply Now</button>  
                  </div>
                </div>
              </div>
            </div>

            <div id="menu2" class="container tab-pane fade">
              <div class="container border shadow-sm">
                <h3 class="ml-2">Reviews</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>
            </div>
          </div><br>
';
?>