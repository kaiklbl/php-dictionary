<?php

$wert;

is_bool($wert);             // überprüft ob wert ein bool ist

is_string($wert);           // überprüft ob wert ein string ist

is_numeric($wert);          // überprüft ob wert eine Zahl ist

is_array($arr);             // überprüft ob wert ein Array ist false nicht liefert es eine Warnung

isset($wert);               // überprüft ob die variable existiert

empty($wert);               // überprüft ob die Variable leer ist

is_null($wert);             // überprüft ob der Wert NULL ist

unset($wert);               // löscht den wert der Variable

// ---------Spaceship-operator--------------

    $wert = 4 <=> 7;
    // $wert hat jetzt den wert -1
    // <=> vergleicht ob kleiner (-1), größer(1), oder gleich (0) ist


// php-info

phpinfo();      // Zeigt alles über die php version an
?>