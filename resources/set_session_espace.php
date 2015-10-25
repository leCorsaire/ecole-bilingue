		<?php

			$pass_hache = sha1(htmlspecialchars($_POST['passwd']));
			$username = htmlspecialchars($_POST['username']);
			$req = $bdd->prepare('SELECT id, username, passwd FROM users WHERE username = :username AND passwd = :passwd');
			
			$req->execute(array(
			'username' => $username,
			'passwd' => $pass_hache
			));
			
			$resultat = $req->fetch();
			if (isset($_POST['username'])==NULL AND ($POST['passwd'])==NULL)
			{
				session_destroy();
				echo '<script>window.location.href="login.php?missing"</script>';
			}
			
			elseif (!$resultat)
			{
				session_destroy();
				echo '<script>window.location.href="login.php?error"</script>';
			}
			
			else
			{
				$statut = $bdd->prepare('SELECT statut FROM users WHERE username = :username');
				$statut->execute(array('username' => $resultat['username']));
				
				$res_statut = $statut->fetch();
			
				$_SESSION['id'] = $resultat['id'];
				$_SESSION['username'] = $resultat['username'];
				$_SESSION['statut'] = $res_statut['statut'];
				$_SESSION['connexion'] = true;
				
			}
			
		?>