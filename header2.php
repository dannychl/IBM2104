<div class="navigate"> 
   <a href="homepage.php"><img class="logo" src="icon.jpg" style="margin: 15px 0px 0px 50px;"></a>
<form action="yp.php" method="get">
<nav>
<ul>
    <li><a href="homepage.php" style="text-decoration: none; color: white;">Home</a></li> 
	
	<li><a href="yp.php" style="text-decoration: none; color: white;">College</a></li>

	<li><a href="compare.php" style="text-decoration: none; color: white;">Comparision</a></li>
	<li><a href="events.html" style="text-decoration: none; color: white;">About Us</a></li>
	<li><a href="project.html" style="text-decoration: none; color: white;">Rate/Review</a></li>
	<?php 
		if(isset($_SESSION["loged_in"]))
		echo '<li><a href="https://www.google.com" style="text-decoration: none; color: white;">Add College</a></li>';
	?>
	<a href="signUp1.php"><button type="button">Register</button></a>
	<a href="login11.php"><button type="button">Login</button></a>
	<button type="submit" style="background-color: green;"><span class="fa fa-search"></span></button>
	<input type="text" name="search_content" placeholder="Search..."/> 
	<input type="hidden" name="searched" value="true">
</ul>
</nav>
</form>
</div>