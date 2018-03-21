<?php 
	// connexion à la base BDD
  
  $bdd = new PDO('mysql:host=localhost;dbname=rezalps', 'root', 'Admin2018', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $input_name = $_POST['nom'];
  $enregistrements = "INSERT INTO test (name) VALUES ('$input_name')";
  $bdd->exec($enregistrements);



  // affichage des données saisies dans la table members de phpMyAdmin
if ('$input_name' != null) {
	$reponse = $bdd->query('SELECT * FROM test');
	$name = "";
	while ($mes_donnees = $reponse->fetch()) {
	$name .= "<li>" . $mes_donnees['name'] . "</li>";
	}
}

?>