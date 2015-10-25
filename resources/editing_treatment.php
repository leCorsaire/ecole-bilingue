<?php

	$bdd = new PDO('mysql:host=localhost;dbname=ecolebilingue;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	

	session_start();
	
	for ($id_content=1; $id_content<=3; $id_content++)
	{		
		$new_content = $_POST['content_'. $id_content .''];
		
		$update = $bdd->prepare('UPDATE content SET content = :content WHERE id ='. $id_content .'');
		
		$update->execute(array(
		'content' => $new_content
		));
	}
?>

	<script>window.location.href="http://localhost:8888/ecole_bi_lingue/default/0.1.3/espace.php";</script>