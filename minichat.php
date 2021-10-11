<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<form action="minichat_post" method='post'>
    <p>
        <label for="pseudo">Pseudo</label> : <input type="text" id="pseudo" name="pseudo" placeholder="Indiquez votre pseudo">
        <label for="message">Message</label> : <input type="text" id="message" name="message" placeholder="Message">
        <input type="submit" value="send">
    </p>
</form>



<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $db->query('SELECT pseudo, message FROM minichat ORDER BY id DESC LIMIT 10');

while ($donnees = $reponse->fetch()) {
    echo'<p><strong>' . htmlspecialchars($donnees['pseudo']) . ' : </strong> ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();
?>

<?php include('footer.php'); ?>