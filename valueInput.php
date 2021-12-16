<?php


$valueInput = round($argv[1]);

$biljetten = [10, 5, 2, 1];

if (!isset($argv[1])) {
    echo "Geen wisselgeld";
    exit();
};

if ($valueInput > 0) {
    foreach ($biljetten as $geldloop) {
        if ($valueInput >= $geldloop) {
            $amount = floor($valueInput / $geldloop);
            $valueInput = $valueInput % $geldloop;
            echo " $amount x $geldloop euro" . PHP_EOL . "";
        };
    };
} elseif ($valueInput == 0) {
    echo "Geld wisselgeld" . PHP_EOL;
};

?> 