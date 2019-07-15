<?php
include('header1.html');

		echo   '
				<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<!-- Popper JS -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
				
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				
				<script>
				jQuery(document).ready(function($) {
				    $(".clickable-row").click(function() {
				        window.location = $(this).data("href");
				    });
				});
				</script>
				';

		include('headercss.html');
		echo '			h4.chgFontFamily{
						font-family: times;
					}

					h1.chgFontFamily{
						text-align:center;
						font-size: 5.0em;	
						font-family: aerial;
						background-color:rgba(191, 191, 191, 1);
						width: 89vw;
						text-shadow: 2px 2px 4px;
						margin-left: -130px;
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

					.zoomin{
						padding: 100px;
						transition: transform 0.3s;
					}

					.zoomin:hover{
						
						transform: scale(1.1); 
					}
					
					</style>
					</head>
					<body class="change">';

		include ('header2.php');
		echo '
				
				
				
					<div class="container mt-5" style="height: 200px">
						<h1 class="chgFontFamily" style="margin-top: 50px"><a href="yp.php">College</a></h1>
					</div>

					<div style="background-color: #f0f0f0; margin: 0px 80px 80px 80px; padding-top: 5px; padding-bottom: 50px">

						<div>
							<form action="yp.php" method="get">
								<input type="text" name="search_content" style="margin: 100px 0px 0px 310px; width: 50%; height: 40px; border-width: 2px; border-style: solid;" placeholder=" ' . $search_content. '">
								<button type="submit" class="btn btn-success" style="height: 40px; width: 100px; border-radius: 18px;" title="Search">Search <span class="fa fa-search"</span></button<br>
								<input type="hidden" name="searched" value="true">
							</form>
						</div>

						<div class="container" style="margin: 100px 0px 0px 200px">
							<div class="row">
								<div class="col-md-8" style="width: 60%; right:80px">';
?>