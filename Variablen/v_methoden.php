<?php

    $variable = "irgendwas";

    // gibt den Datentyp zurück
    gettype($variable);

// ----------Datentypen testen---------

    is_bool($variable);             // überprüft ob wert ein bool ist
    is_string($variable);           // überprüft ob wert ein string ist
    is_numeric($variable);          // überprüft ob wert eine Zahl ist
    isset($variable);               // überprüft ob die variable existiert
    empty($variable);               // überprüft ob die Variable leer ist

    // Diese Methoden geben alle true oder false zurück 

// -----------------------------------

// ---------Typenkonvertierung----------

    $a = "true";
    $b = (bool) $a;
    // Wandelt den String a in einen boolean um

    settype($a, "boolean");
    // alternativ kann man mit settype den typen ändern

// ------------------------------------

    strtolower($variable);          // macht alle Buchstaben klein

?>