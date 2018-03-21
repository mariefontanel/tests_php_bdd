<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Test Bdd Php</title>
</head>
<body>

<form action="affichage.php" method="post">
	<input type="text" name="nom" placeholder="Nom ?">
	<input type="submit">
</form>

























<!-- 
<?php 
	// affichage des données saisies dans la table members de phpMyAdmin
	$bdd = new PDO('mysql:host=localhost;dbname=rezalps', 'root', 'Admin2018', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	$reponse = $bdd->query('SELECT * FROM members');
	while ($mes_donnees = $reponse->fetch()) {
		echo '<p> l\'utilisateur numéro ' . $mes_donnees['id'] . ' de Rezalps nommé ' . '<strong>' . $mes_donnees['name'] . '</strong>' . ' a comme email : ' . $mes_donnees['email'] . '</p>';
	}


	// insertion d'un nouvel utilisateur dans la table members
	$ainserer = "INSERT INTO members (name, email, password, city, birthdate, phone_number, sub_date, entreprise, siret) VALUES ('Cyril', 'monmail@test.fr', 'Azerty25', 'Valence', '02021978', '0603020105', '200320181621', '0', '0')";
	$bdd->exec($ainserer);

	// affichage d'une donnée de l'utilisateur qui a l'id numero 3
	$recup_one_id = $bdd->query('SELECT * FROM members WHERE id="5"');
	while ($mes_donnees2 = $recup_one_id->fetch()) {
		echo '<h1>' . $mes_donnees2['name'] . '</h1>';
	}
 	
 	// modification d'un utilisateur
 	$a_modifier = "UPDATE members SET name='Melissa' WHERE id='5'";
 	$bdd->exec($a_modifier);

 	$a_suppr = "DELETE FROM members WHERE id in (5,6,7)";
 	$bdd->exec($a_suppr);

?>
 -->










	<!-- <?php 
	try {
		// on se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'Admin2018', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e) {
		// en cas d'erreur on affiche un message et on arrête tout
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
	?> -->
<!-- 	CREATE TABLE `rezalps`.`members` ( `id` MEDIUMINT(7) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(30) NOT NULL , `city` VARCHAR(50) NOT NULL , `birthdate` INT(8) NOT NULL , `phone_number` BIGINT(12) NOT NULL , `sub_date` BIGINT(12) NOT NULL , `entreprise` BOOLEAN NOT NULL , `siret` BIGINT(14) NOT NULL , UNIQUE `id` (`id`)) ENGINE = MyISAM; --> 
</body>
</html>