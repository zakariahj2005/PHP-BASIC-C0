
<?php
/* Er zijn drie opdrachten te doen voor jou
 * 1. Voeg view.php toe  helemaal onderaan aan dit bestand:
 * 2. calculateBitcoinAmount() functie afmaken
 * 3. Berekening aantal bitcoint toevoegen aan $transactions array


/* 
 * Deze array bevat alle eerder gemaakte transacties. 
 * De structuur van de array is als volgt: [ prijs 1 bitcoin, koopbedrag, aantal bitcoin gekocht]
 */
$transactions = [

    [4638.78, 200, 0.0431],
    [9750.61, 250, 0.0256],
    [6421.15, 450, 0.0701],
    [7276.93, 100, 0.0137],
    [8832.08, 100, 0.0113],
    [9418.41, 250, 0.0265],
    [9431.84, 250, 0.0265],
    [5211.67, 200, 0.0384]
];

/*
 * De gebruiker kan een voor een vast bedrag bitcoins kopen. 
 * Door op de knop te drukken wordt het bedrag bepaald. 
 * Die transactie bestaat uit twee stappen: 1. Ophalen huidige prijs. 2. bereken het aantal bitcoins dat gekocht is. 
 * Jouw taak om de berekening te doen in een functie calculateBitcoinAmount() waarbij je gebruik maakt van getBitcoinPrice() en het gekozen bedrag $euro.
 * Daarna moet de drie gegevens in de array gezet worden, het is tenslotte een toevoeging van de portefeuille van deze handelaar.
 */

if (isset($_GET['euro'])) {

    $euro = $_GET['euro']; //deze regel laten staan

    ////SCHRIJF HIER JE CODE.
    //schrijf hieronder de code om de gekochte bitcoin aan de array $transactions toe te voegen.

}



/* Codeer hier de functie calculateBitcoinAmount() af. De code die er staat kun je laten staan. 
 * Maak bij het maken van de oplossing gebruik van de gegeven $euro variabele
 * Bereken de hoeveelheid bitcoin die wordt gekocht bij het klikken op de knop.
 * De huidige bitcoin prijs wordt opgehaald met de functie getBitcoinPrice()
 * De functie geeft de berekening terug. 
 */

function calculateBitcoinAmount()
{
    if (isset($_GET['euro'])) {
        $euro = (int)$_GET['euro']; //Dit blokje code (if-statement) kun je laten staan.
    }


    //SCHRIJF HIER JE CODE.
    // Zorg dat data aan de transactions array toegevoegd wordt.

}


function getBitcoinPrice()
{
    //deze functie geeft de laatste prijs van bitcoin in euro's terug
    $bitcoinData = getBitcoinData();

    return convertDecimalNumber($bitcoinData->bpi->EUR->rate);
}

function getDisclaimer()
{
    //deze functie geeft de vereiste Coindesk API disclaimer terug
    $bitcoinData = getBitcoinData();
    return $bitcoinData->disclaimer;
}

function getTime()
{
    //deze functie geeft de laatste timestamp van de bitcoin prijs terug
    $bitcoinData = getBitcoinData();
    return $bitcoinData->time->updateduk;
}



function convertDecimalNumber($val)
{
    // Deze functie zet het uit de API verkregen euro getal om naar een float number zodat er mee gerekend kan worden.
    $input = str_replace('#', ',', str_replace(',', '.', str_replace('.', '#', $val)));
    $fmt = numfmt_create('nl_NL', NumberFormatter::DECIMAL);
    return number_format((float)numfmt_parse($fmt, $input, NumberFormatter::TYPE_DOUBLE), 2, '.', '');
}


function getBitcoinData()
{
    // Deze functie maakt gebruik van de Coindesk API. Met deze gratis API kun je de huidge Bitcoin prijs ophalen naar je applicatie
    // Vereiste is wel dat je de naam van Coindesk noemt in je applicatie.

    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://api.coindesk.com/v1/bpi/currentprice.json");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);

    $bitcoinInstance = json_decode($output);

    return $bitcoinInstance;
}
