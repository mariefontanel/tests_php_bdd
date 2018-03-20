<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Test Bdd Php</title>
</head>
<body>
	<?php 
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'Admin2018');
		$reponse = $bdd->query('SELECT * FROM jeux_video');
		while ($donnees = $reponse->fetch()) {
			echo '<p>' . $donnees['console'] . '-' . $donnees['nom'] . '</p>';
		}
	?>

</body>
</html>