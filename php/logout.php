<?php
	session_start();
	session_destroy();
	echo "<script>window.location = 'register.php'</script>";
	echo "Logged out";
?>
