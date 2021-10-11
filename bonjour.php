<?php include("header.php"); ?>
<?php include('menu.php');?>

<?php
$target = 10;
if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    for ($repeter=0; $repeter < $target; $repeter++) { 
        echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br>';        
    }
}
else {
    echo 'Please provide firstname and lastname.';
}
?>

<?php include("footer.php"); ?>
