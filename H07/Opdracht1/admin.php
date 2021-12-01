<?php
    session_start();
    if ($_SESSION["user"] && $_SESSION["user"]["rol"] == "Administratior") {
    echo "<h1>Welkom ". $_SESSION["user"]["naam"]. " op het admingedeelte van de website</h1>";
    echo "<p><a href='login.php'>login</a></p>";
} else {
    header('location: login.php');
}
