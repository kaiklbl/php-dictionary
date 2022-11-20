<?php

// ----------------Typdeklaration-----------------

function Name(int $a): int{
    // code ...
}

// Das erste int heißt es muss int übergeben werden (falls möglich wandelt es in int um)
// zweite int das rückgabewert auch int sein muss
// siehe Beispiel typdekla.php




// ----------------Strikte Typisierung---------------

declare(strict_types=1);
// Beim der strikten typesierung muss es der gleich typ sein sonst kommt ein Fehler
// Muss immer ganz oben im script stehen




// ------------------Ohne Rückgabe-----------------

function Name(string $a) :void{
    // code ...
    return;
}



// ------------------Typdeklaration mit null------------

function Name(int $param) : ?int{
    // code ...
}

// Der return kann jetzt entweder ein int oder null sein




//------------------- Union Types---------------------

function Name(int|float|string $a) :int|float{
    // code ...
}
// Wenn es verschiedene Typen sein dürfen



// ------------------mixed-----------------------

function Name(mixed $a) :mixed{
    // code ...
}

// bei mixed kann man alles reinschreiben


?>