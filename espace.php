<?php
	$bdd = new PDO('mysql:host=localhost;dbname=ecolebilingue;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
	session_start();
	
			
	if (isset($_SESSION['connexion']))
	{
		
	}
	
	else
	{	
		include 'resources/set_session_espace.php';
	}
?>

<!DOCTYPE>
<html>
	<head>
		<title>Espace personnel</title>
		<meta charset="utf-8">
		<meta name="viewport" width="device-width initial-scale="1">
		<link rel="stylesheet" href="bootstrap/css/normalize.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/s_gen.css">
		<link rel="stylesheet" href="css/s_espace.css">
		<link rel="stylesheet" href="css/s_fonts.css">
		<link rel="stylesheet" href="css/s_colorful_theme.css">
		<script src="jquery/jquery.js"></script>
	</head>
	<body>
			<?php
				include 'html_parts/header.php';
			?>
		<section id="bloc" class="container-fluid">
			<nav class="row">
				<a href="editing.php"><button class="btn btn-default"><span class="blue">Editer les contenus</span></button></a>
				<a href="blog/wp-login.php"><button class="btn btn-default"><span class="blue">Editer le blog</span></button></a>
				<a href="resources/session_destroy.php"><button class="btn btn-default"><span class="red">Déconnexion</span></button></a>
			</nav>	
		</section>			
			<?php
			
			print_r($_SESSION);
			
				include 'html_parts/footer.php';
			?>
		
	</body>
</html>