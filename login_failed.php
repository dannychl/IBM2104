<?php
	session_start();
	$_SESSION["loged_in"] = false;
	$_SESSION["admin_loged_in"] = false;
	echo '
			<script>window.alert("Email not exist, please go to register.")
			location.href="'.$_SESSION["self"].'"</script>';
?>
