<?php include('header.php');?>
<?php include('menu.php');?>

<form action="secured.php" method="post">
    <p>Secret file access</p><br>
    <input type="password" id="pass" name="password" minlength="5">
    <a href="">
        <input type="submit" value="access secured content">
    </a>
</form>

<?php

?>

<?php include('footer.php');?>