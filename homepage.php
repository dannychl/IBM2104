<?php
session_start();
	$_SESSION["self"] = $_SERVER["PHP_SELF"];
	include 'header1.html';
	include 'headercss.html';
	include 'homepagecss.html';
	echo '
</head>
<body>';

include 'header2.php';

echo '<div class= "caption-container">
  <div class="mySlides">
  <section class="hero">
        <div class="hero-inner">
			<div class="zoomin">
            <h1>My Colleges Website</h1>
			</div>
			<div class="zoomin">
            <h2>Every College Decides Your Future</h2>
			</div>
            <a href="yp.php" class="btn">Start Now</a>
        </div>
	</div>
	</section>
	<div class="mySlides">
  <section class="hero1">
        <div class="hero-inner">
			<div class="zoomAbt"> 
				<h1> About Us </h1> 
			</div>
			<div class="container">
			<h3> Our mission is to move every student closer to day one at the college that’s right for them. 
			With the most current and complete profiles of every college in the Malaysia, 
			a multi-billion dollar scholarship database, advanced matching algorithms, and direct connections with colleges, 
			we get students from wherever they are now to their first day on campus. </h3> </div>
		</div>
	</div>
    </section>
	</div>
	<a class="prev" onclick="plusSlides(-1)"><</a>
	<a class="next" onclick="plusSlides(1)">></a>
 <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>
<br>';

if(isset($_SESSION["loged_in"]))
{	
	if(!$_SESSION["loged_in"])
		echo
	'<div class="container">
	<h2> Register here to begin your personalized research </h2> 
	<a href="signUp1.php" class="signUpbtn"> Click for more information </a><br>
	</div>';
}
else
{
	echo
	'<div class="container">
	<h2> Register here to begin your personalized research </h2> 
	<a href="signUp1.php" class="signUpbtn"> Click for more information </a><br>
	</div>';
}
echo
'<div class= "frameColleges">
<div class= "colleges">
<div class = "zoomPic">
<img src="intisubang.jpg" width="350px" height="240px">
<h3> Inti College Subang </h3>
</div>
</div>

<div class= "colleges">
<div class = "zoomPic">
<img src="SUNWAY-banner.jpg" width="350px" height="240px">
<h3> Sunway College </h3>
</div>
</div>

<div class= "colleges">
<div class = "zoomPic">
<img src="SEGI-banner.jpg" width="350px" height="240px">
<h3> SEGI College </h3>
</div>
</div>

<div class= "colleges">
	<div class = "zoomPic">
	
<img src="TARUC-banner.jpg" width="350px" height="240px" style="margin-left:45%">
		<div class ="textedit" style="margin-left: 45%">
		<h4> Tunku Abdul Rahman University College </h4>
		</div>
	</div>
</div>

<div class= "colleges">
	<div class = "zoomPic">
		<img src="DISTED-banner.jpg" width="350px" height="240px" style="margin-left:75%">
			<div class ="textedit" style="margin-left: 75%">
				<h4> DISTED College </h4>
			</div>
	</div>
</div>
</div>
<div style="padding-bottom: 650px"></div>';

include ("footer.html");


?>