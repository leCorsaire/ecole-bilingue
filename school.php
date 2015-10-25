<?php
	$bdd = new PDO('mysql:host=localhost;dbname=ecolebilingue;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>

<!DOCTYPE>
<html>
	<head>
		<title>Ecole</title>
		<meta charset="utf-8">
		<meta name="viewport" width="device-width">
		<link rel="stylesheet" href="css/s_fonts.css">
		<meta name="viewport" width="device-width initial-scale="1">
		<link rel="stylesheet" href="bootstrap/css/normalize.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/s_gen.css">
		<link rel="stylesheet" href="css/s_school.css">
	</head>
	<body>
		<section class="container-fluid">
	<header class="row">	
		<a href="index.php"><img id="banner" src="img/banner.png" alt="banner"></a>
	</header>

			<section id="bloc" class="row">
		
		<?php /* Zone de renvoi CKeditor */
			
			$content = $bdd->query('SELECT content FROM content WHERE id=1');
			$print_content = $content->fetch();
			
			echo '<section class="content col-xs-12"><p>' . $print_content['content'] . '</p></section>';
			
		?> 
		
		</section>
		<?php include 'html_parts/footer.php'; ?>
	</body>
</html>