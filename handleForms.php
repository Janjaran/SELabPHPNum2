<?php
session_start();

if(isset($_SESSION['Username'])) {
    $_SESSION['error'] = $_SESSION['Username'];
    unset($_SESSION['password']);  
    header('Location: index.php');
    exit;
}

if(isset($_POST['LoginBtn'])) {
    $Username = $_POST['Username'];

    $password = md5($_POST['password']);

    $_SESSION['Username'] = $Username;
    $_SESSION['password'] = $password;

    header('Location: index.php');
    exit;
}
?>