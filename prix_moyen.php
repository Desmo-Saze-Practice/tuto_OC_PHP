<?php

try
{
	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $db->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

// $donnees = $reponse->fetch();
echo $reponse->fetch()['prix_moyen'];

$reponse->closeCursor();

?>