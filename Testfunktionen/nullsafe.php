<?php

class Reise{
    public ?DateTime $beginn = null;
}

$reise = new Reise();
// $reise->beginn = new DateTime();

// Überprüfung ob ein Null dabei ist
$anreise = $reise?->beginn?->format('d.m.Y');
var_dump($anreise);

?>