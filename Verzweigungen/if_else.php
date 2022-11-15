<?php

$bedingung = 1;
$bedingung2 = 2;

if($bedingung < $bedingung2){
    echo "if else in PHP!!!";
}elseif ($bedingung > $bedingung2) {
    # code..
}else {
    # code...
}


// -----------Kurzform--------

if ($bedingung < 1) echo "Nein";
// Wenn nur eine Anweisung kommt kann man es auch in der kurzform schreiben


// funtioniert mit else und elseif auch

if ($bedingung < $bedingung2) echo 'Jaaaa';
elseif ($bedingung > $bedingung2) echo 'Nain';
else echo "Ois Suppa";




// ----------Alternative Form-------------

if ($bedingung < $bedingung2) :
    echo "Hallo";
elseif ($bedingung > $bedingung2) :
    echo "So ist es mit :";
else :
    echo "Das else";
endif;

// sehe Beispiel if_else.php

// Diese Schreibweise mit endif ist meistens nur in HTML selber zu gebrauchen


?>