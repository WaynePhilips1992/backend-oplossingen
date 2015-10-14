<!doctype html>
<?php

$getal = 48;
$onderGrens = 0;
$bovenGrens = 10;
$tekst = "";
$tekstomgekeerd = "";

if ($getal >= 0 && $getal < 10)
{
    $onderGrens =   0;
    $bovenGrens =   10;
}elseif ($getal >= 10 && $getal < 20)
{
    $onderGrens =   10;
    $bovenGrens =   20;
}
elseif ($getal >= 20 && $getal < 30)
{
    $onderGrens =   20;
    $bovenGrens =   30;
}elseif ($getal >= 30 && $getal < 40)
{
    $onderGrens =   30;
    $bovenGrens =   40;
}elseif ($getal >= 40 && $getal < 50)
{
    $onderGrens =   40;
    $bovenGrens =   50;
}elseif ($getal >= 50 && $getal < 60)
{
    $onderGrens =   50;
    $bovenGrens =   60;
}elseif ($getal >= 60 && $getal < 70)
{
    $onderGrens =   60;
    $bovenGrens =   70;
}elseif ($getal >= 70 && $getal < 80)
{
    $onderGrens =   70;
    $bovenGrens =   80;
}elseif ($getal >= 80 && $getal < 90)
{
    $onderGrens =   80;
    $bovenGrens =   90;
}elseif ($getal >= 90 && $getal < 100)
{
    $onderGrens =   90;
    $bovenGrens =   100;
}

$tekst ='Het getal '.$getal.' ligt tussen '.$onderGrens.' en '.$bovenGrens;
$tekstomgekeerd = strrev($tekst);

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht if else if</title> 
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body class="web-backend-opdracht">

    <section class="body">

        <h1>Opdracht if else if: deel 1</h1>

        <ul>
            <li>Maak een getal met een waarde tussen 1-100</li>
            <li>Zorg ervoor dat het script kan zeggen tussen welke tientallen het getal ligt, bv 'Het getal ligt tussen 20 en 30'.</li>
            <li>Zorg er vervolgens voor dat de boodschap omgekeerd afgedrukt wordt, bv '03 ne 02 nessut tgil lateg teH'.</li>
        </ul>  

        <ul>
            <li><?=$tekst ?></li>
            <li><?= $tekstomgekeerd ?></li>
        </ul>

    </section>

</body>
</html>
