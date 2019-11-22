<?php
$totaal = 0; 
$set = explode(" ", $argv[1]);
foreach($set as $value){
    $tijd = substr($value,-1);
    switch($tijd){
        case "s":
            $antwoord = (int)$value;
            $totaal += $antwoord;
        break;
        case "m": 
            $antwoord = (int)$value * 60;
            $totaal += $antwoord;
        break;
        case "u":
            $antwoord = (int)$value * 3600;
            $totaal += $antwoord;
        break; 
        case "d":
            $antwoord = (int)$value * 86400;
            $totaal += $antwoord;
        break;
    }
}
echo $totaal . " seconden"
?>