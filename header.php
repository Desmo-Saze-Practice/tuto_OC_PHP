<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<?php
if (isset($_POST['username'])) {
    setcookie('username', $_POST['username'], time() + 3600, null, null, false, true);
    $_SESSION['username'] = $_POST['username'];
    echo 'Bonjour ' . $_SESSION['username'];
    
} 
elseif (isset($_SESSION['username'])) {
    echo 'Welcome ' . $_SESSION['username'];
}
else {
    echo 'Bienvenu';
}
// print_r($_SESSION);
?>