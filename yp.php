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
			
			<style>
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


				<div class="container" style="margin-top: 100px; margin-left: 100px;">
					<div class="row">

						<div class="col-md-4 mt-5" style="width: 100%">
							<div class="panel panel-primary">
								<div class="panel-heading">
								<center><h4>Advanced Search</h4></center>
								</div>

								<div class="panel-body ml-5 mt-3">
								<h4>State: 
									<select name="state">
									<option value="0">State</option>
									</select> 
								</h4>
								</div>

								<div class="panel-footer">
								</div>
							</div>
						</div>



						<div class="col-md-8" style="width: 60%">
						  <table class="table table-hover" style="margin-left: 200px;">
								<tbody>
								  <tr style="height: 150px;">
									<td><img src="inti-logo.png" alt="Inti Logo" style="height: 100px; margin-top: 15px; margin-left: 15px;"></td>	
									<td><br><br>INTI International College Penang
									<br><span class="rating" style="margin-right: 250px;">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</span>	
									<br><a href="new 2.php">See More...</a></td>
								  </tr>

								  <tr style="height: 150px;">
								  	<td><img src="segi.png" alt="SEGI Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
								  	<td><br><br>SEGI University & College
								  	<br><span class="rating" style="margin-right: 250px;">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</span>	
								  	<br><a href="https://www.google.com">See More...</a></td>
								  </tr>

								   <tr style="height: 150px;">
								  	<td><img src="tarc.png" alt="TARC Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
								  	<td><br><br>Tunku Abdul Rahman University College
								  	<br><span class="rating" style="margin-right: 250px;">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</span>	
								  	<br><a href="https://www.google.com">See More...</a></td>
								  </tr>

								   <tr style="height: 150px;">
								  	<td><img src="sunway.png" alt="Sunway Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
								  	<td><br><br>Sunway College
								  	<br><span class="rating" style="margin-right: 250px;">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</span>	
								  	<br><a href="https://www.google.com">See More...</a></td>
								  </tr>

								  <tr style="height: 150px;">
								  	<td><img src="disted.png" alt="Disted Logo" style="height: 100px; margin-top: 18px; margin-left: 15px;"></td>
								  	<td><br><br>Disted College
								  	<br><span class="rating" style="margin-right: 250px;">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</span>	
								  	<br><a href="https://www.google.com">See More...</a></td>
								  </tr>
								  
								</tbody>
						  </table>
						  </table>
						</div>
					</div>
				</div>
			</body>
			</html>'

?>