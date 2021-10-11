<?php include('header.php');?>
<?php include('menu.php');?>

<?php
if ($_POST['password'] == 'kangourou') {
    print_r($_POST);
    echo '<p><strong>Classified</strong><br>Secret information: Macron est le fils caché de Lepen</p>';
} else {
    print_r($_POST);
    echo '<p><strong>Access denied</strong>, classified informations</p>';
}

?>

<?php include('footer.php');?>
