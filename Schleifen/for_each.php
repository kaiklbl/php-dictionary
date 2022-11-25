<?php

// ---------for each-----------

foreach($arr as $a){
    // code ...
}

// wichtig! die Schleife ändert nicht das Original


foreach($arr as $key => $wert){
    // code ...
}


// Für json Schreibweise

$arr = [
    ["index",282],
    ["index",3892]
];

foreach($arr as [$index, $kurs]){
    // code ...
}





?>