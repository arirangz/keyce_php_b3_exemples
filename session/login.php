<?php

session_start();

if (isset($_POST['loginForm'])) {
    if ($_POST['username'] === "admin" && $_POST['password'] === "XD2Ka@" ) {
        //Prévient les attaques de fixation de session
        session_regenerate_id(true);
        $_SESSION['username'] = $_POST['username'];
        header('Location: dashboard.php');
    }
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </p>
        <input type="submit" value="Login" name="loginForm">
    </form>
</body>
</html>