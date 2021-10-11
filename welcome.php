<?php 
session_start();
?>

<form action="home.php" method="post">
    <input type="text" name="username" id="username" placeholder="your name">
    <input type="password" name="password" id="password" minlength="6" placeholder="secret password">
    <input type="submit" value="submit">
</form>


