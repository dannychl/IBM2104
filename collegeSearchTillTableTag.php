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
					}

					::placeholder{
						color: #C2C2C2;
					}
					';

		include ('header2.html');
		echo '
				
				
				
					<div class="container mt-5" style="height: 200px">
						<h1 class="chgFontFamily" style="margin-top: 50px"><a href="yp.php">College</a></h1>
					</div>

					<div style="background-color: white; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">

						<div>
							<form action="yp.php" method="get">
								<input type="text" name="search_content" style="margin: 100px 0px 0px 310px; width: 50%; height: 40px; border-width: 2px; border-style: solid;" placeholder=" ' . $_SESSION["search_content"] . '">
								<button type="submit" class="btn btn-success" style="height: 40px; width: 100px; border-radius: 18px;" title="Search">Search <span class="fa fa-search"</span></button<br>
								<input type="hidden" name="searched" value="true">
							</form>
						</div>

						<div class="container" style="margin: 100px 0px 0px 200px">
							<div class="row">
								<div class="col-md-8" style="width: 60%; right:80px">
								  	<table class="table table-hover" style="margin-left: 200px; margin-top: 30px;">
										<tbody>';
?>