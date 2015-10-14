<!doctype html>
<?php 
$dagGetal = 1;
$dagNaam = "";
$blnGeldig = "true";
$tekst = "";

switch ($dagGetal) {
    case 1:
    $dagNaam = "maandag";
    break;
    case 2:
    $dagNaam = "dinsdag";
    break;
    case 3:
    $dagNaam = "woensdag";
    break;
    case 4:
    $dagNaam = "donderdag";
    break;
    case 5:
    $dagNaam = "vrijdag";
    break;
    case 6:
    $dagNaam = "zaterdag";
    break;
    case 7:
    $dagNaam = "zondag";
    break;
    default:
    $blnGeldig = "false";
    break;
}

if(!$blnGeldig){
    $tekst = "Het getal ".$dagGetal." is geen geldig getal.";
}else{
    $tekst = "Dag ".$dagGetal." van de week komt overeen met ".$dagNaam.".";    
}


?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht switch</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body class="web-backend-opdracht">

    <section class="body">

        <h1>Opdracht switch: deel 1</h1>

        <ul>
            <li>Maak een HTML-document met een PHP code-block</li>
            <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
            <li>Maak gebruik van een switch en probeer alles te herschrijven i.p.v. te kopiëren.</li>
        </ul>  

        Oplossing <br/>
        <?=$tekst ?>

    </section>

</body>
</html>
