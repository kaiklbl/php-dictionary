<?php

// Ein Sprung überspringt code der dazwischen ist und geht direkt zur gesetzten Marke
// Der Name der gesetzten Marke kann frei gewählt werden

goto Marke;
echo "Ich werde nicht Ausgeführt";


// Bei gesetzter Marke gehört : und kein ;

Marke:
echo "Bei mir geht es weiter";


// goto erlaubt keinen Sprung in eine Schleife oder switch-Fallunterscheidung.

?>