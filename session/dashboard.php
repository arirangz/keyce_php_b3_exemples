<?php


session_start();


if (isset($_SESSION['username'])) {
    echo "Vous êtes connectés. Utilisateur ".$_SESSION['username'];
} else {
    header('Location: login.php');
}