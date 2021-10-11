<?php include('header.php'); ?>
<?php include('menu.php');?>

<p>
    <?php
    echo htmlspecialchars('Bonjour ' . $_POST['pseudo'] . ' vous avez fait le ' . $_POST['choix'] . ' et avez déclaré "' . $_POST['message'] . '"');
    ?>
</p>

<?php if (isset($_FILES['monfichier']) && $_FILES['monfichier']['error'] == 0) {
    if ($_FILES['monfichier']['size'] <= 1000000) {
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];

        $authorized_extension = array('jpg', 'jpeg', 'gif', 'png');

        if ( in_array($extension_upload, $authorized_extension)) {
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'upload/' . basename($_FILES['monfichier']['name']));
            echo 'File succefully uploaded';
        }
    }
}
?>

<?php include('footer.php'); ?>