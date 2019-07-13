<?php
	session_start();
	$_SESSION["loged_in"] = false;
	$_SESSION["admin_loged_in"] = false;
	unset($_SESSION["user_id"]);
	echo '
		<script>window.alert("Logged Out")
		location.href="'.$_SESSION["self"].'"</script>';
?>