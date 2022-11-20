<?php

// Berechnung der Falkultät mit Hilfe Rekursiver Funktion

function falkultaet($i){
    if($i > 0){
        return $i * falkultaet($i - 1);
    }else{
        return 1;
    }
}

echo falkultaet(5);


?>