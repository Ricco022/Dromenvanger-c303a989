<?php

$maten = array();

$nmaten = readline("Hoeveel vrienden heb je?");

if (is_numeric($nmaten)) {
} else {
    exit($nmaten . " is geen getal, probeer het opnieuw");
}

for ($i=0; $i < $nmaten; $i++) { 
    $naam = readline("Wat is je naam?");
    $ndromen = readline("Hoeveel dromen ga je opgeven?");
    $dromen = array();
    for ($j=0; $j < $ndromen; $j++) { 
        $dromen[] = readline("Wat is jouw droom?");
    }
    if (is_numeric($ndromen)) {
    } else {
        exit($ndromen . " is geen getal, probeer het opnieuw");
    }
    $array = array(
        $naam => $dromen
    );
    $maten = array_merge($maten, $array);
}
foreach ($maten as $naam => $dromen) {
    foreach ($dromen as $value) {
        print ($naam .' ' . "heeft dit als droom:" . ' ' . $value . PHP_EOL);
    }
}
?>