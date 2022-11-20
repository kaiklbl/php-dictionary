<?php
    $variable = "ich bin eine String";      // String
    $variable2 = 2;                         // int
    $variable3 = 3.99;                      // double oder Real auch genannt
    $variable4 = true;                      // boolean
    $variable5 = NULL;                      // NULL

// --------Variable Variablen--------------

    $a = "text";
    $$a = "Des is a andera Text";
    echo $text;
    // Ausgabe = Des is a andera Text
    // Der Wert des $a wird als name für $$a verwendet

// --------------------------------------

// -----------------Gültigkeitsbereich-------------

    // sind immer Dort gültig wo man sie definiert hat (lokal)

    // Will man sie in functionen auch verwenden muss man sie global machen

    global $variable;

// ----------Referenz Variable------------

    $c = "hallo";
    $d = &$c;
    // jetzt $d eine Referenz zu $c

        $c = "ich bin neu";
        // durch das ändern von $c wurde jetzt auch $d verändert
    
// ----------------------------------------

// ------------Konstanten-----------------

    const konstante = "Ich bin nicht veränderbar";
    // eine unveränderbare Variable

    define("Konstante","ich bin der wert");
    // andere möglichkeit mit define eine konstante zu erstellen


// ---------------heredoc-----------------

    $text = <<<HERE
    Inhalt
    des 
    textes.
    HERE;
    // Um längere Texte zu speichern
?>