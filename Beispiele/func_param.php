<?php

// func_num_args methode

function getNum(){
    $elem = func_num_args();
    echo "Mir wurden $elem Parameter übergeben <br>";
}

// func_get_args methode

function getElem(){
    $elem = func_get_args();
    foreach ($elem as $x){
        echo "Mir wurde $x übergeben. <br>";
    }
}

// func_get_arg methode

function getByIndex(){
    $elem = func_get_arg(0);
    echo "Ich gebe hier nur das erste aus, $elem";
}


getNum(2,3,2,1,2,3,2,3);

getElem("gansi","Hansi","Christoph");

getByIndex("hasn","sfh",6,0);

?>