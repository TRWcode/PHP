<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        td.borderless {
            border: white;
        }

        body{
            font-family:  sans-serif;
        }

    </style>
</head>
<body>

<?php

$zemclubs = [
        "de spartelkuikens" => 25,
    "de waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23,
];

echo '<table>';

foreach ($zemclubs as $clubnaam => $aantal_leden) {
    echo '<tr>';
    echo '<td>' . $clubnaam. '</td>';
    echo '<td>' .$aantal_leden. '</td>';
    $aantal_plaatjes = floor($aantal_leden / 5);
    echo '<td>';
    for ($i = 0 ; $i <$aantal_plaatjes ; $i++){
        echo '<img src="//unsplash.it/30" alt= "Zwemmer">';

    }
    echo '</td>';
    echo '</tr>';
}

echo '</table>';


?>

</body>
</html>
