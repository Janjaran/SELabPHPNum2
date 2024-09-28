<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 2</title>
    <?php session_start(); ?>

<form action="handleForms.php" method="POST">
    <p>Username: <input type="text" placeholder="Username" name="Username"></p>
    <p>Password: <input type="text" placeholder="Password" name="Password"></p>
    <p><input type="submit" value="Login" name="LoginBtn"></p>
</form>

<a href="unset.php"><p><input type="submit" value="Logout" name="LogoutBtn"></a>
</head>
<body>
    
<h2>
    <?php
    // when someone is already logged in
    if(isset($_SESSION['error'])) {
        echo $_SESSION['error'] . " is already logged in. Wait for them to log out first.";
        unset($_SESSION['error']); 
    } elseif(isset($_SESSION['Username'])) {
        echo "User logged in: " . $_SESSION['Username'];
    }
    ?>
</h2>

<h2>
    <?php
    if(isset($_SESSION['password'])) {
        echo "User password: " . $_SESSION['password'];
    }
    ?>
</h2>
    
</body>
</html>