<?php
echo $_POST['voornaam'];
echo "<br>".$_POST['adres'];
echo "<br>".$_POST['email'];

if ($_POST['voornaam'] == "") {
    echo "vul uw naam in<br>";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a><br>\n";
}

if ($_POST['adres'] == "") {
    echo "vul uw adres in<br>";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a> <br>\n";
}

if ($_POST['email'] == "") {
    echo "vul uw email in<br>";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a> <br>\n";
}

if ($_POST['wachtwoord'] == "") {
    echo "vul uw wachtwoord in<br>";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a><br>\n";
}


