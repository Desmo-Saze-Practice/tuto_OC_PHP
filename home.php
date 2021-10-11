<?php include("header.php"); ?>

<?php include("menu.php"); ?>

<?php 

echo('<a href="access.php">secured informations</a><br>');
echo('<a href="form.php">formulaire</a><br>');
echo('<a href="bonjour.php?prenom=florian&nom=martin">Dire bonjour</a><br>');

echo date('d/m/yy');

echo('<br>');

$age = 15;
if ($age) {
    echo 'Bonjour monsieur, vous avez ' . $age . ' ans.';
} else {
    echo 'Bonjour jeune homme, quel age avez-vous ?';
}

$myArray = array ('toto', 'titi', 'tata');
?>
<br>
<?php 
echo $myArray[1];
?>


<?php
// On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'age' => 36,
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

?>
<br>
<?php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}

echo('<br>');

$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);

echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;

echo('<br>');

$ma_variable = str_replace('Mesieurs', 'Mesdames', 'Mesieurs, veuillez attacher vos ceintures.');
 
echo $ma_variable;

?>

<?php include('footer.php'); ?>