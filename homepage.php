<?php
session_start();
$_SESSION["self"] = $_SERVER["PHP_SELF"];
	include 'header1.html';
	include 'headercss.html';
	echo '
		body {
    margin: 0;
    font-family: sans-serif;
}

.hero{
    /* Sizing */
    width: 100vw;
    height: 60vh;
	margin-bottom:1%;
    
    /* Flexbox stuff */
    display: flex;
    justify-content: center;
    align-items: center;
    
    /* Text styles */
    text-align: center;
	color: white;
	
	/* Background styles */
	background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url("backgroundpic.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.hero1{
    /* Sizing */
    width: 100vw;
    height: 60vh;
	margin-bottom:1%;
    
    /* Flexbox stuff */
    display: flex;
    justify-content: center;
    align-items: center;
    
    /* Text styles */
    text-align: center;
	color: white;
	
	/* Background styles */
	background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url("aboutus.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.hero h1 {
    /* Text styles */
    font-size: 4.0em;
    
    /* Margins */
    margin-bottom: 0.5em;
}

.hero1 h1{
	/* Text styles */
    font-size: 2.0em;
    
    /* Margins */
    margin-bottom: 0.5em;
}
.zoomin{
	padding: 1px;
	transition: transform 1.5s;
}

.zoomAbt{
	padding: 0px;
	transition: transform 1.5s;
}

.zoomPic{
	transition: transform 0.2s;
}

.zoomPic:hover{
	transform: scale(1.1); 
	}

.zoomAbt:hover{
	-ms-transform: scale(1.2); /* IE 9 */
	-webkit-transform: scale(1.2); /* Safari 3-8 */
	transform: scale(1.2); 
	}

.zoomin:hover{
	-ms-transform: scale(1.2); /* IE 9 */
	-webkit-transform: scale(1.2); /* Safari 3-8 */
	transform: scale(1.2); 
}

.hero1 h3 {
	font-size: 20px;
	margin-top: 0;
    margin-bottom: 0.5em;
	margin-left:auto;
	margin-right:auto;
	text-align: center;
}
	
.hero .btn {
    /* Positioning and sizing */
    display: block;
    width: 200px;
    
    /* Padding and margins */
    padding: 1em;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
    
    /* Text styles */
    color: white; 
    text-decoration: none;
    font-size: 1.2em;
    
    /* Border styles */
    border: 3px solid white;
    border-radius: 20px;
	
	/* Background styles */
    background-color: rgba(0, 108, 240, 1);
}

.prev,
.next {
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -85px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(137, 184, 236, 1);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #000000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #ffffff;
  color: white;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

.container {
	padding: 16px;
	width: 80%;
	height:30%;
	margin-left:auto;
	margin-right:auto;
}
.img-container{
	margin-left:auto;
	margin-right:auto;
	border-radius: 50%;
	padding:10%;
}

.colleges{
	width:340px;
	height:250px;
	margin:2%;
	float:left;
	margin-bottom:5%;
}

.frameColleges{
	margin-left:10%;
}

.colleges h3{
	text-align:center;
	border: 1px solid black;
	font-size: 15px;
	background-color:white;
	padding:10px;
	width:328px;
	border-radius: 20px;
}

.textedit h4{
	font-size: 15px;
	margin-bottom: 30%;
	text-align:center;
	border: 1px solid black;
	background-color:white;
	padding:10px;
	width:328px;
	border-radius: 20px;
}
<------ College Picture  
.myImg{
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.myImg:hover {opacity: 0.7;}

.modal{
		display :none; /* Hidden by default */
		position: fixed;	/* Stay in place */
		padding-top: 150px; /* Location of the box */
		left:0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
		}
		
.modal-content{
				margin:auto;
				display:block;
				width: 80%;
				max-width: 700px;
			  }

#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

.modal-content, #caption{
						 -webkit-animation-name: zoom;
						 -webkit-animation-duration: 0.6s;
						 animation-name: zoom;
						 animation-duration: 0.6s;
						 }

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

.close{
	position:absolute;
	top:15px;
	right:35px;
	color: #f1f1f1;
	font-size: 40px;
	font-weight: bold;
	transition: 0.3s;
}

.close:hover,
.close:focus{
	color: #bbb;
	text-decoration:none;
	cursor:pointer;
}

@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
} -->
</style>
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
<br>

<!-- Another content -->
<div class="container">
<h2> Register here to begin your personalized research </h2> <p> Click for more information </p> <br>
</div>

<div class= "frameColleges">
<div class= "colleges">
<div class = "zoomPic">
<img src="intisubang.jpg" width="350px" height="240px">
<h3> Inti College Subang </h3>
</div>
</div>

<div class= "colleges">
<div class = "zoomPic">
<img src="intisubang.jpg" width="350px" height="240px">
<h3> Inti College Subang </h3>
</div>
</div>

<div class= "colleges">
<div class = "zoomPic">
<img src="intisubang.jpg" width="350px" height="240px">
<h3> Inti College Subang </h3>
</div>
</div>

<div class= "colleges">
	<div class = "zoomPic">
<img src="intisubang.jpg" width="350px" height="240px" style="margin-left:45%">
		<div class ="textedit" style="margin-left: 45%">
		<h4> Inti College Subang </h4>
		</div>
	</div>
</div>

<div class= "colleges">
	<div class = "zoomPic">
		<img src="intisubang.jpg" width="350px" height="240px" style="margin-left:75%">
			<div class ="textedit" style="margin-left: 75%">
				<h4> Inti College Subang </h4>
			</div>
	</div>
</div>
</div>
</body>

</html>';


?>