<?php
function mijnNaamIsGroot(){
    $voornaam = " zakaria ";
    $achternaam = " el hajjioui ";
    $helemaal = " Mijn naam is " . $voornaam . $achternaam;
    strtoupper($voornaam . $achternaam);
    echo $helemaal;
}

mijnNaamIsGroot();

?>