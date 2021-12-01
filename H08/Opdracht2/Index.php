<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Index.php" method="get">
    <label for="minPrijs">Minimale prijs</label>
    <input type="text" name="minPrijs" id="minPrijs">

    <label for="maxPrijs">Maximale prijs</label>
    <input type="text" name="maxPrijs" id="maxPrijs">
    <input type="submit" name="knop">
</form>


<?php
require('Autos.php');


$minPrijs = isset($_GET['minPrijs']) && !empty($_GET['minPrijs']) ? $_GET['minPrijs'] : 0;
$maxPrijs = isset($_GET['maxPrijs']) && !empty($_GET['maxPrijs']) ? $_GET['maxPrijs'] : 99999999;


$autos= [
    new Auto('Audi', 102500.00, '//unsplash.it/200/100'),
    new Auto('Ferrai', 99500.00, '//unsplash.it/199/100'),
    new Auto('Fiat', 10500.00, '//unsplash.it/201/100')
];

foreach ($autos as $auto){
    if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs) {


    echo $auto->getMerk() . ' - ' .$auto->getPrijs() . '<br>' ;
    echo '<img src="' . $auto->getImageUrl() .  '"alt="plaatje van een auto"> <br>';
    }
}
?>
</body>
</html>