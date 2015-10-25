<?php
	
	session_start();
	
	if (isset($_SESSION['connexion']))
	{
	
	}
	
	else
	{
		session_destroy();
		echo '<script>window.location.href="login.php?missing"</script>';
	}	
?>