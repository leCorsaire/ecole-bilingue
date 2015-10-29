<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
		<meta name="viewport" width="device-width initial-scale="1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/s_login.css">
		<link rel="stylesheet" href="css/s_gen.css">
		<link rel="stylesheet" href="css/s_fonts.css">
		<link rel="stylesheet" href="css/s_colorful_theme.css">
	</head>
	<body>
		<div id="bloc">
		<?php
			include 'html_parts/header.php';
		?>
		<section id="bloc" class="fluid-container">
			<section class="row">
			<form class="col-xs-8 col-xs-offset-2" method="POST" action="espace.php">
				<h2>CONNEXION</h2>
				<p>IDENTIFIANT : <input class="form" type="text" id="username" name="username"></input></p>
				<p>MOT DE PASSE : <input type="password" id="passwd" name="passwd"></input></p>
				<input class="btn btn-primary" type="submit" value="Se connecter"></input>
				<?php
				if (isset($_GET['error']))
				{
					echo '<p>Mauvais identifiant ou mot de passe !</p>';
				}
			
				elseif (isset($_GET['missing']))
				{
					echo '<p>Veuillez entrer un identifiant et un mot de passe.</p>';
				}
				?>
			</form>
			</section>
		</section>
		<section class="fluid-container">
		<?php
			include 'html_parts/footer.php'
		?>
		</section>
		</div>
	<body>
</html>