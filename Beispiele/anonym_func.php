<?php

function ausgabe($trenner){
    $anrede = "Meine ";
    $ausgabe = function($param) use ($anrede,$trenner){
        echo " $anrede $param $trenner";
    };

    $ausgabe('Ausgabe 1');
    $ausgabe('Ausgabe 2');
}

ausgabe("<br>");


?>