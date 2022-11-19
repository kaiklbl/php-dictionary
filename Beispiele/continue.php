<?php

for ($i=0; $i < 10; $i++) { 
    echo "Reihe $i: ";
    $j = 1;
    while(true){
        echo $j * $i." ";
        $j++;
        if ($j > 5) {
            echo "<br>";
            continue 2;
        }
    }
}


?>