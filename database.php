<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
} 
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeux_video');

while ($donnees = $reponse->fetch()) 
{
?>

<p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
    le posseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend vend pour <?php echo $donnees['prix']; ?> euros !<br />
    Ce jeu fonction sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
    <?php $donnees['possesseur']; ?> a laissé ces commentaires sur <?php $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
</p>

<?php
}

$reponse->closeCursor();

?>
