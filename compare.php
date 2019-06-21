<?php
	include ("header1.html");
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
	include ("headercss.html");
	echo '							
					::placeholder{
						color: #C2C2C2;
					}
					';
	include ("header2.html");

	echo '
				
				
				
					<div class="container mt-5" style="height: 200px">
						<h1 class="chgFontFamily" style="margin-top: 50px; font-family: arial"><a href="compare.php">Comparision</a></h1>
					</div>
					
					<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">

						<form action="compare.php" method="get">
							<input type="hidden" name="compare" value="true">
							<button type="submit" class="btn btn-success" style="margin: 50px 0px 0px 50px; width: 200px; height: 50px; border-radius: 20px">Compare</button>
						</form>

					</div>
					
				</body>

				</html>';

?>