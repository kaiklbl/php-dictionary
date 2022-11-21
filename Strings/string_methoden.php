<?php

// ------------Verbinden-----------
$a = 20;
$b = "Euro";
echo $a . $b; 

// Ausgabe: 20Euro  /// Konkatenation
// Beim verbinden wird alles in einen String umgewandelt


// ------------Teilen / Zusammenfügen-------------

$variable[0];   // gibt den ersten Buchstaben

$variable[-1];      // gibt dir den letzten Buchstaben (fängt von hinten an zu zählen)


chunk_split($variable,4,"Einfügen");    // splitet die Variable bei jedem 4ten Buchstaben und
                                    //  fügt was dazwischen ein / siehe Beispiel chunk_split.php

strlen($variable);      // gibt die länge zurück

wordwrap($variable, 5, "Trennzeichen");     //ähnlich wie chunk_split nur schneidet es ganze Wörter nicht ab

nl2br();    // Um \n im Browser als <br> darstellen zu lassen



// -------------Buchstaben-----------------

ord("A");       // Gibt den ASCII Code

char(ASCII)     // Gibt den dazugehöhrigen Buchstaben

strtolower($var);   // Wandelt alles in Kleinbuchstaben um

strtoupper($var);   // Wandelt alles in Großbuchstaben um

ucfirst($var);      // macht ersten Buchstaben Groß

ucwords($var);      // macht alle Anfänge groß



// ------------------Whitespaces entfernen--------------

trim($var);     // Entfernt am Ende und am Anfang die Leerzeichen

ltrim($var);    // Entfernt nur auf der linken Seite Leerzeichen

rtrim($var);    // Entfernt nur auf der rechten Seite Leerzeichen







?>