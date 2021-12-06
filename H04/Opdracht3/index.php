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



<?php

$originalString = "Thomas Sibbald";
echo "Original string : {$originalString} <br> \n";
echo "Reversed string: " . reverseString($originalString). "<br> \n";


function reverseString ($originalString) {
    $stringlength = strlen($originalString);
    $reversedString = "";
    for ($i = $stringlength - 1 ; $i >= 0 ; $i--) {
        $reversedString .= substr($originalString, $i, 1);
    }
    return $reversedString;

}

?>
</body>
</html>
