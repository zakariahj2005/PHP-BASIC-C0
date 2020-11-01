# PHP-BASIC - Working with files

## Taak 03 - HTML & PHP

## Uitleg

In de vorige taken heb je het misschien al kunnen zien en in deze taak gaan we er even dieper op in: het is mogelijk om HTML in een PHP bestand (`.php`) te gebruiken. Het is daarbij belangrijk dat je de openings `<?php` tag en sluit tag `?>` op een juiste wijze gebruikt.

Voorbeeld: __home.php__

```html
<?php  
    require 'database.php';
?>
<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>

</body>
</html>
```

Je ziet in bovenstaand voorbeeld dat een menu met behulp van php wordt ingevoegd in de `<div class="menu"> .... </div>`

Maar je kunt ook andere php code schrijven en het resultaat van een if-statement op het scherm tonen, bijvoorbeeld __dashboard.php__:

```html
<?php  
    require 'database.php';

    $leeftijd = 15;
?>
<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 16 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
        ?>
    </div>

</body>
</html>
```

Je ziet dat php geopend wordt `<?php` en er dan normale php-code volgt. Zodra de php code klaar is dan sluiten we de php code weer met `?>`. Als je het bestand opent in je browser en je bekijkt de bron, dan zie je alleen html staan en geen php-code.

## Leerdoelen

1. [ ] Ik weet wat include en require is
2. [ ] Ik codeer een php-bestand met daarin html-code
3. [ ] Ik codeer php in html

## Opdracht

1. Run de voorbeeld code die hierboven staat in je browser (`dashboard.php`)
2. Bekijk de broncode eens. Wat zie je? Zie je php-code staan?
3. Schrijf daarna zelf code in `index.php` bestand.
4. Codeer de standaard html code in index.php
5. Maak een div-element met een `id="isMeerderJarig"`
6. Codeer in het div-element php code waarbij je checkt of de leeftijd van een persoon ouder is dan 18 jaar. Echo het resultaat op het scherm.

## Eindresultaat

Als je bovenin je index.php een variabele $leeftijd declareert met een getal. Dan kan je controleren of je code werkt en of de leeftijdChecker werkt.

## Bronnen

>[W3 Schools - includes](https://www.w3schools.com/php/php_includes.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:25213464
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
