<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H3  opdracht 06</title>
    <style>
        table, tr,td {
            border: solid 1px black;
            border-collapse: collapse;
        }
        td {
            padding: 10px ;
        }
    </style>
</head>
<body>


<?php
//
//$leeftijd = 23;
//$bedrag = 10;
//if($leeftijd > 65) {
//    $bedrag = $bedrag * 0.5;
//}
//
//if ($leeftijd <= 12) {
//    $bedrag = $bedrag * 0.5;
//}
//
//if ($leeftijd < 3) {
//    $bedrag = 0;
//}
//
//echo $bedrag;


define ("Fare", 10);
define("Senior_age", 65);
define("Senior_discount", 50);
define("Junior_age", 12);
define("Junior_discount", 50);
define("Kids_age", 3);
define("Kids_discount", 100);

echo "<table>\n";

for ($i = 0 ; $i <= 80 ; $i++) {
$age = $i;

if ($age >= Senior_age) {
    $price = Fare * ((100 - Senior_discount) / 100);
} else if ($age <=Kids_age ) {
    $price = Fare * ((100 - Kids_discount) / 100);
} else if ($age <= Junior_age) {
    $price = Fare * ((100 - Junior_discount) / 100);
} else {
    $price= Fare;
}

echo '<tr> <td>Iemand van '. $age.' betaalt '. $price. " euro. </td></tr>\n" ;

}

echo '</table>';
?>
</body>
</html>