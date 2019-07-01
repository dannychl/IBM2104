<?php
	session_start();
	$_SESSION["loged_in"] = false;
	$_SESSION["admin_loged_in"] = false;
	echo '
		<script>window.alert("Logged Out")
		location.href="homepage.php"</script>';
?>