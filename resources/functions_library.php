
<?php		
		function edit($_SESSION['id_content'])
		{
		
			$id_content = $_SESSION['id_content'];
			
			$content = $bdd->query('SELECT content FROM index_content WHERE id='. $id_content .'');
			$print_content = $content->fetch();
			
			echo '<section>
					<textarea class="textarea ckeditor"
					name="content_'. $id_content .'"
					id="content_'. $id_content .'"
					form="editing">
					'.$print_content['content'].'
					</textarea>
					</section>';
		
		}

?>
