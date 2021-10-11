<?php include('header.php');?>
<?php include('menu.php');?>

<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');

$req->execute(array(
    'nom' => 'Battlefield 1945',
    'possesseur' => 'Martin',
    'console' => 'PC',
    'prix' => 30,
    'nbre_joueurs_max' => 100,
    'commentaires' => 'Un super fps !'
));


echo 'Le jeux à bien été ajouté!';
?>

<?php include('footer.php');?>