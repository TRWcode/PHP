<?php
echo $_POST['voornaam'];
echo "<br>".$_POST['adres'];
echo "<br>".$_POST['email'];

if ($_POST['voornaam'] == "") {
    echo "vul uw naam in";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a>";
}

if ($_POST['adres'] == "") {
    echo "vul uw adres in";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a>";
}

if ($_POST['email'] == "") {
    echo "vul uw email in";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a>";
}

if ($_POST['wachtwoord'] == "") {
    echo "vul uw wachtwoord in";
    echo "<a href=\"formulier.html\"> Terug naar het formulier</a>";
}


