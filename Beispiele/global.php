<?php

$text = "Ich kann so in Funktionen benutzt werden";

function getGlobal(){
    echo $GLOBALS["text"];
}

getGlobal();



?>