<?php
    $Leeftijd = 21;
    $Melk = 1.75;
    $MijnLeeftijd = "Yahya is $Leeftijd jaar <br>";
    $MelkPrijs = "Melk kost $Melk <br>";

    echo $MijnLeeftijd;
    echo $MelkPrijs;

    $True = true;
    $Null = null;
    $br = "<br>"; 

    echo $True;
    echo $Null;
    echo $br;

    $Naam = "Tom";

    echo gettype($Naam);
    echo $br;

    $MijnNaam = "Yahya";
    $HeleGetal = 1;
    $GebrokenGetal = 1.333;
    $Indicator = true;
    $NoObject = null;

    echo gettype($MijnNaam);
    echo $br;
    echo gettype($HeleGetal);
    echo $br;
    echo gettype($GebrokenGetal);
    echo $br;
    echo gettype($Indicator);
    echo $br;
    echo gettype($NoObject);
    echo "<br>";

    echo "Mijn naam is $MijnNaam en ik ben $Leeftijd";

?>
