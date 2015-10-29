<?php
	$bdd = new PDO('mysql:host=localhost;dbname=ecolebilingue;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
	session_start();
	session_destroy();
?>

<!DOCTYPE>
<html>
	<head>
		<title>Ecole bilingue Perpignan - Accueil</title>
		<meta charset="utf-8">
		<meta name="viewport" width="device-width initial-scale="1">
		<link rel="stylesheet" href="bootstrap/css/normalize.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/s_gen.css">
		<link rel="stylesheet" href="css/s_fonts.css">
		<link rel="stylesheet" href="css/s_index.css">
		<link rel="stylesheet" href="css/s_colorful_theme.css">
		<script src="jquery/jquery.js"></script>
	</head>
	<body>
		
			<?php
				include 'html_parts/header.php';
			?>
		<section id="container-fluid">
			<nav id="m_navigation" class="row">
				<section id="m_school" class="col-xs-12"><a href="#">ÉCOLE</a></section>
				<section id="m_diploma" class="col-xs-12"><a href="#">FORMATION</a></section>
				<section id="m_elearning" class="col-xs-12"><a href="#">e-LEARNING</a></section>
			</nav>
		</section>
			
			<nav id="menu_extended"> <!-- Englobe le menu sur sa largeur -->
				<section id="menu">
					<section id="school">
						<p class="en_tete_section">ÉCOLE</p>
						<div id="school_cadre" class="cadre">
							<p class="desc">De 3 à 11 ans, l'école accueille votre enfant pour un parcours scolaire en immersion.<br /><br />
							Suivi et encadré par des professionnels, c'est dans une ambiance sereine qu'il évoluera à son rythme.</p>
							<a href="school.php"><img src="img/linkbutton.png" alt="linkbutton"></a>
						</div>
						<img class="box" src="img/school.png" alt="school">
					</section>
					
					<section id="formation">
						<p class="en_tete_section">FORMATION</p>
						<div id="formation_cadre" class="cadre">
							<p class="desc">Vous souhaitez devenir professeur des écoles, notre établissement est centre de formation bilingue.<br /><br />
							Découvrez nos offres de formation dès 16 ans. 
							</p>
							<a href="formation.php"><img src="img/linkbutton.png" alt="linkbutton"></a>
						</div>
						<img class="box" src="img/diploma.png" alt="diploma">
					</section>
					
					<section id="e-learning">
						<p class="en_tete_section">e-LEARNING</p>
						
						<div id="e_learning_cadre" class="cadre">
							<p class="desc">Parce que notre volonté est que l'éducation soit ouverte à tous, nous sommes également centre d'apprentissage en ligne.<br /><br />
							Découvrez tous nos cours en ligne.</p>
							<a href="http://localhost:8888/ecole_bi_lingue/default/0.1.1/e-learning/"><img src="img/linkbutton.png" alt="linkbutton"></a>
						</div>
						<img class="box" src="img/elearning.png" alt="e-learning">
					</section>
				</section>
			</nav>
			
			<iframe sandbox="allow-scripts" src="../0.1.3/blog/index.php">
			</iframe>
			
			<nav id="login_mail">
				<a href="login.php"><img class="icon" id="login" src="img/icons/login_mail/login_icon.png" alt="login icon"></a>
				<img class="icon" id="mail" src="img/icons/login_mail/mail_icon.png">
			</nav>
			<nav id="social">
				<img class="icon" src="img/icons/social_0/facebook.png" alt="facebook">
				<img class="icon" src="img/icons/social_0/twitter.png" alt="twitter">
				<img class="icon" src="img/icons/social_0/g+.png" alt="google+">
				<img class="icon" src="img/icons/social_0/youtube.png" alt="youtube">
				<img class="icon" src="img/icons/social_0/wordpress.png" alt="wp">
			</nav>
			
			<?php
				include 'html_parts/footer.php';
			?>
			
	</body>	
	
	<script>
		$(function() {	
			/*$(".select-section").on({mouseover: function(){$(this).animate({opacity: 0.5}, function callback(){})}, mouseout: function(){$(this).animate({opacity: 1}, function callback(){})} });*/
			
		});
						
	</script>
	
</html>