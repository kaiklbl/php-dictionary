<?php

// Normale Funktion

function Name() {
    // code ....
}



// Funktion mit Parameter

function Name($Parameter1, $Parameter2){
    // code ...
}




// Ab PHP-Version 7.3 darf man bei , am Schluss schreiben ohne Fehler

function Name($Parameter1, $Parameter2,){
    // code ...
}

// auch beim aufruf darf man das
Name("hans","bartl",)




// Vorgabe Werte

function Name($Parameter1 = "Standart"){
    // code ...
}



// Flexible Anzahl an Parameter (Wird als Array übergeben)

function Name(...$params){
    // code ...
}


// Mann kann auch Parameter übergeben ohne etwas in die Klammern zu schreiben
// Mit den Methoden func_get_args usw. hat man dann zugriff darauf
// siehe Beispiel func_param.php





// Vorgemerkte Parameter in beliebiger Reihenfolge übergeben

function Name($par1,$par2,$par3 = "Standart"){
    // code ...
}

Name("par1", par3: "Neuer Wert", par2: "Wert");





// Normale Anweisung mit return

function Name(){
    // code ...
    return;
}




// Anonyme Function

$variable = function($para){
    // code ...
}
// siehe Beispiel anonym_func.php




// Rekursive Funktionen

// Sind Functionen die sich immer wieder selbst aufrufen
// siehe Beispiel rekursiv.php


?>