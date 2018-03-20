<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Test Bdd Php</title>
</head>
<body>
	<?php 
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'Admin2018', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
	}

	if (isset($_GET['console'])) {
		/*$reponse = $bdd->query('SELECT * FROM jeux_video');*/ //requete simple selection de TOUT * Dans la table jeux_video
		$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ?');
		$requete->execute(array($_GET['console']));
/*http://localhost/tests/index.php?console=PC*/
		/*$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console="NES" OR "PC" ORDER BY prix DESC LIMIT 2');*/ // selection de console, nom et prix dans la table jeux video tri par NES ou PC et classé par prix ordre decroissant et limité à 2 résultats

/*		while ($donnees = $reponse->fetch()) {*/ // on parcoure la table 
		while ($donnees = $requete->fetch()) { // on parcoure la table de notre requete et on va chercher
			echo '<p>' . $donnees['console'] . '-' . $donnees['nom'] . ' '. $donnees['prix'] . ' euros</p>'; // on affiche les résultats
		}
	}
	?>
<!-- 	CREATE TABLE `rezalps`.`members` ( `id` MEDIUMINT(7) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(30) NOT NULL , `city` VARCHAR(50) NOT NULL , `birthdate` INT(8) NOT NULL , `phone_number` BIGINT(12) NOT NULL , `sub_date` BIGINT(12) NOT NULL , `entreprise` BOOLEAN NOT NULL , `siret` BIGINT(14) NOT NULL , UNIQUE `id` (`id`)) ENGINE = MyISAM; --> 
</body>
</html>