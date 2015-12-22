<?php
	$bdd = new PDO('mysql:host=localhost;dbname=ecolebilingue;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	include 'resources/session_check.php';
?>

<!DOCTYPE>
<html>
	<head>
		<title>Modifier le site</title>
		<meta charset="utf-8">
		<meta name="viewport" width="device-width">
		<link rel="stylesheet" href="css/s_editing.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/s_fonts.css">
		<link rel="stylesheet" href="css/s_gen.css">
		<link rel="stylesheet" href="css/s_colorful_theme.css">
		<script src="ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<?php
			include 'html_parts/header.php';
		?>
		
			<section id="bloc" class="container-fluid">
		
			<button class=" row btn btn-default" id="back"><a href="espace.php">< Retour</a></button>
			


			
			<section class="row">
			<form class="col-lg-6" method="POST" action="resources/editing_treatment.php" id="editing">	
			<?php
		
			for ($id_content=1; $id_content<=3; $id_content++)
			{
						
			$content = $bdd->query('SELECT content FROM content WHERE id='. $id_content .'');
			$print_content = $content->fetch();
			
			echo '<section class="edit_area">
					<textarea class="textarea ckeditor"
					name="content_'. $id_content .'"
					id="content_'. $id_content .'"
					form="editing">
					'.$print_content['content'].'
					</textarea>
					</section>';
			};

			?>
				
				<input class="btn btn-primary" id="update" type="submit" value="Mettre à jour"></input>
			</form>
			
			<iframe class="col-lg-6" src="pydio/index.php">
			</iframe>
			
			</section>
			</section>
			
		
		<?php
			include 'html_parts/footer.php';
		?>
		
		
	</body>
</html>