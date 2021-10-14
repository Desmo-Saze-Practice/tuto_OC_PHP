<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<h1>Derniers articles</h1>
<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$req = $db->query('SELECT id, titre, contenu, DATE(date_creation) AS date_creation FROM `billets` ORDER BY date_creation ASC LIMIT 5');

while ($data = $req->fetch()) {
    echo '<p>' . htmlspecialchars(($data['titre'])) . '<p/>';
    echo '<p>' . htmlspecialchars(($data['date_creation'])) . '<p/>';
    echo '<p>' . htmlspecialchars(($data['contenu'])) . '<p/>';  
    echo '<p><a href="commentaires.php?billet=' . $data['id'] . '">Commentaires</a><p/>';
}

$req->closeCursor();

?>
<?php include('footer.php'); ?>