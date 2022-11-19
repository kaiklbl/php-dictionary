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

?>