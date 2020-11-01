# PHP-BASIC - Working with files

## Taak 01 - Require

## Uitleg

Naast `include` kun je ook `require` gebruiken. Maar require doet hetzelfde maar is iets strenger.

* Met `require` vertel je PHP dat hij deze file _MOET_ invoegen, wordt de file niet gevonden _-omdat je het verkeerde pad hebt opgegeven of omdat de file niet bestaat-_ dan krijg je een **_foutmelding_** en stopt de rest van het script.

```php
Fatal error: require(): Failed opening required 'xxx.php' (include_path='xxx') in xxx on line xx
```

Je maakt zelf de keuze welke je gebruikt `include` of `require`. De meest logische keuze is dat je `require();` gebruikt als de file __essentieel__ is, zoals in het geval van een login script.

**In PHP zijn dit de regels voor het opschrijven van een include (of require):**

_De syntax van include en require:_

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

## Leerdoelen

1. [ ] Ik weet wat include en require is
2. [ ] Ik weet het verschil tussen include en require
3. [ ] Ik kan include en require gebruiken

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een nieuwe file `menu.php` aan en zet deze in een map includes
3. Maak een nieuwe file `database.php` aan en zet deze in een map includes
4. Maak een menu met een unordered list en 3 menu-items in `menu.php`

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:

>* menu-item 1
>* menu-item 2
>* menu-item 3

## Bronnen

>[W3 Schools - includes](https://www.w3schools.com/php/php_includes.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:25213464
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
