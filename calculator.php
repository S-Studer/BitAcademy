<?php

$operator = readline("Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL);
if (($operator !== "+") && ($operator !== "-") && ($operator !== "%")) {
    exit("geen geldige operatie");
}




$num1 = readline("Eerste getal?" . PHP_EOL);
if (!is_numeric($num1)) {
    exit("geen getal");
} 


$num2 = readline("Tweede getal?" . PHP_EOL);
if (!is_numeric($num2)) {
    exit("geen getal");
} if ($num2 == "0") {
    exit("Kan geen nul invoeren");
}



if ($operator == "+") {
    echo "Uw resultaat is: " . ($num1 + $num2);
} else if ($operator == "-") {
    echo "Uw resultaat is: " . ($num1 - $num2);
} else {
    echo "Uw resultaat is: " . ($num1 % $num2);
}

?>