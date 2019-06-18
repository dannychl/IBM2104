<?php
	echo   '<html>
			<head>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

			<!-- Popper JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<style>
				h4.chgFontFamily{
					font-family: times;
				}

				.rating {
				  unicode-bidi: bidi-override;
				  direction: rtl;
				}

				.rating > span {
				  display: inline-block;
				  position: relative;
				  width: 1.1em;
				}

				.rating > span:hover:before,
				.rating > span:hover ~ span:before {
				   content: "\2605";
				   position: absolute;
				}
			</style>

			</head>
			
			<body>
				<div class="container mt-5">
					<h2>Institutions</h2>
				</div>

				<div class="container" style="margin-top: 100px; margin-left: 100px;">
					<div class="row">
						<div class="col-md-4" style="width: 100%; margin-top: 150px">
							<div class="panel panel-primary" style="border-radius: 20px;">
								<div class="panel-heading" style="border-radius: 20px 20px 0px 0px; background-color: 53B949">
								<center><h4 class="chgFontFamily">Advanced Search</h4></center>
								</div>

								<div class="panel-body ml-5 mt-3">
								<h4>State: 
									<select name="state" style="margin-left: 20px; border-radius: 10px;">
									<option value="0">------State------</option>
									<option value="1">Kuala Lumpur</option>
									<option value="2">Penang</option>
									<option value="3">Perak</option>
									</select> 
								</h4>
								</div>

								<div class="panel-footer" style="border-radius: 0px 0px 20px 20px;">
									<center><button type="button" class="btn btn-success" style="height: 40px; width: 100px; border-radius: 18px;">Search <span class="fa fa-search"</span></button></center>
								</div>
							</div>
						</div>



						<div class="col-md-8" style="width: 60%;">
						  	<table class="table table-hover" style="margin-left: 200px;">
								<tbody>
								 	 <tr style="height: 150px;">
										<td style="width: 390px;"><img src="inti-logo.png" alt="Inti Logo" style="height: 100px; margin-top: 15px; margin-left: 15px;"></td>	
										<td><br>INTI International College Penang
										<br><span style="color: B7B7B7">Rating: 4.5</span>
										<br><span class="material-icons" style="color: B7B7B7; font-size: 20px;">place</span><span style="color: B7B7B7">Kuala Lumpur</span>
										<br><a href="new 2.php" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
								  	</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4"></div>
	
						<div class="col-md-8" style="width: 60%; margin-top: -200px;">
						  	<table class="table table-hover" style="margin-left: 200px;">
								<tbody>
								  	<tr style="height: 150px;">
									  	<td style="width: 390px;"><img src="segi.png" alt="SEGI Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
									  	<td><br>SEGI University & College
									  	<br><span style="color: B7B7B7">Rating: 4.5</span>
									  	<br><span class="material-icons" style="color: B7B7B7; font-size: 20px;">place</span><span style="color: B7B7B7">Penang</span>
									  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
								  	</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4"></div>
	
						<div class="col-md-8" style="width: 60%; margin-top: -10px;">
						  	<table class="table table-hover" style="margin-left: 200px;">
								<tbody>
								  	<tr style="height: 150px;">
									  	<td style="width: 390px"><img src="tarc.png" alt="TARC Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
									  	<td><br>Tunku Abdul Rahman University College
									  	<br><span style="color: B7B7B7">Rating: 4.5</span><br><span class="material-icons" style="color: B7B7B7; font-size: 20px;">place</span><span style="color: B7B7B7">Penang</span>
									  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
								  	</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4"></div>
	
						<div class="col-md-8" style="width: 60%; margin-top: 20px;">
						  	<table class="table table-hover" style="margin-left: 200px;">
								<tbody>
								  	<tr style="height: 150px;">
									  	<td style="width: 390px"><img src="sunway.png" alt="Sunway Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
									  	<td><br>Sunway College
									  	<br><span style="color: B7B7B7">Rating: 4.5</span><br><span class="material-icons" style="color: B7B7B7; font-size: 20px;">place</span><span style="color: B7B7B7">Penang</span>
									  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
								  	</tr>
								</tbody>
							</table>
						</div>
					</div>			   

					<div class="row">
						<div class="col-md-4"></div>
	
						<div class="col-md-8" style="width: 60%; margin-top: 20px;">
						  	<table class="table table-hover" style="margin-left: 200px;">
								<tbody>
								  	 <tr style="height: 150px;">
									  	<td style="width: 390px"><img src="disted.png" alt="Disted Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
									  	<td><br>Disted College
									  	<br><span style="color: B7B7B7">Rating: 4.5</span><br><span class="material-icons" style="color: B7B7B7; font-size: 20px;">place</span><span style="color: B7B7B7">Penang</span>
									  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
								  	</tr>
								</tbody>
							</table>
						</div>
					</div>			   
				</div>
			</body>

			</html>';

?>