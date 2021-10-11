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

$req = $bdd->exec('DELETE FROM jeux_video WHERE nom = \'Battlefield 1945\'');

echo 'Le jeux à bien été supprimé !'

?>

<?php include('footer.php');?>