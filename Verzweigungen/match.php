<?php

$num = 10;

$ergebnis = match ($num){
    30 => "Zu alt!!!",
    20 => "Viel zu alt!!!",
    10,11,12 => "Richtig!!!",
    default => "Sie haben ihr alter vergessen"
};

// match ist seit PHP 8 neu und soll das ungeliebte switch bisschen ablösen
// wichtig ist das match das ergebnis als rückgabewert speichert
// heißt man kann danach noch supper damit weiter arbeiten

// WICHTIG bei der Überprüfung arbeitet match mit genauer Gleichheit ( === )


?>