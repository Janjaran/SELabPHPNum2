<?php
session_start();

// Check if a user is already logged in
if(isset($_SESSION['Username'])) {
    $currentUsername = $_SESSION['Username'];
    if($_POST['Username'] == $currentUsername) {
        $_SESSION['error'] = $currentUsername;
        unset($_SESSION['password']);
    } else {
        $_SESSION['error'] = $currentUsername;
        unset($_SESSION['Username']);
        unset($_SESSION['password']);
    }
    header('Location: index.php');
    exit;
}

// Check if submitBtn exists
if(isset($_POST['LoginBtn'])) {
    // Get the first name from index.php
    $Username = $_POST['Username'];

    // Get the password from the input field
    $password = md5($_POST['password']);

    // Set the session variables
    $_SESSION['Username'] = $Username;
    $_SESSION['password'] = $password;

    // Go back to index.php
    header('Location: index.php');
    exit;
}
?>