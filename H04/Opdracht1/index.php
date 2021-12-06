<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

for ($i = -10 ; $i <= 40 ; $i++) {
    FahrenheitFromCelsius($i);
}


function FahrenheitFromCelsius ($celsius) {
    $fahrenheit = $celsius * 1.8 + 32;
    echo "{$celsius} degrees Celcius amounts to {$fahrenheit} degrees Fahrenheit. <br>";

}

?>

