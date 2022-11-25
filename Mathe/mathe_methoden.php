<?php

sqrt($Zahl);        // Berechnet die Quadratwurzel

pow(Basis,Potenz);      // Berechnet die Potenz

intdiv(Zahl,Teiler);        // Liefert ein Ganzzahliges Ergebnis


// Mathematische Konstanten in PHP

M_PI        // PI
M_PI_2      // PI durch 2
M_PI_4      // PiIdurch 4
M_1_PI      // Der Kehrwert von PI
M_2_PI      // doppelter Kehrwert von PI
M_E         // die eulersche Zahl e
M_LOG2E     // Der Logarithmus von e zur Basis 2
M_LOG10E    // Der Logarithmus von e zur Basis 10
M_LN2       // Der natürliche Logarithmus von 2
M_LN10      // Der natürliche Logarithmus von 10
M_SQRT2     // Die Quadratwurzel von 2



// Zahlen konvertieren

dechex(Zahl);       // Wandel in Hexa um (wird ein String)

decbin(Zahl);       // Wandel in Binär um (wird ein String)

decoct(Zahl);       // Wandelt in Oktal um (wird ein String)

hexdec(Zahl);       // Wandel von hexa um 

bindec(Zahl);       // Wandelt von Binär um

octdec(Zahl);       // Wandelt von Oktal um


// ZufallsZahlen

rand(MIN, MAX);         // Gibt ZufallsZahl zwischen Min und Max 

rand();         // gibt von 0 bis zur größtmöglichen Zahl aus

getrandmax();       // gibt die größtmögliche Zufallszahl aus

mt_rand();      // gibt bessere Zufallszahlen aus sonst gleich wie rand



// Runden

round(Zahl,Genauigkeit);        // rundet auf kann angegeben werden wie viele Nachkommastellen

floor(Zahl);        // rundet ab

ceil(Zahl);     // rundet auf






?>