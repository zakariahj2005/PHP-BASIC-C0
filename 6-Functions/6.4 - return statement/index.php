
<?php

function geefTienProcent() {
    $koopprijs = 75;
    $korting = 10;
    $korting = ($koopprijs / 100) * $korting;
    return $koopprijs - $korting;
}

function totaleBedrag() {
    echo ("Het totale bedrag is " . geefTienProcent() . " Euro");

}

totaleBedrag();