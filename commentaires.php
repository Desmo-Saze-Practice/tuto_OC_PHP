<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

// requete
$req = $db->prepare('SELECT id, auteur, commentaire, DATE(date_commentaire) AS date_commentaire FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');

// preparation d'une ligne
$req->execute(array($_GET['billet']));

while ($data = $req->fetch()) {
    echo '<p><strong>' . htmlspecialchars(($data['auteur'])) . '</strong><p/>';
    echo '<p>' . htmlspecialchars(($data['date_commentaire'])) . '<p/>';
    echo '<p>' . htmlspecialchars(($data['commentaire'])) . '<p/>';  
}

$req->closeCursor();

?>
<a href="index.php">Retour aux articles</a>

<?php include('footer.php'); ?>