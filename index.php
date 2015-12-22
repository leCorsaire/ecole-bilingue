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
			<nav id="m_navigation">
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
							<p class="desc">Pour les 3-11 ans, un projet d'école primaire bilingue basé sur une pédagogie active où l'enfant évolue à son rythme.<br /><br />
							Découvrez le projet associatif, éducatif et pédagogique.</p>
							<a href="school.php"><img src="img/linkbutton.png" alt="linkbutton"></a>
						</div>
						<img class="box" src="img/school.png" alt="school">
					</section>
					
					<section id="formation">
						<p class="en_tete_section">FORMATION</p>
						<div id="formation_cadre" class="cadre">
							<p class="desc">Un projet de formation innovante d'enseignants en alternance.<br /><br />
							Mise en place d'un parcours professionnel et diplomant dès 16 ans.
							</p>
							<a href="formation.php"><img src="img/linkbutton.png" alt="linkbutton"></a>
						</div>
						<img class="box" src="img/diploma.png" alt="diploma">
					</section>
					
					<section id="e-learning">
						<p class="en_tete_section">e-LEARNING</p>
						
						<div id="e_learning_cadre" class="cadre">
							<p class="desc">Afin de promouvoir les connaissance à l'heure de l'internet pour tous, une plateforme de MOOC et cours en ligne spécialisés sur l'éducation.<br /><br />
							Découvrez le site web des cours en ligne.</p>
							<a href="http://localhost:8888/ecole_bi_lingue/default/0.1.1/e-learning/"><img src="img/linkbutton.png" alt="linkbutton"></a>
						</div>
						<img class="box" src="img/elearning.png" alt="e-learning">
					</section>
				</section>
			</nav>
			
			<nav id="login_mail">
				<a href="login.php"><img class="icon" id="login" src="img/icons/login_mail/login_icon.png" alt="login icon"></a>
				<img class="icon" id="mail" src="img/icons/login_mail/mail_icon.png">
			</nav>
			<nav id="social">
				<a href="http://facebook.com/ecolebilingueperpignan/"><img class="icon" src="img/icons/social_0/facebook.png" alt="facebook"></a>
				<img class="icon" src="img/icons/social_0/twitter.png" alt="twitter">
				<img class="icon" src="img/icons/social_0/g+.png" alt="google+">
				<img class="icon" src="img/icons/social_0/youtube.png" alt="youtube">
				<a href="blog/index.php"><img class="icon" src="img/icons/social_0/wordpress.png" alt="wp"></a>
			</nav>
			
			<iframe sandbox="allow-scripts" src="../0.1.3/blog/index.php">
			</iframe>
			
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