<?php

$i = 1;
$j = 2;
while ($i < 10){
    echo "$i";
    switch ($i * $j){
        case 10:
            echo "* $j = 10";
            break;
        case 16:
            echo "* $j = 16";
            break 2;
    }
    echo "<br>";
    $i++;
}

?>