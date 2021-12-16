<?php


$inputloop = readline("Hoeveel vrienden zal ik vragen om hun dromen?" . PHP_EOL);
if (is_numeric($inputloop) == false) {
    exit("$inputloop is geen getal");
};


for ($x = 0; $x < $inputloop; $x++) {
    $inputnaam = readline("Wat is jouw naam?" . PHP_EOL);
    $inputgebruiker = readline("$inputnaam hoeveel dromen wil je opgeven?" . PHP_EOL);
    if (is_numeric($inputgebruiker) == false) {
        exit("$inputgebruiker is geen getal");
    };
    for ($i = 0; $i < $inputgebruiker; $i++) {
        $inputdroom = readline("$inputnaam wat is jouw droom?" . PHP_EOL);
        $antwoorden [$inputnaam] [] = $inputdroom;
    };
};
  

foreach ($antwoorden as $inputnaam => $inputdroom) {
    echo $inputnaam  . " heeft dit als droom: " . PHP_EOL;
    foreach ($inputdroom as $droom) {
        echo $droom . PHP_EOL;
    };
};


?>


