<?php

// -----------Entfernen---------------

unset($arr[index]);     // löscht einen Wert

unset($arr);        // löscht ganzes Array


// ----------in Schleifen----------

next($arr);         // Zeigt das nächste Element

current($arr);      // Zeigt das Aktuelle Element

prev($arr);         // Zeigt das vohrige Element

reset($arr);        // geht wieder zum ersten Elem zurück

end($arr);          // geht zum letzten Element

key($arr);          // liefert den index des aktuellen zurück


// Array Schleifen methoden

array_walk($arr, "function", "optional");       // Geht durch ein Array durch und führt eine Funktion aus

array_walk_recursive($arr,"function","optional");       // funktioniert auch bei Mehrdimensionalen Arrays


// zählen

count($arr);        // Zählt die Anzahl der Elemente

count($arr,1);      // Zählt alle Elemente eines Mehrdimensionalen Arrays


// Suchen

in_array("SuchElem", $arr, Srikt);  // Sucht das Elem in Array / Strikt heißt das es gleicher Datentyp sein muss


// Hinzufügen / Enfernen

array_pop($arr);        // Entfernt das letzte Elem

array_push($arr,"Wert");       // fügt am Ende die Elemente ein

array_shift($arr);      // Entfernt das ertse Elem

array_unshift($arr,"Werte");    // fügt am Anfang ein neues Elem ein



// löschen / Ersetzen

array_slice($arr,Startindex, länge);        // Gibt die ausgewälten zurück
                                            // Wenn man negativen Wert angibt wird von hinten gezählt

array_splice($arr,Startindex,länge,array(1,2,3));       // Hier werden Elemente ersetzt


// Verbinden

array_merge($arr1,$arr2);       // verbindet Arrays

array_merge_recursive($arr1,$arr2);     // verbindet mehrdimensionale Arrays

array_combine($Schlüssel,$Wert2);     // verbindet zwei Arrays zu einem assiozativen Array


// Variablen

extract($arr);      // Verwandelt alle Elem von einem Assiozativen Array in Variablen um.
                    // Der index is der Variablenname und der Wert der Variablenwert


range(MIN,MAX,SCHRITTE);    // erstellt ein Array von den Zahlen Min bis Max in schritte



// Sortieren

shuffle($arr);          // sortiert das Array zufällig

sort($arr);     // sortiert ein Array

rsort($arr);        // sortiert rückwärts

ksort($arr);        // sortiert nach keys



?>