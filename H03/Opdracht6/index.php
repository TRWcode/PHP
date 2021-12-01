<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP</title>
</head>
<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<body>

<table>
    <tr>
        <th>De spartelkuikens</th>
        <th>23</th>
        <th>zwem</th>
    </tr>
    <tr>
        <th>De waterbuffels</th>
        <th>23</th>
        <th>zwem</th>
    </tr>
    <tr>
        <th>Plonsmderin</th>
        <th>23</th>
        <th>zwem</th>
    </tr>

    <tr>
        <th>Bommetje</th>
        <th>23</th>
        <th>zwem</th>
    </tr>
</table>
<?php
$zwemclub =  array("De Spartelkuikens" => "25", "De waterbuffels" => "32", "Plonsmderin" => "11", "Bommetje" => "23");

foreach ($zwemclub as $x => $val) {
    echo "$x = $val <br>";

}

?>
</body
</html>