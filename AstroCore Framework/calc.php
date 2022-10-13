<?php

$operator = readline("Welke operatie wil je uitvoeren? (+, -, %) \n");  
if ($operator === "+" || $operator === "-" || $operator === "%") {
} else {
    exit("geen geldige operatie");
}
$een = readline("Vul een getal in: ");
if (!is_numeric($een)) {
    exit("geen nummer");
}
$twee = readline("Vul een getal in: ");
if (!is_numeric($twee)) {
    exit("geen nummer");
}

switch ($operator) {
    case ("+"):
        echo "Uw uitkomst is: ", $een + $twee;
        break;
    case ("-"):
        echo "Uw uitkomst is: ", $een - $twee;
        break;
    case ("%"):
        echo "Uw uitkomst is: ", $een % $twee;
        break;
}

?>

