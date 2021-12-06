<?php

for ($i = 0 ; $i <= 30 ; $i++) {
    if (checkIfdivisibleby3($i)) {
        $wellesnietes = " ";
    } else {


        $wellesnietes = "NIET";
    }
    echo "{$i} is {$wellesnietes} deelbaar door 3. <br>\n";

}

function checkIfdivisibleby3 ($number)
{

    return $number % 3 === 0;
}

//    if ($number % 3 === 0) {
//        $result = true ;
//    } else {
//        $result = false;
//    }
//    return $result;

