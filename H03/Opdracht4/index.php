<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP</title>
    <style>
        body {
            text-align: center;
        }

        .rood {
            border: red solid 5px;
        }

        .groen {
            border: green solid 5px;
        }
    </style>
</head>
<body>
<?php

for ($i = 1 ; $i <=10 ; $i++) {
    if ($i %2 == 0) {
        $class = "class='rood'";
        } else  {
        $class = "class='groen'";
    }
    echo "<img ".$class. "src= 'img/actiefoto".$i.".jpg'>";
}
?>
</body
</html>