<?php
include('header1.html');

		echo   '
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
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

		include('headercss.html');
		echo '			h4.chgFontFamily{
						font-family: times;
					}

					h1.chgFontFamily{
						font-family: arial;
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
					}';

		include ('header2.html');
		echo '
				
				
				
					<div class="container mt-5" style="height: 200px">
						<h1 class="chgFontFamily" style="margin-top: 50px"><a href="yp.php">College</a></h1>
					</div>

					<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">

						<div>
							<form action="yp.php" method="get">
								<input type="text" name="search_content" style="margin: 100px 0px 0px 310px; width: 50%; height: 40px; border-width: 2px; border-style: solid;">
								<button type="submit" class="btn btn-success" style="height: 40px; width: 100px; border-radius: 18px;">Search <span class="fa fa-search"</span></button<br>
								<input type="hidden" name="searched" value="true">
							</form>
						</div>

						<div class="container" style="margin: 100px 0px 0px 200px">
							<div class="row">
								<div class="col-md-8" style="width: 60%; right:80px">
								  	<table class="table table-hover" style="margin-left: 200px; margin-top: 30px;">
										<tbody>
										 	 <tr style="height: 150px;">
												<td style="width: 390px;"><img src="inti-logo.png" alt="Inti Logo" style="height: 100px; margin-top: 15px; margin-left: 15px;"></td>	
												<td><br>INTI International College Kuala Lumpur
												<br><span style="color: #B7B7B7 ;">Rating: 4.5</span>
												<br><span class="material-icons" style="color: #B7B7B7; font-size: 20px;">place</span><span style="color: #B7B7B7">Kuala Lumpur</span>
												<br><a href="new 2.php" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
										  	</tr>
										
										  	<tr style="height: 150px;">
											  	<td style="width: 390px;"><img src="segi.png" alt="SEGI Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
											  	<td><br>SEGI University & College
											  	<br><span style="color: #B7B7B7">Rating: 4.5</span>
											  	<br><span class="material-icons" style="color: #B7B7B7; font-size: 20px;">place</span><span style="color: #B7B7B7">Penang</span>
											  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
										  	</tr>
										
										  	<tr style="height: 150px;">
											  	<td style="width: 390px"><img src="tarc.png" alt="TARC Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
											  	<td><br>Tunku Abdul Rahman University College
											  	<br><span style="color: #B7B7B7">Rating: 4.5</span><br><span class="material-icons" style="color: #B7B7B7; font-size: 20px;">place</span><span style="color: #B7B7B7">Penang</span>
											  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
										  	</tr>
										
										  	<tr style="height: 150px;">
											  	<td style="width: 390px"><img src="sunway.png" alt="Sunway Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
											  	<td><br>Sunway College
											  	<br><span style="color: #B7B7B7">Rating: 4.5</span><br><span class="material-icons" style="color: #B7B7B7; font-size: 20px;">place</span><span style="color: #B7B7B7">Penang</span>
											  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
										  	</tr>
										
										  	 <tr style="height: 150px;">
											  	<td style="width: 390px"><img src="disted.png" alt="Disted Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
											  	<td><br>Disted College
											  	<br><span style="color: #B7B7B7">Rating: 4.5</span><br><span class="material-icons" style="color: #B7B7B7; font-size: 20px;">place</span><span style="color: #B7B7B7">Penang</span>
											  	<br><a href="https://www.google.com" class="btn btn-success" style="margin-top: 10px; float: right;">See More --></a></td>
										  	</tr>
										</tbody>
									</table>
								</div>
							</div>			   
						</div>
					</div>
				</body>

				</html>';
?>